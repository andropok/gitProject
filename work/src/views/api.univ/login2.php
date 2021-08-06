<?php


$hostname="localhost";
$username="postgres";
$pass="1234";
$dbname="uwm";

$conn = pg_connect("host = $hostname dbname = $dbname user = $username password = $pass");
	

if(!$conn){
	echo"error\n";
}

return $conn
?>