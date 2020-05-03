<?php		
function tgl_indo($tanggal)
	{
		$bulan = array (
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}

function sendmailnuser($to, $from, $name, $course_name, $date_edukasi, $time_edukasi, $venue_edukasi, $tema_edukasi, $hp, $pic_edukasi ){	

	$subject = 'Notifikasi Pendaftaran Kelas Edukasi MNC Sekuritas';

	$header_email = " ";
	$message = " ";
	
	if ($course_name == "Klinik Edukasi Syariah (Basic) 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran <b>".substr($course_name, 0, -1)." - Online Class</b> MNC Sekuritas pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Jumat, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>
					<tr>
						<th align='left'>Materi<th>
						<th align='left'>:<th>
						<th align='left'>Landasan Hukum & Produk Pasar Modal Syariah<th>
					<th>					
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://global.gotowebinar.com/register/641829411<th>
					<tr>
					<tr>
						<th align='left'>Webinar ID<th>
						<th align='left'>:<th>
						<th align='left'>641-829-411<th>
					<tr>					
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>#DiRumahAja tetep produktif belajar investasi Saham Syariah bersama MNC Sekuritas!<br>Happy learning!</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}
	
	if ($course_name == "Klinik Edukasi Syariah (Basic) 2") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran <b>".substr($course_name, 0, -1)." - Online Class</b> MNC Sekuritas pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Rabu / ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>
					<tr>
						<th align='left'>Materi<th>
						<th align='left'>:<th>
						<th align='left'>Landasan Hukum & Produk Pasar Modal Syariah<th>
					<th>					
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://global.gotowebinar.com/register/394003539<th>
					<tr>
					<tr>
						<th align='left'>Webinar ID<th>
						<th align='left'>:<th>
						<th align='left'>394-003-539<th>
					<tr>					
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>#DiRumahAja tetep produktif belajar investasi Saham Syariah bersama MNC Sekuritas!<br>Happy learning!</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}

	
	if ($course_name == "Klinik Edukasi Syariah (Intermediate) 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran <b>".substr($course_name, 0, -1)." - Online Class</b> MNC Sekuritas pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Kamis / ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>
					<tr>
						<th align='left'>Materi<th>
						<th align='left'>:<th>
						<th align='left'>Aplikasi MNC Trade Syariah<th>
					<th>					
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://global.gotowebinar.com/register/526868347<th>
					<tr>
					<tr>
						<th align='left'>Webinar ID<th>
						<th align='left'>:<th>
						<th align='left'>526-868-347<th>
					<tr>					
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>#DiRumahAja tetep produktif belajar investasi Saham Syariah bersama MNC Sekuritas!<br>Happy learning!</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}
	
	if ($course_name == "Klinik Edukasi Syariah (Intermediate) 2") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran <b>".substr($course_name, 0, -1)." - Online Class</b> MNC Sekuritas pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Rabu, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>
					<tr>
						<th align='left'>Materi<th>
						<th align='left'>:<th>
						<th align='left'>Aplikasi MNC Trade Syariah<th>
					<th>					
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://global.gotowebinar.com/register/775164947<th>
					<tr>
					<tr>
						<th align='left'>Webinar ID<th>
						<th align='left'>:<th>
						<th align='left'>775-164-947<th>
					<tr>					
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>#DiRumahAja tetep produktif belajar investasi Saham Syariah bersama MNC Sekuritas!<br>Happy learning!</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	
	
	
	if ($course_name == "Klinik Edukasi Syariah (Advanced) 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran <b>".substr($course_name, 0, -1)." - Online Class</b> MNC Sekuritas pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Selasa, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>	
					<tr>
						<th align='left'>Materi<th>
						<th align='left'>:<th>
						<th align='left'>Analisa Teknikal dan Fundamental Syariah<th>
					<th>					
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://global.gotowebinar.com/register/594222939<th>
					<tr>
					<tr>
						<th align='left'>Webinar ID<th>
						<th align='left'>:<th>
						<th align='left'>594-222-939<th>
					<tr>					
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>#DiRumahAja tetep produktif belajar investasi Saham Syariah bersama MNC Sekuritas!<br>Happy learning!</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	
	
		
	
//start email spm	
	if ($course_name == "Sekolah Pasar Modal (Basic) 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran <b>".substr($course_name, 0, -1)." - Online Class</b> MNC Sekuritas pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Selasa, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'></th>
						<th align='left'></th>
						<th align='left'></th>					
					</tr>			
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Peserta SPM (Basic) wajib membuka rekening saham di MNC Sekuritas dengan minimal setoran Rp100 ribu. Tim kami akan menghubungi Anda lebih lanjut.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>#DiRumahAja tetep produktif belajar investasi Saham bersama MNC Sekuritas!<br>Happy learning!</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}			
	

//end email spm


//start email online class
	if ($course_name == "Online Class - Bincang-Bincang Saham 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Jumat, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>	
					<tr>
						<th align='left'><em>Venue</em><th>
						<th align='left'>:<th>
						<th align='left'><em>online</em><th>
					<tr>
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://us04web.zoom.us/j/3823183665<th>
					<tr>				
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}			
	
	if ($course_name == "Sekolah Pasar Modal Digital 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Jumat, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>	
					<tr>
						<th align='left'><em>Venue</em><th>
						<th align='left'>:<th>
						<th align='left'><em>online</em><th>
					<tr>
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>http://bit.ly/SPMDigitalSTIE170420<th>
					<tr>				
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}
	
	if ($course_name == "Market Update - PT. Danakita 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Selasa, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>Disesuaikan dengan Kuota<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	
	
	if ($course_name == "Online Class - Aplikasi MNC Trade New 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Selasa, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>Disesuaikan dengan Kuota<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><em>Link online meeting</em> akan dibagikan paling lambat pada hari H oleh PIC MNC Sekuritas.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Herry Yoga</strong> di <strong><a href='mailto:herry.yoga@mncgroup.com?Subject=Klinik%20Edukasi'>herry.yoga@mncgroup.com</a>; <strong>Rusita</strong> di <a href='mailto:rusita.viana@mncgroup.com?Subject=Klinik%20Edukasi'>rusita.viana@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	
	
	if ($course_name == "Online Class - Investasi untuk Pemula Saat DiRumahAja 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>Online Class - Investasi untuk Pemula Saat #DiRumahAja</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Selasa, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://us04web.zoom.us/j/3823183665<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}		
	
	if ($course_name == "Seminar Online dengan Rumah Zakat - Landasan Hukum Muamalah di Pasar Modal Syariah 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Rabu, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://www.youtube.com/channel/UCNn4j-vTgS9d-5y04ZCVdfA<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	

	if ($course_name == "Talkshow Online - Cara Memilih Saham yang Undervalue 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Kamis, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://www.instagram.com/idx_sulutgo/?hl=id<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Stephani</strong> di <strong><a href='mailto:stephani.paat@mncgroup.com?Subject=Klinik%20Edukasi'>stephani.paat@mncgroup.com</a>; <strong>Yansen</strong> di <a href='mailto:yansen.sumual@mncgroup.com?Subject=Klinik%20Edukasi'>yansen.sumual@mncgroup.com</a></strong>; <strong>Rusita</strong> di <a href='mailto:rusita.viana@mncgroup.com?Subject=Klinik%20Edukasi'>rusita.viana@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}
	
	if ($course_name == "Online Class - Pengenalan Aplikasi MNC Trade New 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Jumat, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://us04web.zoom.us/j/3823183665<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	
	
	if ($course_name == "Seminar Online - Cara Memilih Saham Undervalue 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Kamis, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Venue<th>
						<th align='left'>:<th>
						<th align='left'>Online<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><em>Link online meeting</em> akan dibagikan paling lambat pada hari H oleh PIC MNC Sekuritas.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Manan Lim</strong> di <strong><a href='mailto:manan.lim@mncgroup.com?Subject=Klinik%20Edukasi'>manan.lim@mncgroup.com</a>; <strong>Rusita</strong> di <a href='mailto:rusita.viana@mncgroup.com?Subject=Klinik%20Edukasi'>rusita.viana@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	
	
	if ($course_name == "Klinik Investasi Saham - Aplikasi MNC Trade New 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Jumat, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Venue<th>
						<th align='left'>:<th>
						<th align='left'>Online<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><em>Link online meeting</em> akan dibagikan paling lambat pada hari H oleh PIC MNC Sekuritas.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Manan Lim</strong> di <strong><a href='mailto:manan.lim@mncgroup.com?Subject=Klinik%20Edukasi'>manan.lim@mncgroup.com</a>; <strong>Rusita</strong> di <a href='mailto:rusita.viana@mncgroup.com?Subject=Klinik%20Edukasi'>rusita.viana@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}		
	
	if ($course_name == "Seminar Online Pasar Modal Syariah - Peningkatan Inklusi Pasar Modal Syariah di Era Millenials 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Selasa, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://bit.ly/PendaftaranSOPMSKalbar<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Aziz</strong> di <strong><a href='mailto:abdul.cucu@mncgroup.com?Subject=Klinik%20Edukasi'>abdul.cucu@mncgroup.com</a>; <strong>Sutrisna</strong> di <strong><a href='mailto:sutrisna.amijaya@mncgroup.com?Subject=Klinik%20Edukasi'>sutrisna.amijaya@mncgroup.com</a>; dan <strong>Rusita</strong> di <a href='mailto:rusita.viana@mncgroup.com?Subject=Klinik%20Edukasi'>rusita.viana@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}			
	
	if ($course_name == "Update Market Selama Satu Minggu 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Senin, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://www.instagram.com/idx_jawabarat/<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	
	
	if ($course_name == "Online Class - Tips dan Trik Investasi/ Trading Saham 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Selasa, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://www.instagram.com/idx_bengkulu/?hl=en<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Mety</strong> di <strong><a href='mailto:mety.yolanda@mncgroup.com?Subject=Klinik%20Edukasi'>mety.yolanda@mncgroup.com</a>; dan <strong>Rusita</strong> di <a href='mailto:rusita.viana@mncgroup.com?Subject=Klinik%20Edukasi'>rusita.viana@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	
	
	if ($course_name == "Seminar Online - Analisa Teknikal Untuk Tahap Menengah 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Jumat, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>Notification E-mail<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><em>Link online meeting</em> akan dibagikan paling lambat pada hari H oleh PIC MNC Sekuritas.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Helfa</strong> di <strong><a href='mailto:helfa.helmy@mncgroup.com?Subject=Klinik%20Edukasi'>helfa.helmy@mncgroup.com</a>; <strong>Beni</strong> di <strong><a href='mailto:beni.fitriadi@mncgroup.com?Subject=Klinik%20Edukasi'>beni.fitriadi@mncgroup.com</a>; dan <strong>Rusita</strong> di <a href='mailto:rusita.viana@mncgroup.com?Subject=Klinik%20Edukasi'>rusita.viana@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}		
	
	if ($course_name == "Seminar Online - Edukasi Online Cara Memilih Saham yg Undervalue 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Jumat, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>http://bit.ly/EdukasiOnlineMNCSbkl<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><em>Link online meeting</em> akan dibagikan paling lambat pada hari H oleh PIC MNC Sekuritas.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Sekti</strong> di <strong><a href='mailto:sekti.kurniawan@mncgroup.com?Subject=Klinik%20Edukasi'>sekti.kurniawan@mncgroup.com</a>; dan <strong>Rusita</strong> di <a href='mailto:rusita.viana@mncgroup.com?Subject=Klinik%20Edukasi'>rusita.viana@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}			
	
	if ($course_name == "Kompetisi - Virtual Trading Competition GIBEI UNMA 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Senin, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>Online Aplikasi MNC Trade<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Caisaria</strong> di <strong><a href='mailto:caisaria.putri@mncgroup.com?Subject=Klinik%20Edukasi'>caisaria.putri@mncgroup.com</a>; <strong>Helfa</strong> di <strong><a href='mailto:helfa.helmy@mncgroup.com?Subject=Klinik%20Edukasi'>helfa.helmy@mncgroup.com</a>; dan <strong>Rusita</strong> di <a href='mailto:rusita.viana@mncgroup.com?Subject=Klinik%20Edukasi'>rusita.viana@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	

//end email online class

//start email syariah - online class
	if ($course_name == "Klinik Edukasi Syariah Intermediate - Aplikasi MNC Trade Syariah 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Rabu, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://global.gotowebinar.com/register/775164947<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Aziz</strong> di <strong><a href='mailto:abdul.cucu@mncgroup.com?Subject=Klinik%20Edukasi'>abdul.cucu@mncgroup.com</a></strong>; <strong>Sutrisna</strong> di <strong><a href='mailto:sutrisna.amijaya@mncgroup.com?Subject=Klinik%20Edukasi'>sutrisna.amijaya@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	

	if ($course_name == "Klinik Edukasi Syariah Advanced - Analisa Teknikal dan Fundamental Syariah 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Selasa, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://global.gotowebinar.com/register/594222939<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Aziz</strong> di <strong><a href='mailto:abdul.cucu@mncgroup.com?Subject=Klinik%20Edukasi'>abdul.cucu@mncgroup.com</a></strong>; <strong>Sutrisna</strong> di <strong><a href='mailto:sutrisna.amijaya@mncgroup.com?Subject=Klinik%20Edukasi'>sutrisna.amijaya@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}	

	if ($course_name == "Klinik Edukasi Syariah Basic - Landasan Hukum dan Produk Pasar Modal Syariah 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Rabu, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://global.gotowebinar.com/register/394003539<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Aziz</strong> di <strong><a href='mailto:abdul.cucu@mncgroup.com?Subject=Klinik%20Edukasi'>abdul.cucu@mncgroup.com</a></strong>; <strong>Sutrisna</strong> di <strong><a href='mailto:sutrisna.amijaya@mncgroup.com?Subject=Klinik%20Edukasi'>sutrisna.amijaya@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}		
//end email syariah - online class

//start tambahan 2020-04-20
	if ($course_name == "Sekolah Pasar Modal Basic 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Kamis, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>https://global.gotowebinar.com/register/394003539<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Keken</strong> di <strong><a href='mailto:mncsekuritaspadang@gmail.com?Subject=Klinik%20Edukasi'>mncsekuritaspadang@gmail.com</a></strong>; <strong>Rusita</strong> di <strong><a href='mailto:rusita.viana@mncgroup.com?Subject=Klinik%20Edukasi'>rusita.viana@mncgroup.com</a></strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}		
//end tambahan 2020-04-20

//start tambahan 2020-04-27
	if ($course_name == "Invest in Crisis 1") {
		$message = "
		<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
			<body lang=EN-US link=blue vlink=purple>
				<div class=WordSection1>
				<p class=MsoNormal>Yth. Bapak/Ibu <b>".$name."</b></p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Anda telah melakukan pendaftaran kegiatan edukasi, yaitu <b>".substr($course_name, 0, -1)."</b> pada:</p>
				<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>Hari/Tanggal<th>
						<th align='left'>:<th>
						<th align='left'>Selasa, ".tgl_indo($date_edukasi)."<th>
					<tr>
					<tr>
						<th align='left'>Waktu<th>
						<th align='left'>:<th>
						<th align='left'>".$time_edukasi."<th>
					<th>				
					<tr>
						<th align='left'>Link<th>
						<th align='left'>:<th>
						<th align='left'>Tentative antara Zoom, gotomeeting atas Microsoft Team<th>
					<tr>		
				</table>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
				<p class=MsoNormal>Dengan data diri sebagai berikut :</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<table>
					<tr>
						<th align='left'>No. HP<th>
						<th align='left'>:<th>
						<th align='left'>".$hp."<th>
					<tr>
					<tr>
						<th align='left'>Email<th>
						<th align='left'>:<th>
						<th align='left'>".$to."<th>
					<th>	
				</table>				
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Untuk informasi lebih lanjut, Anda dapat menghubungi <strong>Purnomo : 0852 6556 4004</strong>.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
				<div>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
					<p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
					<p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
					<p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
					<p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
					<p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
					<p class=MsoNormal>&nbsp;</p>
				</div>
				<p class=MsoNormal>&nbsp;</p></div>
			</body>
		</html>
		";	
	}		
//end tambahan 2020-04-27
	
	$emailSales = "juanto.azharri@mncgroup.com";
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= "To: ".$to. "\r\n";
	$headers .= "From: " .$from. "\r\n";
	if($flag) {
		$headers .= "Cc: " .$emailSales. "\r\n";
	}

	//$headers .= "Bcc: juanto.azharri@mncgroup.com\r\n";
	$headers .= "Bcc: " .$pic_edukasi. "\r\n";

	$message_to_sales = "
		<html>

		</html>
	";
	// To send HTML mail, the Content-type header must be set
	$headers_sales  = 'MIME-Version: 1.0' . "\r\n";
	$headers_sales .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	// Additional headers
	$headers_sales .= "To: ".$emailSales. "\r\n";
	$headers_sales .= "From: " .$from. "\r\n";

	mail($to, $subject, $message, $headers);
	
	if($flag) {
		mail($emailSales, $subject, $message_to_sales, $headers_sales);
	}
	
}

?>

?>