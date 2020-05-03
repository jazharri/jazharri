<title>Register Edukasi</title>	
<?php if ($mod==""){
	echo $mod;
} else {
?>
<?php include_once "po-content/$folder/header.php"; ?>

<link href="<?=$website_url;?>/po-content/<?=$folder;?>/education/css/awesomplete.css" rel="stylesheet" type="text/css" />
<link href="<?=$website_url;?>/po-content/<?=$folder;?>/education/css/jquery-ui-2.css" rel="stylesheet" type="text/css" />
<link href="<?=$website_url;?>/po-content/<?=$folder;?>/education/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="<?=$website_url;?>/po-content/<?=$folder;?>/education/css/validationEngine.jquery.css?3" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/education/js/awesomplete.min.js"></script>
<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/education/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/education/js/languages/jquery.validationEngine-en.js"></script>

<?php
	function cc($str)
	{
		$str = trim ($str);
		$str = htmlspecialchars($str);
		$str = mysql_real_escape_string($str);
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

//start Syariah - Online Class 
$topic31 	= cc('Klinik Edukasi Syariah Advanced - Analisa Teknikal dan Fundamental Syariah 1');
$date31		= cc('2020-04-28');
$venue31	= cc('Online Class - Syariah');
$tema31		= cc('Klinik Edukasi Syariah Advanced - Analisa Teknikal dan Fundamental Syariah');
$status31	= cc('https://global.gotowebinar.com/register/594222939');
$pic31		= cc('abdul.cucu@mncgroup.com; sutrisna.amijaya@mncgroup.com');
$time31		= cc('10.00 - 11.30 WIB');

$topic34 	= cc('Klinik Edukasi Syariah Basic - Landasan Hukum dan Produk Pasar Modal Syariah 1');
$date34		= cc('2020-04-29');
$venue34	= cc('Online Class - Syariah');
$tema34		= cc('Klinik Edukasi Syariah Basic - Landasan Hukum dan Produk Pasar Modal Syariah');
$status34	= cc('https://global.gotowebinar.com/register/394003539');
$pic34		= cc('abdul.cucu@mncgroup.com; sutrisna.amijaya@mncgroup.com');
$time34		= cc('14.00 - 15.30 WIB');
//end Syariah - Online Class 

//start Online Class 
$topic32 	= cc('Kompetisi - Virtual Trading Competition GIBEI UNMA 1');
$date32		= cc('2020-04-27');
$venue32	= cc('Online Class - Cabang Bandung');
$tema32		= cc('Kompetisi - Virtual Trading Competition GIBEI UNMA');
$status32	= cc('Online Aplikasi MNC Trade');
$pic32		= cc('caisaria.putri@mncgroup.com; helfa.helmy@mncgroup.com; rusita.viana@mncgroup.com');
$time32		= cc('09.00 - 15.00 WIB');

$topic33 	= cc('Seminar Online Pasar Modal Syariah - Peningkatan Inklusi Pasar Modal Syariah di Era Millenials 1');
$date33		= cc('2020-04-28');
$venue33	= cc('Online Seminar - Syariah & Galeri Investasi');
$tema33		= cc('Seminar Online Pasar Modal Syariah - Peningkatan Inklusi Pasar Modal Syariah di Era Millenials');
$status33	= cc('https://bit.ly/PendaftaranSOPMSKalbar');
$pic33		= cc('abdul.cucu@mncgroup.com; sutrisna.amijaya@mncgroup.com');
$time33		= cc('15.30 WIB');

$topic35 	= cc('Seminar Online - Cara Memilih Saham Undervalue 1');
$date35		= cc('2020-04-30');
$venue35	= cc('Online Class - Cabang Batam');
$tema35		= cc('Seminar Online - Cara Memilih Saham Undervalue');
$status35	= cc('Notification E-mail');
$pic35		= cc('manan.lim@mncgroup.com;rusita.viana@mncgroup.com');
$time35		= cc('12.00 - 13.00 WIB');

$topic36 	= cc('Invest in Crisis 1');
$date36		= cc('2020-04-28');
$venue36	= cc('Online Class - Cabang Medan, Galeri Investasi UPU dan IDX Medan');
$tema36		= cc('Invest in Crisis');
$status36	= cc('Tentative antara Zoom, gotomeeting atas Microsoft Team');
$pic36		= cc('Purnomo : 0852 6556 4004');
$time36		= cc('11.00 WIB');
// end Online Class

//start - Online Class Mei
$date1		= cc('2020-05-02');
$time1		= cc('10.00 - 11.30 WIB');
$topic1 	= cc('Sekolah Pasar Modal 1');
$tema1		= cc('Sekolah Pasar Modal');
$venue1		= cc('Online Class - Syariah');
$status1	= cc('bit.ly/InsyavMNCS');
$pic1		= cc('abdul.cucu@mncgroup.com; sutrisna.amijaya@mncgroup.com');

$date2		= cc('2020-05-05');
$time2		= cc('10.00 - 12.00 WIB');
//$topic2 	= cc('Sekolah Pasar Modal 2');
$topic2 	= cc('Sekolah Pasar Modal - Basic, Pengenalan Saham, Pengenalan Keuntungan dan Risiko Saham, Kenapa Harus Saham 1');
//$tema2		= cc('Sekolah Pasar Modal');
$tema2		= cc('Sekolah Pasar Modal - Basic, Pengenalan Saham, Pengenalan Keuntungan dan Risiko Saham, Kenapa Harus Saham');
$venue2		= cc('Online Class - OT');
$status2	= cc('E-mail Notification');
$pic2		= cc('thomas.darmawan@mncgroup.com; bregas.soeyogyo@mncgroup.com; stephanie.zymers@mncgroup.com; andhy.kurnia@mncgroup.com');

$date3		= cc('2020-05-05');
$time3		= cc('10.00 - 11.30 WIB');
$topic3 	= cc('Investasi Saham untuk Pemula 1');
$tema3		= cc('Investasi Saham untuk Pemula');
$venue3		= cc('Instagram Live - Cabang Aceh');
$status3	= cc('Instagram @idx_aceh');
$pic3		= cc('zakhruna.bahrum@mncgroup.com; rusita.viana@mncgroup.com');

$date4		= cc('2020-05-05');
$time4		= cc('11.15 - 12.00 WIB');
$topic4 	= cc('Analisa Fundamental 1');
$tema4		= cc('Analisa Fundamental');
$venue4		= cc('Online Class - Cabang Pekanbaru');
$status4	= cc('https://us04web.zoom.us/j/3823183665');
$pic4		= cc('rolly.rolly@mncgroup.com; rusita.viana@mncgroup.com');

$date5		= cc('2020-05-06');
$time5		= cc('14.00 - 15.00 WIB');
$topic5 	= cc('Filantropi Islam 1');
$tema5		= cc('Filantropi Islam');
$venue5		= cc('Instagram Live - Syariah');
$status5	= cc('Instagram @idxislamic');
$pic5		= cc('abdul.cucu@mncgroup.com; sutrisna.amijaya@mncgroup.com');

$date6		= cc('2020-05-08');
$time6		= cc('11.00  - 12.00 WIB');
//$topic6		= cc('Analisa Teknikal Lanjutan 1');
$topic6		= cc('Analisa Teknikal 101 - Mengetahui Trend, Indikator Teknikal 1');
//$tema6		= cc('Analisa Teknikal Lanjutan');
$tema6		= cc('Analisa Teknikal 101 - Mengetahui Trend, Indikator Teknikal');
$venue6		= cc('Online Class - OT');
//$status6	= cc('E-mail Notification');
$status6	= cc('Kelas Berbayar Rp200.000');
$pic6		= cc('thomas.darmawan@mncgroup.com; bregas.soeyogyo@mncgroup.com; stephanie.zymers@mncgroup.com; andhy.kurnia@mncgroup.com');

$date7		= cc('2020-05-08');
$time7		= cc('11.15 - 12.00 WIB');
$topic7		= cc('Tekhnikal - MACD dan VOLUME 1');
$tema7		= cc('Tekhnikal - MACD dan VOLUME');
$venue7		= cc('Online Class - Cabang Pekanbaru');
$status7	= cc('https://us04web.zoom.us/j/3823183665');
$pic7		= cc('rolly.rolly@mncgroup.com; rusita.viana@mncgroup.com');

$date8		= cc('2020-05-08');
$time8		= cc('14.00 - 15.00 WIB');
$topic8		= cc('Bincang Saham 1');
$tema8		= cc('Bincang Saham');
$venue8		= cc('Instagram Live - Cabang Aceh');
$status8	= cc('Instagram @idx_aceh');
$pic8		= cc('zakhruna.bahrum@mncgroup.com; rusita.viana@mncgroup.com');

$date9		= cc('2020-05-12');
$time9		= cc('10.00 - 12.00 WIB');
//$topic9		= cc('SPM MNC TRADE - Cara Membeli/ Menjual Saham, Membaca Portofolio, Super Order dan Speed Order 1');
$topic9		= cc('SPM MNC TRADE - Cara Beli/Jual, Baca Portofolio, Super Order, Speed Order 1');
//$tema9		= cc('SPM MNC TRADE - Cara Membeli/ Menjual Saham, Membaca Portofolio, Super Order dan Speed Order');
$tema9		= cc('SPM MNC TRADE - Cara Beli/Jual, Baca Portofolio, Super Order, Speed Order');
$venue9		= cc('Online Class - OT');
$status9	= cc('E-mail Notification');
$pic9		= cc('thomas.darmawan@mncgroup.com; bregas.soeyogyo@mncgroup.com; stephanie.zymers@mncgroup.com; andhy.kurnia@mncgroup.com');

$date10		= cc('2020-05-12');
$time10		= cc('11.15 - 12.00 WIB');
$topic10	= cc('Bincang-Bincang Saham bareng MNC Sekuritas 1');
$tema10		= cc('Bincang-Bincang Saham bareng MNC Sekuritas');
$venue10	= cc('Online Class - Cabang Pekanbaru');
$status10	= cc('https://us04web.zoom.us/j/3823183665');
$pic10		= cc('rolly.rolly@mncgroup.com; rusita.viana@mncgroup.com');

$date11		= cc('2020-05-13');
$time11		= cc('09.00 - 10.00 WIB');
$topic11	= cc('Market Update 1');
$tema11		= cc('Market Update');
$venue11	= cc('Instagram Live - Cabang Aceh');
$status11	= cc('Instagram @idx_aceh');
$pic11		= cc('zakhruna.bahrum@mncgroup.com; rusita.viana@mncgroup.com');

$date12		= cc('2020-05-15');
$time12		= cc('10.00 - 12.00 WIB');
$topic12	= cc('Analisa Teknikal - Set Up Day Trader 1');
$tema12		= cc('Analisa Teknikal - Set Up Day Trader');
$venue12	= cc('Online Class - OT');
//$status12	= cc('E-mail Notification');
$status12	= cc('Kelas Berbayar Rp300.000');
$pic12		= cc('thomas.darmawan@mncgroup.com; bregas.soeyogyo@mncgroup.com; stephanie.zymers@mncgroup.com; andhy.kurnia@mncgroup.com');

$date13		= cc('2020-05-15');
$time13		= cc('11.15 - 12.00 WIB');
$topic13	= cc('Strategi Investasi 1');
$tema13		= cc('Strategi Investasi');
$venue13	= cc('Online Class - Cabang Pekanbaru');
$status13	= cc('https://us04web.zoom.us/j/3823183665');
$pic13		= cc('rolly.rolly@mncgroup.com; rusita.viana@mncgroup.com');

$date14		= cc('2020-05-15');
$time14		= cc('14.00 - 15.00 WIB');
$topic14	= cc('Investasi Saham untuk Pemula 2');
$tema14		= cc('Investasi Saham untuk Pemula');
$venue14	= cc('Instagram Live - Cabang Aceh');
$status14	= cc('Instagram @idx_aceh');
$pic14		= cc('zakhruna.bahrum@mncgroup.com; rusita.viana@mncgroup.com');

$date15		= cc('2020-05-18');
$time15		= cc('12.00 - 13.00 WIB');
$topic15	= cc('Investasi Saham untuk Pemula 3');
$tema15		= cc('Investasi Saham untuk Pemula');
$venue15	= cc('Instagram Live - Cabang Aceh');
$status15	= cc('Instagram @idx_aceh');
$pic15		= cc('zakhruna.bahrum@mncgroup.com; rusita.viana@mncgroup.com');

$date16		= cc('2020-05-18');
$time16		= cc('08.30 - 12.30 WIB');
$topic16	= cc('Sekolah Pasar Modal TICMI 1');
$tema16		= cc('Sekolah Pasar Modal TICMI');
$venue16	= cc('Online Class - OT');
$status16	= cc('By Invitation');
$pic16		= cc('thomas.darmawan@mncgroup.com; bregas.soeyogyo@mncgroup.com; stephanie.zymers@mncgroup.com; andhy.kurnia@mncgroup.com');

$date17		= cc('2020-05-19');
$time17		= cc('11.15 - 12.00 WIB');
$topic17	= cc('Tekhnikal - STOCHASTIC dan RSI 1');
$tema17		= cc('Tekhnikal - STOCHASTIC dan RSI');
$venue17	= cc('Online Class - Cabang Pekanbaru');
$status17	= cc('https://us04web.zoom.us/j/3823183665');
$pic17		= cc('rolly.rolly@mncgroup.com; rusita.viana@mncgroup.com');

$date18		= cc('2020-05-19');
$time18		= cc('17.00 - 18.00 WIB');
$topic18	= cc('To Be A Successful Trader 1');
$tema18		= cc('To Be A Successful Trader');
$venue18	= cc('Klinik Investasi Saham - Cabang Batam');
$status18	= cc('E-mail Notification');
$pic18		= cc('manan.lim@mncgroup.com; rusita.viana@mncgroup.com');

$date19		= cc('2020-05-22');
$time19		= cc('11.15 - 12.00 WIB');
$topic19	= cc('Bincang-Bincang Saham bareng MNC Sekuritas 2');
$tema19		= cc('Bincang-Bincang Saham bareng MNC Sekuritas');
$venue19	= cc('Online Class - Cabang Pekanbaru');
$status19	= cc('https://us04web.zoom.us/j/3823183665');
$pic19		= cc('rolly.rolly@mncgroup.com; rusita.viana@mncgroup.com');

$date20		= cc('2020-05-26');
$time20		= cc('11.15 - 12.00 WIB');
$topic20	= cc('Klinik Saham 1');
$tema20		= cc('Klinik Saham');
$venue20	= cc('Online Class - Cabang Pekanbaru');
$status20	= cc('https://us04web.zoom.us/j/3823183665');
$pic20		= cc('rolly.rolly@mncgroup.com; rusita.viana@mncgroup.com');

$date21		= cc('2020-05-27');
$time21		= cc('10.00 - 12.00 WIB');
$topic21	= cc('SPM Gemesin 1');
$tema21		= cc('SPM Gemesin');
$venue21	= cc('Online Class - OT');
$status21	= cc('E-mail Notification');
$pic21		= cc('thomas.darmawan@mncgroup.com; bregas.soeyogyo@mncgroup.com; stephanie.zymers@mncgroup.com; andhy.kurnia@mncgroup.com');

$date22		= cc('2020-05-28');
$time22		= cc('10.00 - 12.00 WIB');
//$topic22	= cc('Analisa Fundamental dan Teknikal - Cara Menentukan Saham Pilihan untuk Investasi 1');
$topic22	= cc('Analisa Teknikal Lanjutan - Set Up Trading Plan 1');
//$tema22		= cc('Analisa Fundamental dan Teknikal - Cara Menentukan Saham Pilihan untuk Investasi');
$tema22		= cc('Analisa Teknikal Lanjutan - Set Up Trading Plan');
$venue22	= cc('Online Class- OT');
//$status22	= cc('E-mail Notification');
$status22	= cc('Kelas Berbayar Rp300.000');
$pic22		= cc('thomas.darmawan@mncgroup.com; bregas.soeyogyo@mncgroup.com; stephanie.zymers@mncgroup.com; andhy.kurnia@mncgroup.com');

$date23		= cc('2020-05-29');
$time23		= cc('11.15 - 12.00 WIB');
$topic23	= cc('Analisa Teknikal - Bollinger Band 1');
$tema23		= cc('Analisa Teknikal - Bollinger Band');
$venue23	= cc('Online Class - Cabang Pekanbaru');
$status23	= cc('https://us04web.zoom.us/j/3823183665');
$pic23		= cc('rolly.rolly@mncgroup.com; rusita.viana@mncgroup.com');
//end - Online Class Mei

$conn   = mysqli_connect('localhost','securities','0k3z0n3.c0m', 'securities');

//start - online clas april
$topic31a = "SELECT quota FROM edukasi_quota WHERE topic = '$topic31'";
$result31 = mysqli_query($conn, $topic31a);
while($aa = mysqli_fetch_array($result31)){	

$topic32a = "SELECT quota FROM edukasi_quota WHERE topic = '$topic32'";
$result32 = mysqli_query($conn, $topic32a);
while($ab = mysqli_fetch_array($result32)){		

$topic33a = "SELECT quota FROM edukasi_quota WHERE topic = '$topic33'";
$result33 = mysqli_query($conn, $topic33a);
while($ac = mysqli_fetch_array($result33)){	

$topic34a = "SELECT quota FROM edukasi_quota WHERE topic = '$topic34'";
$result34 = mysqli_query($conn, $topic34a);
while($ad = mysqli_fetch_array($result34)){	

$topic35a = "SELECT quota FROM edukasi_quota WHERE topic = '$topic35'";
$result35 = mysqli_query($conn, $topic35a);
while($ae = mysqli_fetch_array($result35)){	

$topic36a = "SELECT quota FROM edukasi_quota WHERE topic = '$topic36'";
$result36 = mysqli_query($conn, $topic36a);
while($af = mysqli_fetch_array($result36)){	
// end Online Class april

//start - Online class Mei
$topic1a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic1'";
$result1 = mysqli_query($conn, $topic1a);
while($a = mysqli_fetch_array($result1)){	

$topic2a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic2'";
$result2 = mysqli_query($conn, $topic2a);
while($b = mysqli_fetch_array($result2)){	

$topic3a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic3'";
$result3 = mysqli_query($conn, $topic3a);
while($c = mysqli_fetch_array($result3)){	

$topic4a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic4'";
$result4 = mysqli_query($conn, $topic4a);
while($d = mysqli_fetch_array($result4)){	

$topic5a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic5'";
$result5 = mysqli_query($conn, $topic5a);
while($e = mysqli_fetch_array($result5)){
	
$topic6a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic6'";
$result6 = mysqli_query($conn, $topic6a);
while($f = mysqli_fetch_array($result6)){	

$topic7a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic7'";
$result7 = mysqli_query($conn, $topic7a);
while($g = mysqli_fetch_array($result7)){	

$topic8a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic8'";
$result8 = mysqli_query($conn, $topic8a);
while($h = mysqli_fetch_array($result8)){	

$topic9a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic9'";
$result9 = mysqli_query($conn, $topic9a);
while($i = mysqli_fetch_array($result9)){	

$topic10a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic10'";
$result10 = mysqli_query($conn, $topic10a);
while($j = mysqli_fetch_array($result10)){	

$topic11a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic11'";
$result11 = mysqli_query($conn, $topic11a);
while($k = mysqli_fetch_array($result11)){	

$topic12a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic12'";
$result12 = mysqli_query($conn, $topic12a);
while($l = mysqli_fetch_array($result12)){	

$topic13a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic13'";
$result13 = mysqli_query($conn, $topic13a);
while($m = mysqli_fetch_array($result13)){	

$topic14a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic14'";
$result14 = mysqli_query($conn, $topic14a);
while($n = mysqli_fetch_array($result14)){	

$topic15a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic15'";
$result15 = mysqli_query($conn, $topic15a);
while($o = mysqli_fetch_array($result15)){	

$topic16a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic16'";
$result16 = mysqli_query($conn, $topic16a);
while($p = mysqli_fetch_array($result16)){	

$topic17a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic17'";
$result17 = mysqli_query($conn, $topic17a);
while($q = mysqli_fetch_array($result17)){	

$topic18a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic18'";
$result18 = mysqli_query($conn, $topic18a);
while($r = mysqli_fetch_array($result18)){	

$topic19a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic19'";
$result19 = mysqli_query($conn, $topic19a);
while($s = mysqli_fetch_array($result19)){	

$topic20a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic20'";
$result20 = mysqli_query($conn, $topic20a);
while($t = mysqli_fetch_array($result20)){	

$topic21a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic21'";
$result21 = mysqli_query($conn, $topic21a);
while($u = mysqli_fetch_array($result21)){

$topic22a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic22'";
$result22 = mysqli_query($conn, $topic22a);
while($v = mysqli_fetch_array($result22)){		

$topic23a = "SELECT quota_edukasi FROM edukasi_quota_202005 WHERE topic_edukasi = '$topic23'";
$result23 = mysqli_query($conn, $topic23a);
while($w = mysqli_fetch_array($result23)){		
// end Online Class Mei
?>

<style>
	table {
	  border-collapse: collapse;
	  width: 100%;
	}

	th, td {
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even) {background-color: #f2f2f2;}
</style>

<section class="banner">
	<div class="banner-home">
		<div class="list-slider">
			<div class="slider">
				<img src="../po-content/mnc/education/images/announcement_desktop.png?3" img-large="../po-content/mnc/education/images/announcement_desktop.png?3" img-medium="../po-content/mnc/education/images/announcement_tablet.png?3" img-small="../po-content/mnc/education/images/announcement_hp.png?3" alt="">
			</div>
		</div>
	</div>
	<div class="sosmed-banner">
		<a href="" class="ic-fb" onclick="return fbShare(this);"></a>
		<a href="" class="ic-twt" onclick="return twitterShare(this);"></a>
		<a href="" class="ic-ig"></a>
	</div>
</section>

<div class="clearfix"></div>
<div class="about-content">
	<div class="container">
		<div class="row row1">
			<div class="col-sm-12">
				<div class="row-about">
					<h2>Edukasi</h2>
					<br></br>
					<!-- start edukasi baru -->
					<h3></h3>
					<div style="overflow-x:auto;">
						<table>
							<tr>
								<th>Date</th>
								<th>Time</th>
								<th>Topic</th>
								<th>Venue</th>
								<th>Status</th>
							</tr>
<!--
							<tr>
								<input type="hidden" name="pic1" value='<?php echo $pic32; ?>' />
								<td valign="top" name="date1">27 April 2020</td>
								<td valign="top" name="time1"><?php echo $time32; ?></td>
								<td valign="top" name="topic1"><b><?php echo $tema32; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue32; ?> </td>
								<td valign="top"><a href="/education/register_online?topic1=<?php echo $topic32; ?>&date1=<?php echo $date32; ?>&venue1=<?php echo $venue32; ?>&time1=<?php echo $time32; ?>&tema1=<?php echo $tema32; ?>&pic1=<?php echo $pic32; ?>" target="" > <div class="lnk open"><b>Register</b></div></a></td>
							</tr>	
						
							<tr>
								<input type="hidden" name="pic1" value='<?php echo $pic31; ?>' />
								<td valign="top" name="date1">28 April 2020</td>
								<td valign="top" name="time1"><?php echo $time31; ?></td>			
								<td valign="top" name="topic1"><a href="/education/syariahadvanced?topic1=<?php echo $topic31; ?>&date1=<?php echo $date31; ?>&venue1=<?php echo $venue31; ?>&time1=<?php echo $time31; ?>&tema1=<?php echo $tema31; ?>&pic1=<?php echo $pic31; ?>" target=""><b><?php echo $tema31; ?></b></a></td>
								<td valign="top" name="venue1"><?php echo $venue31; ?></td>
								<td valign="top"><a href="/education/register_online_nasabah?topic1=<?php echo $topic31; ?>&date1=<?php echo $date31; ?>&venue1=<?php echo $venue31; ?>&time1=<?php echo $time31; ?>&tema1=<?php echo $tema31; ?>&pic1=<?php echo $pic31; ?>" target="" > <div class="lnk open"><b>Register</b></div></a></td>
							</tr>	

							<tr>
								<input type="hidden" name="pic1" value='<?php echo $pic36; ?>' />
								<td valign="top" name="date1">28 April 2020</td>
								<td valign="top" name="time1"><?php echo $time36; ?></td>			
								<td valign="top" name="topic1"><b><?php echo $tema36; ?></b></td>	
								<td valign="top" name="venue1"><?php echo $venue36; ?></td>
								<td valign="top"><a href="/education/register_online?topic1=<?php echo $topic36; ?>&date1=<?php echo $date36; ?>&venue1=<?php echo $venue36; ?>&time1=<?php echo $time36; ?>&tema1=<?php echo $tema36; ?>&pic1=<?php echo $pic36; ?>" target="" > <div class="lnk open"><b>Register</b></div></a></td>
							</tr>	
							
							<tr>
								<input type="hidden" name="pic1" value='<?php echo $pic33; ?>' />
								<td valign="top" name="date1">28 April 2020</td>
								<td valign="top" name="time1"><?php echo $time33; ?></td>
								<td valign="top" name="topic1"><b><?php echo $tema33; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue33; ?> </td>
								<td valign="top"><a href="/education/register_online?topic1=<?php echo $topic33; ?>&date1=<?php echo $date33; ?>&venue1=<?php echo $venue33; ?>&time1=<?php echo $time33; ?>&tema1=<?php echo $tema33; ?>&pic1=<?php echo $pic33; ?>" target="" > <div class="lnk open"><b>Register</b></div></a></td>
							</tr>
							<tr>
								<input type="hidden" name="pic1" value='<?php echo $pic34; ?>' />
								<td valign="top" name="date1">29 April 2020</td>
								<td valign="top" name="time1"><?php echo $time34; ?></td>
								<td valign="top" name="topic1"><a href="/education/syariahbasic?topic1=<?php echo $topic34; ?>&date1=<?php echo $date34; ?>&venue1=<?php echo $venue34; ?>&time1=<?php echo $time34; ?>&tema1=<?php echo $tema34; ?>&pic1=<?php echo $pic34; ?>" target=""><b><?php echo $tema34; ?></b></a></td>						
								<td valign="top" name="venue1"><?php echo $venue34; ?></td>
								<td valign="top"><a href="/education/register_online?topic1=<?php echo $topic34; ?>&date1=<?php echo $date34; ?>&venue1=<?php echo $venue34; ?>&time1=<?php echo $time34; ?>&tema1=<?php echo $tema34; ?>&pic1=<?php echo $pic34; ?>" target="" > <div class="lnk open"><b>Register</b></div></a></td>
							</tr>	
								
							<tr>
								<input type="hidden" name="pic1" value='<?php echo $pic35; ?>' />
								<td valign="top" name="date1">30 April 2020</td>
								<td valign="top" name="time1"><?php echo $time35; ?></td>
								<td valign="top" name="topic1"><b><?php echo $tema35; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue35; ?></td>
								<td valign="top"><a href="/education/register_online?topic1=<?php echo $topic35; ?>&date1=<?php echo $date35; ?>&venue1=<?php echo $venue35; ?>&time1=<?php echo $time35; ?>&tema1=<?php echo $tema35; ?>&pic1=<?php echo $pic35; ?>" target="" > <div class="lnk open"><b>Register</b></div></a></td>
							</tr>
-->							
							
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic1; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic1; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status1; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date1); ?></td>
								<td valign="top" name="time1"><?php echo $time1; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema1; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue1; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic1; ?>&pic1=<?php echo $pic1; ?>&status1=<?php echo $status1; ?>&date1=<?php echo $date1; ?>&time1=<?php echo $time1; ?>&tema1=<?php echo $tema1; ?>&venue1=<?php echo $venue1; ?>" ><b>Register</b></a>
								</td>
							</tr>
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic2; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic2; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status2; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date2); ?></td>
								<td valign="top" name="time1"><?php echo $time2; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema2; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue2; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic2; ?>&pic1=<?php echo $pic2; ?>&status1=<?php echo $status2; ?>&date1=<?php echo $date2; ?>&time1=<?php echo $time2; ?>&tema1=<?php echo $tema2; ?>&venue1=<?php echo $venue2; ?>" ><b>Register</b></a>
								</td>
							</tr>	
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic3; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic3; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status3; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date3); ?></td>
								<td valign="top" name="time1"><?php echo $time3; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema3; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue3; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic3; ?>&pic1=<?php echo $pic3; ?>&status1=<?php echo $status3; ?>&date1=<?php echo $date3; ?>&time1=<?php echo $time3; ?>&tema1=<?php echo $tema3; ?>&venue1=<?php echo $venue3; ?>" ><b>Register</b></a>
								</td>
							</tr>	
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic4; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic4; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status4; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date4); ?></td>
								<td valign="top" name="time1"><?php echo $time4; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema4; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue4; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic4; ?>&pic1=<?php echo $pic4; ?>&status1=<?php echo $status4; ?>&date1=<?php echo $date4; ?>&time1=<?php echo $time4; ?>&tema1=<?php echo $tema4; ?>&venue1=<?php echo $venue4; ?>" ><b>Register</b></a>
								</td>
							</tr>	
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic5; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic5; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status5; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date5); ?></td>
								<td valign="top" name="time1"><?php echo $time5; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema5; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue5; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic5; ?>&pic1=<?php echo $pic5; ?>&status1=<?php echo $status5; ?>&date1=<?php echo $date5; ?>&time1=<?php echo $time5; ?>&tema1=<?php echo $tema5; ?>&venue1=<?php echo $venue5; ?>" ><b>Register</b></a>
								</td>
							</tr>	
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic6; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic6; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status6; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date6); ?></td>
								<td valign="top" name="time1"><?php echo $time6; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema6; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue6; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic6; ?>&pic1=<?php echo $pic6; ?>&status1=<?php echo $status6; ?>&date1=<?php echo $date6; ?>&time1=<?php echo $time6; ?>&tema1=<?php echo $tema6; ?>&venue1=<?php echo $venue6; ?>" ><b>Register</b></a>
								</td>
							</tr>	
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic7; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic7; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status7; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date7); ?></td>
								<td valign="top" name="time1"><?php echo $time7; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema7; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue7; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic7; ?>&pic1=<?php echo $pic7; ?>&status1=<?php echo $status7; ?>&date1=<?php echo $date7; ?>&time1=<?php echo $time7; ?>&tema1=<?php echo $tema7; ?>&venue1=<?php echo $venue7; ?>" ><b>Register</b></a>
								</td>
							</tr>	
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic8; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic8; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status8; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date8); ?></td>
								<td valign="top" name="time1"><?php echo $time8; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema8; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue8; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic8; ?>&pic1=<?php echo $pic8; ?>&status1=<?php echo $status8; ?>&date1=<?php echo $date8; ?>&time1=<?php echo $time8; ?>&tema1=<?php echo $tema8; ?>&venue1=<?php echo $venue8; ?>" ><b>Register</b></a>
								</td>
							</tr>	
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic9; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic9; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status9; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date9); ?></td>
								<td valign="top" name="time1"><?php echo $time9; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema9; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue9; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic9; ?>&pic1=<?php echo $pic9; ?>&status1=<?php echo $status9; ?>&date1=<?php echo $date9; ?>&time1=<?php echo $time9; ?>&tema1=<?php echo $tema9; ?>&venue1=<?php echo $venue9; ?>" ><b>Register</b></a>
								</td>
							</tr>	
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic10; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic10; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status10; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date10); ?></td>
								<td valign="top" name="time1"><?php echo $time10; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema10; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue10; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic10; ?>&pic1=<?php echo $pic10; ?>&status1=<?php echo $status10; ?>&date1=<?php echo $date10; ?>&time1=<?php echo $time10; ?>&tema1=<?php echo $tema10; ?>&venue1=<?php echo $venue10; ?>" ><b>Register</b></a>
								</td>
							</tr>								
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic11; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic11; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status11; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date11); ?></td>
								<td valign="top" name="time1"><?php echo $time11; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema11; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue11; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic11; ?>&pic1=<?php echo $pic11; ?>&status1=<?php echo $status11; ?>&date1=<?php echo $date11; ?>&time1=<?php echo $time11; ?>&tema1=<?php echo $tema11; ?>&venue1=<?php echo $venue11; ?>" ><b>Register</b></a>
								</td>
							</tr>
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic12; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic12; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status12; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date12); ?></td>
								<td valign="top" name="time1"><?php echo $time12; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema12; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue12; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic12; ?>&pic1=<?php echo $pic12; ?>&status1=<?php echo $status12; ?>&date1=<?php echo $date12; ?>&time1=<?php echo $time12; ?>&tema1=<?php echo $tema12; ?>&venue1=<?php echo $venue12; ?>" ><b>Register</b></a>
								</td>
							</tr>
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic13; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic13; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status13; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date13); ?></td>
								<td valign="top" name="time1"><?php echo $time13; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema13; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue13; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic13; ?>&pic1=<?php echo $pic13; ?>&status1=<?php echo $status13; ?>&date1=<?php echo $date13; ?>&time1=<?php echo $time13; ?>&tema1=<?php echo $tema13; ?>&venue1=<?php echo $venue13; ?>" ><b>Register</b></a>
								</td>
							</tr>
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic14; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic14; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status14; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date14); ?></td>
								<td valign="top" name="time1"><?php echo $time14; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema14; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue14; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic14; ?>&pic1=<?php echo $pic14; ?>&status1=<?php echo $status14; ?>&date1=<?php echo $date14; ?>&time1=<?php echo $time14; ?>&tema1=<?php echo $tema14; ?>&venue1=<?php echo $venue14; ?>" ><b>Register</b></a>
								</td>
							</tr>
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic15; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic15; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status15; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date15); ?></td>
								<td valign="top" name="time1"><?php echo $time15; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema15; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue15; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic15; ?>&pic1=<?php echo $pic15; ?>&status1=<?php echo $status15; ?>&date1=<?php echo $date15; ?>&time1=<?php echo $time15; ?>&tema1=<?php echo $tema15; ?>&venue1=<?php echo $venue15; ?>" ><b>Register</b></a>
								</td>
							</tr>
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic16; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic16; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status16; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date16); ?></td>
								<td valign="top" name="time1"><?php echo $time16; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema16; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue16; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic16; ?>&pic1=<?php echo $pic16; ?>&status1=<?php echo $status16; ?>&date1=<?php echo $date16; ?>&time1=<?php echo $time16; ?>&tema1=<?php echo $tema16; ?>&venue1=<?php echo $venue16; ?>" ><b>Register</b></a>
								</td>
							</tr>
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic17; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic17; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status17; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date17); ?></td>
								<td valign="top" name="time1"><?php echo $time17; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema17; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue17; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic17; ?>&pic1=<?php echo $pic17; ?>&status1=<?php echo $status17; ?>&date1=<?php echo $date17; ?>&time1=<?php echo $time17; ?>&tema1=<?php echo $tema17; ?>&venue1=<?php echo $venue17; ?>" ><b>Register</b></a>
								</td>
							</tr>
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic18; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic18; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status18; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date18); ?></td>
								<td valign="top" name="time1"><?php echo $time18; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema18; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue18; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic18; ?>&pic1=<?php echo $pic18; ?>&status1=<?php echo $status18; ?>&date1=<?php echo $date18; ?>&time1=<?php echo $time18; ?>&tema1=<?php echo $tema18; ?>&venue1=<?php echo $venue18; ?>" ><b>Register</b></a>
								</td>
							</tr>
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic19; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic19; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status19; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date19); ?></td>
								<td valign="top" name="time1"><?php echo $time19; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema19; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue19; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic19; ?>&pic1=<?php echo $pic19; ?>&status1=<?php echo $status19; ?>&date1=<?php echo $date19; ?>&time1=<?php echo $time19; ?>&tema1=<?php echo $tema19; ?>&venue1=<?php echo $venue19; ?>" ><b>Register</b></a>
								</td>
							</tr>
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic20; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic20; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status20; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date20); ?></td>
								<td valign="top" name="time1"><?php echo $time20; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema20; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue20; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic20; ?>&pic1=<?php echo $pic20; ?>&status1=<?php echo $status20; ?>&date1=<?php echo $date20; ?>&time1=<?php echo $time20; ?>&tema1=<?php echo $tema20; ?>&venue1=<?php echo $venue20; ?>" ><b>Register</b></a>
								</td>
							</tr>	
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic21; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic21; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status21; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date21); ?></td>
								<td valign="top" name="time1"><?php echo $time21; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema21; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue21; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic21; ?>&pic1=<?php echo $pic21; ?>&status1=<?php echo $status21; ?>&date1=<?php echo $date21; ?>&time1=<?php echo $time21; ?>&tema1=<?php echo $tema21; ?>&venue1=<?php echo $venue21; ?>" ><b>Register</b></a>
								</td>
							</tr>							
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic22; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic22; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status22; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date22); ?></td>
								<td valign="top" name="time1"><?php echo $time22; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema22; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue22; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic22; ?>&pic1=<?php echo $pic22; ?>&status1=<?php echo $status22; ?>&date1=<?php echo $date22; ?>&time1=<?php echo $time22; ?>&tema1=<?php echo $tema22; ?>&venue1=<?php echo $venue22; ?>" ><b>Register</b></a>
								</td>
							</tr>
							<tr>
								<input type="hidden" name="topic1" value='<?php echo $topic23; ?>' />
								<input type="hidden" name="pic1" value='<?php echo $pic23; ?>' />
								<input type="hidden" name="status1" value='<?php echo $status23; ?>' />
								<td valign="top" name="date1"><?php echo tgl_indo($date23); ?></td>
								<td valign="top" name="time1"><?php echo $time23; ?></td>
								<td valign="top" name="tema1"><b><?php echo $tema23; ?></b></td>							
								<td valign="top" name="venue1"><?php echo $venue23; ?></td>
								<td valign="top">
									<a href="/education_offline/register_online?topic1=<?php echo $topic23; ?>&pic1=<?php echo $pic23; ?>&status1=<?php echo $status23; ?>&date1=<?php echo $date23; ?>&time1=<?php echo $time23; ?>&tema1=<?php echo $tema23; ?>&venue1=<?php echo $venue23; ?>" ><b>Register</b></a>
								</td>
							</tr>	
						
						</table>
					</div>
				</div>				
				<!-- end edukasi baru -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php }}}}}}}}}}}}}}}}}}}}}}}}}}}}}?>
<?php include_once "po-content/$folder/footer.php"; ?>
<?php } ?>