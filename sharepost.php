<?php   
  $image = isset($_FILES["image"]) ? $_FILES["image"] : ""; 
$dir = "img/";
$file = basename($_FILES["image"]["name"]);
$path = $dir . $file;

    

    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    $filename=$dir.date("his").".".$ext;
    $check = getimagesize($image["tmp_name"]);
    $ok = $check && in_array($ext, ["jpg", "png", "jpeg", "gif"]) && !file_exists($path);  
    
    if ($ok) move_uploaded_file($image["tmp_name"],$filename);
     
 
    echo json_encode(['imagename' => $filename]);

    ?>
