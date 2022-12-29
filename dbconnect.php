<?php
    $dbhost = "localhost";
    $dbuser = "adminlinkedin";
    $dbpass = "iX27h]6b7rXyh[Vb";
    $dbname = "linkedin";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
?>