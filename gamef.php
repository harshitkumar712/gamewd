
<?php
session_start();
if(!isset($_SESSION['name']))
  header('location:index.php')

?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,intial scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet'>
	<title>Game</title>
	<style>*{
		padding:0;
		margin:0;}
		canvas{
			background: #eee;display: block;margin:0 auto;
		}
		body
		{
       background-color: #FBEAEB;
		}
		a:link, a:visited {
  background-color: #2F3C7E;
  color:#FBEAEB ;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  float: right;
}

a:hover, a:active {
  opacity: 0.8;
}
	</style>
</head>
<body >

<div>

	<p style="font-family:Work Sans; color:black;font-size: 30px;text-align: center;font-weight: bold;font-style: italic;">Welcome<?php
  echo $_SESSION['name']." ". $_SESSION['name1'];
  ?></p>
	<a href="logout.php">LOGOUT</a>
</div>
	<canvas id="myCanvas" width="1500" height="725" style="background-color:#2F3C7E;">		
	</canvas>
	
	
	<script src="game.js" type="text/javascript"></script>

</body>