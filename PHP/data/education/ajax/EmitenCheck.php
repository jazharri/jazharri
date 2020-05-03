<?php
$quota = 0;
$emiten = htmlentities($_GET['emiten']);
$conn   = mysqli_connect('localhost','securities','0k3z0n3.c0m', 'securities');
$sql = "select * from gathering_quota where emiten = '$emiten' AND quota >= 1";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_row($result);
if ($row) $quota = $row[2];
echo $quota;
?>