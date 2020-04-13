
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




		const p = document.getElementById("but1"); 
        const q = document.getElementById("but2");  
  
        p.addEventListener("click", left,false); 
        q.addEventListener("click", right,false); 
  
        function left() { console.log(left);
            leftPressed=true;
            
        } 
  
        function right() { console.log(right);
            rightPressed=true;
             
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
	

	
