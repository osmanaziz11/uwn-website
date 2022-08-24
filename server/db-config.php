<?php
// Database Connection 
try{
    $db_name = 'mysql:host=localhost;dbname=urduworldnews;';
    $username = 'root';
    $passowrd = '';
    $conn = new PDO($db_name, $username, $passowrd);
   
} catch (PDOException $exception) {
    $error = $exception->getMessage();
    echo '<script>alert("' . $error . '")</script>';
}

?>