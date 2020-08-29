<?php
     $target_file = "files/data.png";
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
    
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        include('index.html');
        
    } 
    else
    {
         echo "Sorry, there was an error uploading your file.";
         include('index.html');
    }
?>
