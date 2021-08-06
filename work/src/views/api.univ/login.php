<?php


$hostname="localhost";
$username="postgres";
$pass="1234";
$dbname="tmimata";

$conn = pg_connect("host = $hostname dbname = $dbname user = $username password = $pass");
	

if(!$conn){
	echo"error\n";
}

return $conn
?>