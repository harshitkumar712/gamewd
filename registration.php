<?php

session_start();
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$f_name=$_POST['firstname'];
$l_name=$_POST['lastname'];
$u_mail=$_POST['email'];
$u_phone=$_POST['phone'];
$name=$_POST['user'];
$pass=$_POST['password'];
 $_SESSION['name']=$f_name;
 $_SESSION['name1']=$l_name;
 $pass1=md5($pass);

$s="SELECT * from demotable where uname= '$name'";
$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);


if($num==1)
{
	echo "Username already taken";
	
}
	
else
{
  $reg="INSERT into demotable(fname ,lname, umail, uphone, uname, upass ) values('$f_name','$l_name','$u_mail','$u_phone','$name','$pass1')";
    mysqli_query($con,$reg);
    echo "Registration Successful";
    header('location:loginpage.php');
}
?>




