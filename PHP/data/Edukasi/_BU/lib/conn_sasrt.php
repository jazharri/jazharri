<?php
//Production
//$serverName = "192.168.12.13"; //serverName\instanceName
//$connectionInfo = array( "Database"=>"sas_rt", "UID"=>"sa", "PWD"=>"Sql2008");

//Development
//$serverName = "192.168.251.1"; //serverName\instanceName
//$connectionInfo = array( "Database"=>"sas_rt", "UID"=>"sa", "PWD"=>"Sql2008");

//Development Local
$serverName = "localhost"; //serverName\instanceName
$connectionInfo = array( "Database"=>"ITA", "UID"=>"sa", "PWD"=>"Sql2008");

$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     //echo "Connection established.<br />";
}else{
     //echo "Connection could not be established.<br />";
     //die( print_r( sqlsrv_errors(), true));
}
?>