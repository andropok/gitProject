<?php
header ('Access-Control-Allow-Headers: *');
header ('Access-Control-Allow-Origin: *');
    include "login.php";


    $received_data=json_decode(file_get_contents("php://input"));

  if($received_data->act='giveyear'){
    $data2=array();
    $result2 = pg_query($conn, "Select * from biografikast ");
    while($row2 = pg_fetch_assoc($result2)){
            $data2[]=$row2;

}
  echo json_encode($data2);
}

?>