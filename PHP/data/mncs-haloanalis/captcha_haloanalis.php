<?php
session_start();

unset($_SESSION['security_code']);
unset($_SESSION['k0d3h']);
unset($_COOKIE['k0d3h']);

header("Content-type: image/jpeg");
// create a 60*20 image
$angka = rand(4000,9999);
$im = imagecreate(40, 20);
// black background and orange text
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 242, 193, 0);
$orange 		= imagecolorallocate($im, 253, 140, 1);
$green			= imagecolorallocate($im, 122, 207, 2);
$blue 			= imagecolorallocate($im, 40, 168, 216);
$grey 			= imagecolorallocate($im, 128, 128, 128);
$randomColorChar	= array($blue,$orange,$grey,$green);

$security_code = substr(md5($angka), 15, 5); 
$_SESSION["security_code"] = $security_code;

//session_start();
$_SESSION["k0d3h"] = $angka;
setcookie("k0d3h", $angka);

$a = 2;
for ($i = 0; $i < 4; $i++){
	# ngacak warna
	shuffle($randomColorChar);
	imagestring($im, 5, 3, 2, $_SESSION["k0d3h"], $randomColorChar[0]);
}
#imagestring($im, 5, 3, 2, $angka, $textcolor);
// output the image
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" );
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT" );
header("Cache-Control: no-store, no-cache, must-revalidate" );
header("Cache-Control: post-check=0, pre-check=0", false );
header("Pragma: no-cache" );
header("Content-type: image/jpeg");
imagepng($im);
imagedestroy($im);
?>
