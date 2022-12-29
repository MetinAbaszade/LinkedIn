<?php
    include "dbconnect.php";

    $text =  $_POST['text']; 

    if($text != ""){
        $stmt = $conn->prepare("SELECT * FROM `user` WHERE firstname LIKE '%$text%' OR lastname LIKE '%$text%'");
        $stmt->execute();

        echo json_encode($stmt->fetchAll()); 
    }
    else{
        echo  "";
    }

?>
