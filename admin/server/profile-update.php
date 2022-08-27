<?php
include 'db-config.php';

if (isset($_FILES['adminImage']['name'])) {

   $strArr = explode('.', $_FILES['adminImage']['name']);
   $imgName = current($strArr);
   $imgExten = end($strArr);
   $image = 'adminIMG.' . $imgExten;

   try {
      $sql = $conn->prepare("UPDATE admininfo_ SET thumbnail_admin = ? WHERE `admininfo_`.`username` = 'Admin';");
      $sql->execute([$image]);

      $location = "../assects/img/" . $image;
      move_uploaded_file($_FILES['adminImage']['tmp_name'], $location);
   } catch (Exception $exc) {
      echo 'Exception Error:'.$exc->getMessage();
   }
}

?>