
<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allw-Headers,Content-Type');
      include "login2.php";


     $received_data=json_decode(file_get_contents("php://input"));

    

      $data=array(
        $received_data->etos,
         $received_data->kodikos,
           $received_data->title,
         $received_data->teacher,
         $received_data->semester2,
      );



      $result = pg_query($conn, "INSERT INTO mech (etos,math,title,teacher,semester)
      VALUES ('$received_data->etos','$received_data->kodikos','$received_data->title','$received_data->teacher','$received_data->semester2')");
   

    

$output=array(
  'message' => 'Data Inserted'
);


    echo json_encode($output);
  



?>
