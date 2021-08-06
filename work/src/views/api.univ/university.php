<?php

header ('Access-Control-Allow-Headers: *');
header ('Access-Control-Allow-Origin: *');
    
include "login.php";
$received_data=json_decode(file_get_contents("php://input"));

if($received_data->act='getdata1'){
   
    $data=array();

    $result = pg_query($conn, "Select * from univers ");
    
    while($row = pg_fetch_assoc($result)){
            $data[]=$row;
}
  echo json_encode($data);
}

?>