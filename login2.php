<!DOCTYPE html>

<html>
  <head>
  <title>Login</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" language="javascript" src="crime_data_clean.json"></script>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
     h1 {
      color:#FFDF00;
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
</head>

<body>
	<div class="login">
		<h1>Login</h1>
		<form action="checklogin.php" method="post">
			<input type="text" name="user" placeholder="Username" required="required" />
			<input type="password" name ="pass" placeholder="Password" required="required" />
			<button type="submit" name = "submit"> Go </button>
		</form>
	</div>
</body>
</html>

