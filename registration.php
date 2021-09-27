<?php
header('location:account.php ');
session_start();
$con = mysqli_connect('remotemysql.com','ssUJ3ToNCc','uFozkCqXeR') or die(mysql_error());
mysqli_select_db($con,'ssUJ3ToNCc') or die(mysql_error());
$name = $_POST['user'];
$pass = $_POST['password'] ;
$s= "select * from usertable where name='$name' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num >= 1) 
    {
echo "<h2 Username already taken</h2>";
}
else
  {  $reg = "INSERT into usertable(name , password) VALUES('$name' , '$pass')";
    mysqli_query($con, $reg);
   echo "<h2 Registration Successful, Please Login</h2>";
  }
?>
