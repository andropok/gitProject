
<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allw-Headers,Content-Type');
      include "login.php";


     $received_data=json_decode(file_get_contents("php://input"));

      

      $data=array(
        $received_data->ptixio_epimorfosi,
         $received_data->titlos,
         $received_data->university_ekp_foreas,
       $received_data->selectyear
      );



      $result = pg_query($conn, "INSERT INTO ekpaideusi (ptixio_epimorfosi,titlos,university_ekp_foreas,year)
      VALUES ('$received_data->ptixio_epimorfosi','$received_data->titlos','$received_data->university_ekp_foreas','$received_data->selectyear')");
   

    

$output=array(
  'message' => 'Data Inserted'
);


    echo json_encode($output);
  



?>
