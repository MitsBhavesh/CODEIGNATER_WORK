<?php

$serverName = "192.168.106.11"; //serverName\instanceName
$connectionInfo = array( "Database"=>"WEBCI", "UID"=>"sa", "PWD"=>"sa.1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
      // echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     // die( print_r( sqlsrv_errors(), true));
}
?>