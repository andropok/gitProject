<?php
header ('Access-Control-Allow-Headers: *');
header ('Access-Control-Allow-Origin: *');  
$hostname="localhost";
$username="postgres";
$pass="1234";
$dbname="aksiologisi";

$conn = pg_connect("host = $hostname dbname = $dbname user = $username password = $pass");
	

if(!$conn){
	echo"error\n";
}
$data=json_decode(file_get_contents("php://input"));

$mathima = $data->mathima;
$etos = $data->etos; 
$tmima = $data->tmima;  
   
    $result = pg_query($conn, "SELECT * FROM $tmima WHERE etos=$etos AND math='".$mathima."' ");
    
    while($row = pg_fetch_assoc($result)){
            $data2[]=$row;
}
  echo json_encode($data2);




   

?>