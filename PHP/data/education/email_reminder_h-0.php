<?php
error_reporting(1);
include_once '../../../po-library/po-database.php';
include_once 'webservice.php';

//$today = date("Y-m-d", strtotime("May 11 2017"));	
//$today = date("Y-m-d");
$date = date('Y-m-d', strtotime($today. ' + 1 days'));
$table_clinic = new PoTable('edukasi');

//$clinics = $table_edukasi->findManualQuery2("*","where date_edukasi = '".$date."' and active = 'Y'");
$clinics = $table_edukasi->findManualQuery2("*","where date_edukasi = '".$date."' ");
$isValid = $clinics->valid();
$From="callcenter.mncs@mncgroup.com";
//$cc="cs.mncs@mncgroup.com, nathania.lukman@mncgroup.com, galih.sakti@mncgroup.com"; 
$cc="juanto.azharri@mncgroup.com"; 

if($isValid) {		
	foreach($clinics as $edukasi) {	
		$table_user = new PoTable('users');
		
		$user = $table_user->findBy('id_edukasi', $clinic->user_id);
		$user = $user->current();
		
		$to = "$edukasi->email"; 
		
		$date_edukasi = date('d F Y', strtotime($edukasi->date_edukasi));
		$nama = $edukasi->name;
		$waktu = $edukasi->time_edukasi;
		$tempat = $edukasi->venue_edukasi;
		
		$subject = "Reminder Appointment Klinik Edukasi Bapak/Ibu $clinic->name - $date_edukasi";
		
		
		$message = "Yth. Bapak/Ibu $nama ,".  "<br><br>" . 
		"<b>Jadwal $clinic->course_name Anda sudah dekat!</b>"."<br>" .
		"Kami mengharapkan Anda untuk dapat hadir tepat waktu. Berikut konfirmasi jadwal yang telah Anda pilih :" .  "<br><br>" .
		
		"Hari/Tanggal&nbsp: <b>$date_edukasi</b>" . "<br>" .
		"Waktu&nbsp: <b>$waktu WIB</b>". "<br>" .
		"Tempat "."&emsp; ".": $tempat" . "<br>" .

		"Terima kasih atas perhatian Anda.". "<br><br><br>" .
		
		"Kami siap untuk segera menyambut Anda di MNC Sekuritas.";  

		//Generate a boundary string 
		$semi_rand = md5(time()); 
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 


			//Add the headers for a file attachment 
		$headers = "MIME-Version: 1.0\n" . 
				   "From: $From\n" . 
				   "Cc: $cc\n". 
				   "Content-Type: multipart/mixed;\n" . 
				   " boundary=\"{$mime_boundary}\""; 


			//Add a multipart boundary above the plain message 

		  
		$message = "This is a multi-part message in MIME format.\n\n" . 
				  "--{$mime_boundary}\n" . 
				  "Content-Type: text/html; charset=\"iso-8859-1\"\n" . 
				  "Content-Transfer-Encoding: 7bit\n\n" . 
				  $message . "\n\n"; 

		$message .= "--{$mime_boundary}--\n"; 

		if(mail($to, $subject, $message, $headers))  {
			echo "mail to $clinic->email sent";
		} else {
			echo "mail to $clinic->email not sent";
		}
	}
} else {
	echo "tak ada email dikirim";
}
	
	
?>