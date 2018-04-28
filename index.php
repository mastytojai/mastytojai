<!doctype html>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Roboto" rel="stylesheet">
</head>
<body>
<?php
	if(isset($_SESSION['u_id'])){
		
	}else{
		echo '<div id="login">
  	<h1 id="prisijungimas">Prisijungimas</h1>
  <form id="formm" action="includes/login.inc.php">
    <a>Password</a> <input type="password" style="color: white;">
	<input id="mygt" type="submit" value="Submit">
</form>

</div>
	';}
?>
</body>

</html>