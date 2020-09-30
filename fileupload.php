<?php
     $target_file = "files/data.png";
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
    
        include('index.html');
        echo "<h3>File uploaded successfully.";
        
    } 
    else
    {
         include('index.html');
         echo "<h3>Sorry, there was an error uploading your file.<h3>";
    }
?>