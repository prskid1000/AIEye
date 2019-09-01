<?php
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
    
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $dir    = "files/";
        $files = scandir($dir,1);
        rename(($dir.$files[0]),($dir."data.jpg"));
        include('index.html');
        
    } 
    else
    {
         echo "Sorry, there was an error uploading your file.";
         $dir    = "files/";
         $files = scandir($dir,1);
         rename(($dir.$files[0]),($dir."data.jpg"));
         include('index.html');
    }
?>