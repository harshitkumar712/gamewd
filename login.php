
<html>
<head>
   <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet'>
   <title> Login </title>
   <style>
body
    {
     background-image: linear-gradient(to bottom right,#2F3C7E,#FBEAEB,#2F3C7E);
    }
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0px;
  border: 1px solid #FBEAEB;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0px;  
  
  border: 1px solid #FBEAEB;
  border-radius: 4px;
  box-sizing: border-box;
}
div:hover
  {
    opacity: 1;
  }
  img:hover
  {
  opacity: 0.6;
  }
  img
  {
   opacity: 0.5;
    margin-top:140px;
    margin-left: 150px;
    width:40%; 
    
  }


  button {
  width: 40%;

  background-color: #2F3C7E;
  color: white;
  padding: 14px 20px;
  margin: 8px 0 ;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 18px;
  font-family:Work Sans;
}

 button:hover{
    background-color: rgb(255,76,90);
    opacity: 0.9;
}
  

div{
    width: 40%;
    background-color:#FBEAEB;
    padding: 26px;
    text-align: center;
    float: right;
    margin-top:150px;
    margin-right:64px;
    opacity: 0.9;
  }
 

</style>
<body>


<img src="boy1.jpg" alt="Game" >
<div>
	<h2 style="font-family:Sofia;font-size:28px;color:#2F3C7E">Login Form</h2>
  <form action="loginpage.php" method="post">  
    
    <input type="text"  name="user" placeholder="Enter Username" required>
    <input type="password"  name="password" placeholder="Enter Password" required>
     
    <button  type="submit">Login</button>
  </form>
</div>







</body>
</head>
</html>