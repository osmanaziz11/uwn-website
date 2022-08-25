<?php
include 'db-config.php';
include 'constants.php';
if (isset($_FILES['img']['name'])) {
    
   $strArr = explode('.', $_FILES['img']['name']);
   $imgName = current($strArr);
   $imgExten = end($strArr);
   $image = rand(0,9999) .".". $imgExten;

   try {
      $sqlQuery = "INSERT INTO `immegration` (`id`, `filename`) VALUES (NULL, '$image')";
        $sql = $conn->prepare($sqlQuery);
        $sql->execute();

      $location ='../assects/uploads/' . $image;
      move_uploaded_file($_FILES['img']['tmp_name'], $location);
      echo 1;
   } catch (Exception $exc) {
        echo 0;
   }
}

?>