

<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet'>
   <title> Sign Up </title>
   <style>
   	body
   	{
   		background-image: linear-gradient(to bottom right,#2F3C7E,#FBEAEB,#2F3C7E);
   	}
   	
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0px;
  display: inline-block;
  border: 1px solid #FBEAEB ;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0px;
  display: inline-block;
  border: 1px solid #FBEAEB;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color:rgb(255,76,90);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: rgb(255,76,90);
  opacity: 0.9;
}
button {
  width: 40%;
  background-color:#2F3C7E;
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
    padding: 23px;
    text-align: center;
    float: right;
    margin-top:20px;
    margin-right:64px;
    opacity: 0.9;
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
    margin-top:20px;
    margin-left: 150px;
    width:40%; 
    
  }
  
</style>
<body>
   <img src="boy.png" alt="Game" >
  <div >
 
  <form  action="registration.php" method="post">
    <h2 style="font-family:Sofia;font-size:28px;color:#2F3C7E">Sign Up</h2>
    <input type="text"  name="firstname" placeholder="First Name" required="">
    <input type="text"  name="lastname" placeholder="Last Name" required="">
    <input type="text"  name="email" placeholder="E-mail" required="">
    <input type="text"  name="phone" placeholder="Mobile No">
    <input type="text"  name="user" placeholder="Username" required="">
    <input type="password"  name="password" placeholder="Password" required="">
     
    <button  type="submit">Sign up</button> 
    
  </form>
</div>


</body>
</head>
</html>
