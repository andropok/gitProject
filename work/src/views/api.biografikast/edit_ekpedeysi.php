<?php
header("Access-Control-Allow-Origin: *");
header("Authorization: ***");
header('Access-Control-Allow-Methods: DELETE');

header('Access-Control-Allow-Headers: Access-Control-Allw-Headers,Content-Type');
      include "login.php";

      $received_data=json_decode(file_get_contents("php://input"));
      
      $data=$received_data->id;

      $data2=array(
        $received_data->ptixio_epimorfosi,
         $received_data->titlos,
         $received_data->university_ekp_foreas,
       $received_data->selectyear
      );

     
 $result = pg_query($conn,"UPDATE  ekpaideusi SET ptixio_epimorfosi='$received_data->ptixio_epimorfosi',titlos=' $received_data->titlos',university_ekp_foreas='$received_data->university_ekp_foreas',year='$received_data->selectyear' WHERE id='".$data."'");
     
   


$output=array(
  'message' => 'Data ubdate'
);


    echo json_encode($output);
  



?>