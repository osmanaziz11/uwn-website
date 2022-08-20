<?php

// {
//     "slug":""
// }
include '../db-config.php';

// Defined headers 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data=json_decode(file_get_contents("php://input"),true);
$slug=$data['slug'];

 try {
        $sql = $conn->prepare("DELETE FROM `artist_news` WHERE `artist_news`.`slug` = '$slug';");
        $sql->execute();
            echo json_encode(array('record'=>"",'status'=>1));
        } 
   catch (PDOException $exc) {
    echo json_encode(array('record'=>'','status'=>403));
    }

?>