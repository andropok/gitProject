<?php
header("Access-Control-Allow-Origin: *");
header("Authorization: ***");
header('Access-Control-Allow-Methods: DELETE');

header('Access-Control-Allow-Headers: Access-Control-Allw-Headers,Content-Type');
      include "login.php";

      $received_data=json_decode(file_get_contents("php://input"));
      
      $data=$received_data->id;
     
     
 $result = pg_query($conn,"DELETE FROM ekpaideusi  WHERE id='".$data."'");
     
   
    
    

$output=array(
  'message' => 'Data DELETED'
);


    echo json_encode($output);
  



?>