<?php
require 'dbconnect.php';

$country =  $_POST['country'];


try {
    $conn->beginTransaction();

    $id = "";
 
    $stmt = $conn->prepare('SELECT * FROM `countries` WHERE `name` = "'.$country.'"');
    $stmt->execute();
    $result =  $stmt->fetchAll(); 

    $stmt = $conn->prepare('SELECT `name` FROM `city` WHERE `country` = "' . $result[0]['id'] . '"');
    $stmt->execute();
    $result =  $stmt->fetchAll();
    echo json_encode($result);
       
        
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
 