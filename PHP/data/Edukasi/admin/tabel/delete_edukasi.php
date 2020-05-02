<?php
	include '../../config.php';
	$id = $_GET['id'];
	$query = ("DELETE FROM edukasi_quota WHERE id_quota ='$id'");
	if(!mysqli_query($koneksi, $query)){
	die(mysqli_error);
	}else{
	echo '<script>alert("Data Berhasil Dihapus !!!");
	window.location.href="../edukasi_quota.php?page=edukasi"</script>';
	}
?>