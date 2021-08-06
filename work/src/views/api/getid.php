<?php
header ('Access-Control-Allow-Headers: *');
header ('Access-Control-Allow-Origin: *');
    include "login.php";


    $received_data=json_decode(file_get_contents("php://input"));

  
    $id=array();
    $result2 = pg_query($conn, "Select id from form   ");
    while($row = pg_fetch_assoc($result2)){
      $id[]=$row;

}


  echo json_encode($id);


?>