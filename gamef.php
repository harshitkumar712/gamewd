
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
	
	<script>
		var canvas=document.getElementById("myCanvas");
		var ctx=canvas.getContext("2d");
		var ballRadius=12;
		var x=canvas.width/2;
		var y=canvas.height-30;
		var dx=2;
		var dy=-2;
		var paddleHeight=22;
		var paddleWidth=150;
		var paddleX=(canvas.width-paddleWidth)/2;
		var rightPressed=false;
		var leftPressed=false;
		var brickRowCount=9;
		var brickCloumnCount=18;
		var brickWidth=75;
		var brickHeight=20;
		var brickPadding=5;
		var brickoffsetTop=30;
		var brickoffsetLeft=30;
		var score=0;

		var bricks=[];
		for(var c=0;c<brickCloumnCount;c++){
			bricks[c]=[];
			for(var r=0;r<brickRowCount;r++){
				bricks[c][r]={x: 0,y: 0 ,status: 1 };
			}

		}

		document.addEventListener("keydown",keyDownHandler,false);
		document.addEventListener("keyup",keyUpHandler,false);

		function keyDownHandler(e){
			if(e.key=="Right" || e.key=="ArrowRight"){
				rightPressed=true;
			}
			else if(e.key=="Left" || e.key=="ArrowLeft"){
				leftPressed=true;
			}
		}

		function keyUpHandler(e){
			if(e.key=="Right" || e.key=="ArrowRight"){
				rightPressed=false;
			}
			else if(e.key=="Left" || e.key=="ArrowLeft"){
				leftPressed=false;
			}
		}

		function collisionDetection(){
			for(var c=0;c<brickCloumnCount;c++){
				for(var r=0;r<brickRowCount;r++){
					var b=bricks[c][r];
					if(b.status==1){

						if(x>b.x && x<b.x+ brickWidth && y>b.y &&  y<b.y +brickHeight){
							dy=-dy;
							b.status=0;
							score++;
							if(score==brickRowCount*brickCloumnCount){
								alert("you win!!!");
								document.location.reload();
								clearInterval(interval);
							}
						}
					}
				}
			}
		}

		function drawBall(){
			ctx.beginPath();
			ctx.arc(x,y,ballRadius,0,Math.PI*2);
			ctx.fillStyle="#FBEAEB";
			ctx.fill();
			ctx.closePath();
		}

		function drawPaddle(){
			ctx.beginPath();
			ctx.rect(paddleX,canvas.height-paddleHeight,paddleWidth,paddleHeight);
			ctx.fillStyle="#FBEAEB";
			ctx.fill();
			ctx.closePath();

		}

		function drawBricks(){
			for (var c =0; c<brickCloumnCount; c++) {
				for(var r=0;r<brickRowCount;r++){
					if(bricks[c][r].status==1){
					var brickX=(c*(brickWidth+brickPadding))+brickoffsetLeft;
					var brickY=(r*(brickHeight+brickPadding))+brickoffsetTop;
					bricks[c][r].x=brickX;
					bricks[c][r].y=brickY;
					ctx.beginPath();
					ctx.rect(brickX,brickY,brickWidth,brickHeight);
					ctx.fillStyle="#FBEAEB";
					ctx.fill();
					ctx.closePath();
				}

					
				}
				
		}
		}

		function drawScore()
		{
			ctx.font="25px Work Sans";
			ctx.fillStyle="#FBEAEB";
			ctx.fillText("Score:"+score,8,20);
		}

		function draw(){
			ctx.clearRect(0,0,canvas.width,canvas.height);
			drawBricks();
			drawBall();
			drawPaddle();
			drawScore();
			collisionDetection();


			if(x+dx>canvas.width-ballRadius || x+dx<ballRadius){
				dx=-dx;
				
			}
			if(y+dy<ballRadius) {
				dy=-dy;
				
			}
			else if(y+dy > canvas.height - ballRadius){
				if(x>paddleX && x<paddleX+paddleWidth){
					
					    
						dy=-dy;
						
						

					
										
				}
				else{
					

					alert(" Game over  Final score=>"+score);
					document.location.reload();
					clearInterval(interval);
				}
			}

			if(rightPressed && paddleX < canvas.width-paddleWidth){
				paddleX+=7;
				
			}
			else if(leftPressed && paddleX > 0){
				paddleX-=7;
				
			}



			x+=dx;
			y+=dy;
		}
		var interval=setInterval(draw,0);
	

	</script>

</body>