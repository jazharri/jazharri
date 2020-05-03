<title>Register Edukasi</title>	
<?php if ($mod==""){
	echo $mod;
}else{
?>
<?php 
include_once "po-content/$folder/header.php"; 
?>
<?php
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

	$date1	= cc($_GET["date1"] != null ? $_GET["date1"] : '');
	$time1	= cc($_GET["time1"] != null ? $_GET["time1"] : '');
	$topic1	= cc($_GET["topic1"] != null ? $_GET["topic1"] : '');
	$venue1	= $_GET["venue1"] != null ? $_GET["venue1"] : '';
	$tema1	= cc["tema1"] != null ? $_GET["tema1"] : '';
	$pic1	= $_GET["pic1"] != null ? $_GET["pic1"] : '';

?>
<link href="<?=$website_url;?>/po-content/<?=$folder;?>/education/css/awesomplete.css" rel="stylesheet" type="text/css" />
<link href="<?=$website_url;?>/po-content/<?=$folder;?>/education/css/jquery-ui-2.css" rel="stylesheet" type="text/css" />
<link href="<?=$website_url;?>/po-content/<?=$folder;?>/education/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="<?=$website_url;?>/po-content/<?=$folder;?>/education/css/validationEngine.jquery.css?3" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/education/js/awesomplete.min.js"></script>
<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/education/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/education/js/languages/jquery.validationEngine-en.js"></script>

<section class="banner">
	<div class="banner-home">
		<div class="list-slider">
			<div class="slider">
				<img src="../po-content/mnc/education/header/slider_desktop_1.jpg" img-large="../po-content/mnc/education/header/slider_desktop_1.jpg" img-medium="../po-content/mnc/education/header/slider_tab_1.jpg" img-small="../po-content/mnc/education/header/slider_mobile_1.jpg" alt="">
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
				<div class="row-product">
					<h2><?php echo $tema1; ?></h2>
					<div class="equity-content">
						<p style="line-height: 26px; text-align:justify; margin-top: 10px; margin-bottom: 0px;">Kelas ini cocok bagi investor saham syariah yang sudah memiliki rekening saham di MNC Sekuritas, tetapi masih belum mengetahui cara memanfaatkan menu dan fitur dalam aplikasi online trading MNC Trade Syariah.<br>
						Pengenalan MNC Trade Syariah akan diselenggarakan pada:</p>
						<div class="clearfix">&nbsp;</div>
						<div class="clearfix">&nbsp;</div>	
						<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:18px;">
							<input type="hidden" name="topic1" value='<?php echo $topic1; ?>' />
							<input type="hidden" name="tema1" value='<?php echo $tema1; ?>' />
							<input type="hidden" name="pic1" value='<?php echo $pic1; ?>' />
							<tr>
								<th valign="top" width="30px">Tanggal dan Waktu</th>
								<th valign="top">:</th>
								<th valign="top"><?php echo tgl_indo($date1); ?><br><?php echo $time1; ?><br><br></th>
							</tr>
							<tr>
								<th valign="top">Tempat</th>
								<th valign="top">:</th>
								<th valign="top">Online Class<br><br></th>
							</tr>
							<tr>
								<th valign="top">Registrasi </th>
								<th valign="top">:</th>
								<th valign="top"><a href="/education/register_online_nasabah?topic1=<?php echo $topic1; ?>&date1=<?php echo $date1; ?>&venue1=<?php echo $venue1; ?>&time1=<?php echo $time1; ?>&tema1=<?php echo $tema1; ?>&pic1=<?php echo $pic1; ?>" >Klik Disini</a></th>
							</tr>	
						</table>
						<div class="clearfix">&nbsp;</div>
						<div class="clearfix">&nbsp;</div>	
						<p style="line-height: 26px; text-align:justify; margin-top: 10px; margin-bottom: 0px;">Informasi lebih lanjut, silahkan hubungi Call Center kami di 1 500 899 (tekan 3) atau email ke <a href="mailto:callcenter.mncs@mncgroup.com?Subject=Klinik%20Edukasi%20Syariah%20Intermediate" target="_top">callcenter.mncs@mncgroup.com</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php include_once "po-content/$folder/footer.php"; ?>
<?php } ?>