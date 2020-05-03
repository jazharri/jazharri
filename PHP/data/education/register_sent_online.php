<?php
	error_reporting(E_ALL);
	session_start();
	ini_set('display_error', 'on');
	ini_set('display_errors', 'on');
	
	include "conni.php";
	include "sendmail.php";
	
	if ($_SERVER["REQUEST_METHOD"] <> "POST") 
		die("You can only reach this page by posting from the html form");
	
    function cc($str)
	{
		$str = trim ($str);
        $str = htmlspecialchars($str);
		$str = stripslashes ($str);
		$str = html_entity_decode ($str);
		$str = strip_tags ($str);
		$str = str_replace (array('\n', '\t', '\r', '\s'), '', $str);
		$str = str_replace (array('<?php', '<?PHP', '<?', '?>', '<script>', '</script>', '<SCRIPT>', '</SCRIPT>'), array('&lt;?php', '&lt;?PHP', '&lt;?', '?&gt;', '', ''), $str);
		$str = addslashes ($str);
		$str = preg_replace("#<img\s+.?src\s=\s*[\"'](.+?)[\"'].*?\>#", "\\1", $str);
		$str = preg_replace("#<img\s+.?src\s=\s*(.+?).*?\>#", "\\1", $str);
		return $str;
    }		
	
	//var_dump($_POST);

	$course_name	= cc($_POST['topic1']);
	$date_edukasi	= cc($_POST['date1']);
	$venue_edukasi	= cc($_POST['venue1']);
	$tema_edukasi	= cc($_POST['tema1']);	
	$time_edukasi	= cc($_POST['time1']);
	$name			= cc($_POST['txtName']);
	$email			= cc($_POST['txtEmail']);
	$hp				= cc($_POST['txtTel']);
	$pic_edukasi	= cc($_POST['pic1']);
	$entry_date 	= "";

	$con   = mysqli_connect('localhost','securities','0k3z0n3.c0m', 'securities');	
	$sql = "INSERT INTO edukasi 
		(`course_name`,
		 `date_edukasi`,
		 `venue_edukasi`,
		 `tema_edukasi`,
		 `time_edukasi`,
		 `name`,
		 `email`,
		 `hp`,
		 `pic_edukasi`,
		 `entry_date`
		) 
		VALUES 
		('".$course_name."',
		'".$date_edukasi."',
		'".$venue_edukasi."',
		'".$tema_edukasi."',
		'".$time_edukasi."',
		'".$name."',
		'".$email."',
		'".$hp."',
		'".$pic_edukasi."',
		NOW()
		)"; 

	$query = mysqli_query($con , $sql);	

	if($query){
		echo 'true';
		$sql_id = mysqli_query($con , "select id_edukasi, name, hp, course_name, date_edukasi, time_edukasi, venue_edukasi, tema_edukasi, pic_edukasi from edukasi where email='$email' ORDER BY id_edukasi DESC limit 1 ");
		//$get_id = mysqli_result($sql_id, 0);
		$get_id = mysqli_num_rows($sql_id, 0);
		$id_edukasi = $get_id;
		include 'class.email-query-results-as-csv-file.php';
		
		//$emailCSV = new EmailQueryResultsAsCsv('localhost','securities','securities','0k3z0n3.c0m');
		//$emailCSV->setQuery("SELECT * FROM edukasi ORDER BY name DESC LIMIT 0,1");
		//$emailCSV->sendEmail("customer.service@mncgroup.com", "New Registrasi Edukasi");
		
		sendmailnuser($email,'callcenter.mncs@mncgroup.com',$name, $course_name, $date_edukasi, $time_edukasi, $venue_edukasi, $tema_edukasi, $hp, $pic_edukasi);
		
		header("Location: https://mncsekuritas.id/thankyou.edukasi");
	}else{
		echo 'false<br/>';
		//print_r($_POST);
		mysqli_query('ROLLBACK');
	}

	//update quota
	function updateQuota($course_name) {
		$conn   = mysqli_connect('localhost','securities','0k3z0n3.c0m', 'securities');
		$sql 	= "UPDATE edukasi_quota SET quota=quota-1 WHERE topic = '$course_name'";
		echo "sql=$sql<br/>  ";
		$result = mysqli_query($conn , $sql);
	}
	if ($course_name  != "Tidak Ikut") updateQuota($course_name);


?>