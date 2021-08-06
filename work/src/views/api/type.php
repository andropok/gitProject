<?php
header ('Access-Control-Allow-Headers: *');
header ('Access-Control-Allow-Origin: *');
    
include "login.php";


   

   
    $data=array();

    $result = pg_query($conn, "Select title from type ");
    
    while($row = pg_fetch_assoc($result)){
            $data[]=$row;
}
  echo json_encode($data);


?>
