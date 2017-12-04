<?php
    if(isset($_POST['submit']))
    {
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      if($user == "alex" && $pass == "crimetime")
      {
        
        header ('Location: admin.html');
      }
      else
      {
        echo ("You don't belong here...");
        echo ("<br>");
        echo ("Now get out of here before we put you on the map");
        echo "<img src=https://i.imgur.com/Dln1jzZ.gif />";
      }
    }
?>
<style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      color:#FFDF00;
      text-align: center;
      font-size: 50px;

    }
      
      #header{
    height: 5%;
    width: 70%;  
    }  
      #title-text{
      text-align: center;
      color: #FFDF00;
      }

      /* Optional: Makes the sample page fill the window. */
      html, body {
        background: #172697;
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>