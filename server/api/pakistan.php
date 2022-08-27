<?php

include '../db-config.php';

// Defined headers 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


 try {
        $sql = $conn->prepare("SELECT * FROM pakistan_news");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        // print_r($result); 
    
            if (is_countable($result) && count($result) > 0) {
            echo json_encode(array('record'=>$result,'status'=>1));
        } 
      //   if not send response to 0
        else {
              echo json_encode(array('record'=>'','status'=>0));
        }
      
    } catch (PDOException $exc) {
    echo json_encode(array('record'=>'','status'=>403));
    }

?>