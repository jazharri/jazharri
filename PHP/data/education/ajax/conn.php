<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
	ini_set('display_error', 'on');
	ini_set('display_errors', 'on');
       
    $koneksi = mysql_connect("localhost","securities","0k3z0n3.c0m") or die("Koneksi Gagal !" . mysql_error());
	//if($koneksi) echo "Koneksi Berhasil";
 
    $db = mysql_select_db("securities") or die("Database tidak ada !" . mysql_error());
   
	//EmailQueryResultsAsCsv($koneksi);
    //echo "<br />";
       
   // if($db) echo "Database  berhasil dibuka !";
 
	//mysql_close($koneksi);
?>
