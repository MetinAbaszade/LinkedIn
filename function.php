<?php
require "dbconnect.php";

function getParams()
{
    foreach ($_REQUEST as $key => $value) {
        $GLOBALS[$key] = trim($value);
    }
}

function signup($mail, $fname, $lname, $age, $gender, $pass, $country, $city)
{
    echo   $city;
    global $conn;
    $countryid = "null";
    $cityid = "null";

    if ($mail != "" && $pass != "" && $age != "" && $fname != "" && $lname != "" && $gender != "") {
        if ($country != "") {
            $statement = "SELECT * FROM `countries` WHERE `name` ='" . $country . "'";
            $stmt = $conn->prepare($statement);
            $stmt->execute();
            $number_of_rows = $stmt->rowCount(); 

            if ($number_of_rows > 0) {
                foreach ($stmt->fetchAll() as $k => $v) {  
                    $countryid = "'".$v["id"]."'";  
                }
            }
        }

        if ($city != "") {
            $statement = "SELECT * FROM `city` WHERE `name` ='" . $city . "'";
            $stmt = $conn->prepare($statement);
            $stmt->execute();
            $number_of_rows = $stmt->rowCount();

            if ($number_of_rows > 0) {
                foreach ($stmt->fetchAll() as $k => $v) {
                    $cityid = "'".$v['id']."'";
                }
            }
        }

        echo "country: $countryid city: $cityid";
        try {
            $sql = "INSERT INTO `user`(`firstname`, `lastname`, `mail`, `gender`, `password`, `countryid`, `cityid`) VALUES ('" . $fname . "','" . $lname . "','" . $mail . "','" . $gender . "','" . $pass . "',
            $countryid,$cityid);";  
            $conn->query($sql);
            return true;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return false;
        }
    } 
}

function signin($mail, $pass)
{
    global $conn;
    try {
        $sql = "SELECT * FROM `user` WHERE BINARY `mail`=  BINARY '" . $mail . "' AND BINARY `password`= BINARY '" . $pass . "';"; 
        $res = $conn->query($sql); 
        
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage(); 
    }
    return $res;
}
