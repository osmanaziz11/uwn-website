<?php

// Expected Json Input 
// {
// "slug":"pakistan-62609539",
// "articleLink": "https://www.bbc.com/urdu/pakistan-62609539",
// "publishedAt": "20 اگست 2022",
// "thumbnail": "https://ichef.bbci.co.uk/news/240/cpsprodpb/1020A/production/_126385066_p0cv6fx0.jpg",
// "title": "’سب پاکستان سے چلے جائیں گے تو یہاں تبدیلی کون لائے گا‘"
// }

include '../db-config.php';

// Defined headers 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data=json_decode(file_get_contents("php://input"),true);
$slug=$data['slug'];
$link=$data['articleLink'];
$date=$data['publishedAt'];
$image=$data['thumbnail'];
$title=$data['title'];

 try {
        $sqlQuery = "INSERT INTO pakistan_news (slug,articleLink,publishedAt,thumbnail,title) Values(:slug,:link,:date,:image,:title)";
        $sql = $conn->prepare($sqlQuery);
        $sql->execute([':slug'=>$slug,':link'=>$link,':date'=>$date,':image'=>$image,':title'=>$title]);
        echo json_encode(array('record'=>'','status'=>1));
   } catch (Exception $exc) {
        echo json_encode(array('result'=>'','status'=>0));
   }

?>