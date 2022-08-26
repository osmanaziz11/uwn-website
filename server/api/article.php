<?php

include '../db-config.php';

// Defined headers 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data=json_decode(file_get_contents("php://input"),true);
$table=$data['category'];
$id=$data['slug'];


 try {
        $sql = $conn->prepare("SELECT articleLink FROM $table where slug='$id'");
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        // print_r($result); 
    
            if (is_countable($result) && count($result) > 0) {
            echo json_encode(array('record'=>$result,'status'=>1));
        } 
      //   if not send response to 0
        else {
              echo json_encode(array('record'=>'','status'=>0));
        }
      
    } catch (PDOException $exc) {
    echo $exc->getMessage();
    echo json_encode(array('record'=>'','status'=>403));
    }

?>