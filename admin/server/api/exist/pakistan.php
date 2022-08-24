<?php

include '../../db-config.php';

// Defined headers 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data=json_decode(file_get_contents("php://input"),true);
$slug=$data['slug'];

 try {
     
        $sql = $conn->prepare("SELECT * FROM pakistan_news where slug=:myslug");
        $sql->execute([':myslug'=>$slug]);
      
        $result = $sql->fetch(PDO::FETCH_ASSOC);
  
      //   if user exist create session
            if (is_countable($result) && count($result) > 0) {
             
            echo json_encode(array('status'=>1));
        } 
      //   if not send response to 0
        else {
          
              echo json_encode(array('status'=>0));
        }
      
    } catch (PDOException $exc) {
       
    echo json_encode(array('status'=>403));
    }

?>