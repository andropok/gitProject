
<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allw-Headers,Content-Type');
      include "login.php";


     $received_data=json_decode(file_get_contents("php://input"));

      

      $data=array(
        $received_data->id,
         $received_data->title,
         $received_data->author,
        $received_data->box,
       $received_data->selectyear,
         $received_data->selecttype
      );



      $result = pg_query($conn, "INSERT INTO form (title,author,info,types,year)
      VALUES ('$received_data->title','$received_data->author','$received_data->box','$received_data->selecttype','$received_data->selectyear')");
   

    

$output=array(
  'message' => 'Data Inserted'
);


    echo json_encode($output);
  



?>
