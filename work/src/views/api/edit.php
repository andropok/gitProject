<?php
header("Access-Control-Allow-Origin: *");
header("Authorization: ***");
header('Access-Control-Allow-Methods: DELETE');

header('Access-Control-Allow-Headers: Access-Control-Allw-Headers,Content-Type');
      include "login.php";

      $received_data=json_decode(file_get_contents("php://input"));
      
      $data=$received_data->id;

      $data2=array(
        $received_data->id,
         $received_data->title,
         $received_data->author,
        $received_data->box,
       $received_data->selectyear,
         $received_data->selecttypes
      );

     
 $result = pg_query($conn,"UPDATE  form SET title='$received_data->title',author=' $received_data->author',info='$received_data->box',types='$received_data->selecttypes',year='$received_data->selectyear' WHERE id='".$data."'");
     
   


$output=array(
  'message' => 'Data ubdate'
);


    echo json_encode($output);
  



?>