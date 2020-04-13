
<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');


$name=$_POST['user'];
$pass=$_POST['password'];
 $pass1=md5($pass);
if(!isset($_SESSION['name']))
{
$_SESSION['name']="User";
$_SESSION['name1']=$name;
}

$s="SELECT * from demotable where uname= '$name'&& upass='$pass1'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{   
  
  header('location:gamef.php');


}
else
{
	header('location:login.php');
}

?>




