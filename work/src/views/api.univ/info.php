<?php
header ('Access-Control-Allow-Headers: *');
header ('Access-Control-Allow-Origin: *');  
include "login2.php";

$received_data=json_decode(file_get_contents("php://input"));

    $data=array(
       $received_data->selectyear,
       $received_data->selectunivers
    );

    $result = pg_query($conn, "SELECT * FROM $data[1] WHERE etos='".$data[0]."'
    ORDER BY semester ");
    
    while($row = pg_fetch_assoc($result)){
            $data2[]=$row;
}
  echo json_encode($data2);




   

?>