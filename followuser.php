<?php
    include  "function.php";

    $action = "";
    getParams();



    if($action ==  "follow"){
        $sql = "INSERT INTO `following`(`userid`, `followingid`) VALUES ('".$userid."', '".$followingid."')";
    }elseif($action ==  "unfollow"){
        $sql = "DELETE FROM `following` WHERE `userid` = '".$userid. "' AND `followingid` = '" . $followingid . "'";
    }

    try {
        $conn->exec($sql);
        echo "successfully completed"; 
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
?>