<?php
$quota = 1;
$id = htmlentities($_GET['id']);
$email = htmlentities($_GET['email']);
$conn   = mysqli_connect('localhost','securities','0k3z0n3.c0m', 'securities');
$sql = "select * from gathering_registration where nasabah_kode = '$id' AND nasabah_email = '$email'";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_row($result);
if ($row) $quota = 0;
echo $quota;
?>