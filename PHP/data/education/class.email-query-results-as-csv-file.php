<?php

class EmailQueryResultsAsCsv {

  
  private $mySQL_server = '';
  private $mySQL_server_port = '3306';
  private $mySQL_database = '';
  private $mySQL_user = '';
  private $mySQL_password = '';
  private $mySQL_query = '';
  private $csv_file_name = '';
  private $arr_file_data = array();
  private $csv_contain = '';
  private $csv_separate = '';
  private $csv_end_row = '';
  private $email_html_msg = "<h1>Hai Ada Registrasi Edukasi</h1>
  <p>silahkan download lampiran yang berisi data registrasi edukasi</p>";
  private $debugFlag = False;
  public function __construct($s, $d, $u, $p) {
    $this->setDBinfo($s, $d, $u, $p);
    $this->setCSVinfo();
    $this->setCSVname();
  }
  
  public function __destruct() {
    
  }
  
  public function setDBinfo($s, $d, $u, $p) {
    $this->mySQL_server = $s;
    $this->mySQL_database = $d;
    $this->mySQL_user = $u;
    $this->mySQL_password = $p;
  }
  
  public function setDBinfoServerPort($p) {
    $this->mySQL_server_port = $p;
  }
  
  public function setQuery($sql) {
    $this->mySQL_query = $sql;
  }
  
  public function setEmailMessage($msg) {
    $this->email_html_msg = $msg;
  }
  
  public function setCSVname($fn = "New Registrasi Edukasi.csv") {
    $this->csv_file_name = $fn;
  }
  
  public function setCSVinfo($c = '"', $s = ",", $er = "\n") {
    $this->csv_contain = $c;
    $this->csv_separate = $s;
    $this->csv_end_row = $er;
  }
  
  public function setMultiFile($fn, $sql) {
    $this->arr_file_data[] = array("csv_file_name" => $fn, 
      "mySQL_query" => $sql,
      "csv_contain" => $this->csv_contain,
      "csv_separate" => $this->csv_separate,
      "csv_end_row" => $this->csv_end_row);
  }
  
  public function debugMode($bool) {
    $this->debugFlag = $bool;
  }
  
  public function sendEmail($email_from, $email_to, $email_subject) {
    
    if(!isset($this->arr_file_data[0]["csv_file_name"])) {
      $this->arr_file_data[0] = array("csv_file_name" => $this->csv_file_name, 
        "mySQL_query" => $this->mySQL_query,
        "csv_contain" => $this->csv_contain,
        "csv_separate" => $this->csv_separate,
        "csv_end_row" => $this->csv_end_row);
    }

    $mysqli = new mysqli($this->mySQL_server, $this->mySQL_user, $this->mySQL_password, $this->mySQL_database, $this->mySQL_server_port);
    if ($mysqli->connect_errno) {
         die('ERROR: Could not connect to MySQL server: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
    if ($this->debugFlag) {
      echo "Step 1: Connected to MySQL server successfully. \n\n";
    }
    
    $headers = "From: ".$email_from;

   
    $random_hash = md5(date('r', time())); 
    $mime_boundary = "==Multipart_Boundary_x{$random_hash}x";

    
    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";

   
    $email_message = "This is a multi-part message in MIME format.\n\n" .
    "--{$mime_boundary}\n" .
    "Content-Type:text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" .
    $this->email_html_msg . "\n\n";
    
    
    $files_attached_cnt = 0;
    foreach ($this->arr_file_data AS $file_data) {
      
      
      $csv_file = $this->buildCSV($file_data, $mysqli);
      
      if ($csv_file != "") {
        $files_attached_cnt += 1;
      
        
        $data = chunk_split(base64_encode($csv_file)); 
        
        
        $email_message .= "--{$mime_boundary}\n";
        
        
        $email_message .= "Content-Type: application/octet-stream;\n" .
        " name=\"{$file_data['csv_file_name']}\"\n" .
        "Content-Disposition: attachment;\n" .
        " filename=\"{$file_data['csv_file_name']}\"\n" .
        "Content-Transfer-Encoding: base64\n\n" .
        $data . "\n\n";
      }
    }
    
    $email_message .= "--{$mime_boundary}--\n";
    
    if ($files_attached_cnt > 0) {
      

      $sendit = @mail($email_to, $email_subject, $email_message, $headers);
      if(!$sendit) {
        die("ERROR: The Email could not be sent.");
      }

      if ($this->debugFlag) {
        echo "Step 4: Email sent with attachment. \n\n";
      }
    } else {
      if ($this->debugFlag) {
        echo "Step 4: No data found for query. Email NOT sent. \n\n";
      }
    }

    
    //$mysqli->close();
    
    
    $this->arr_file_data = array();

    if ($this->debugFlag) {
      echo "FINISHED.";
    }
  }
  
  private function buildCSV($file_data, $mysqli) {
    
    $csv_file = "";
    
    
    $result = $mysqli->query($file_data["mySQL_query"]);
    if (!$result) {
      die("ERROR: Invalid query \n MySQL error: (" . $mysqli->errno . ")" . $mysqli->error . "\n Your query: " . $this->mySQL_query);
    }
    
    
    if ($result->num_rows > 0) {
      if ($this->debugFlag) {
        echo "Step 2 (repeats for each attachment): MySQL query ran successfully. \n\n";
      }
      
      
      $columns = $mysqli->field_count;
      $column_data = $result->fetch_fields();
      
      
      $header_row = '';
      $i = 0;
      foreach ($column_data as $col) {
      //for ($i = 0; $i < $columns; $i++) {
        $column_title = $file_data["csv_contain"] . stripslashes($col->name) . $file_data["csv_contain"];
        $column_title .= ($i < $columns-1) ? $file_data["csv_separate"] : ''; #the last column does not have the column separator
        $header_row .= $column_title;
        $i++;
      }
      $csv_file .= $header_row . $file_data["csv_end_row"]; # add header row to CSV file
      
      
      $data_rows = '';
      while ($row = $result->fetch_array(MYSQLI_NUM)) {
        for ($i = 0; $i < $columns; $i++) {
          
          $data_rows .= $file_data["csv_contain"] . preg_replace('/'.$file_data["csv_contain"].'/', $file_data["csv_contain"].$file_data["csv_contain"], stripslashes($row[$i])) . $file_data["csv_contain"];
          $data_rows .= ($i < $columns-1) ? $file_data["csv_separate"] : '';
        }
        $data_rows .= $this->csv_end_row; # add data row to CSV file
      }
      $csv_file .= $data_rows; # add the data rows to CSV file
      
      if ($this->debugFlag) {
        echo "Step 3 (repeats for each attachment): CSV file built. \n\n";
      }
    }  else {
       echo "Step 2 (repeats for each attachment): MySQL query ran successfully \n\n";
       echo "Step 3 (repeats for each attachment): NO results were returned for this query. No file will be sent for the following query: \n " . $this->mySQL_query ." \n\n";
    }
    
    
    return $csv_file;
  }
}
?>
