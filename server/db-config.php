<?php
// Database Connection 
try{
    $db_name = 'mysql:host=localhost;dbname=urduworldnews;"';
    $username = 'root';
    $passowrd = '';
    $conn = new PDO($db_name, $username, $passowrd);
    $conn->exec('set names utf8mb4');
} catch (PDOException $exception) {
    $error = $exception->getMessage();
    echo '<script>alert("' . $error . '")</script>';
}

?>