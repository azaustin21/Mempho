<?php
    $currentDir = getcwd();
    //$uploadDirectory = "/uploads/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['.json','json']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));


    $uploadPath = $currentDir . basename($fileName); 

    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JSON file. ";
        }
        
        if ($fileSize > 5000000) {
            $errors[] = "This file is more than 5MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded";
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }


?>
<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset="UTF-8">
  <title>Admin Page</title>
<style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
      #header{
        height: 5%;
        width: 70%;  
      }  
      #title-text{
          text-align: center;
          color: #FFDF00;
        }



      html, body {
        background: #172697;
        height: 100%;
        margin: 0;
        text-align: center;
        color:#FFDF00;
        padding: 0;
    </style>
  </head>