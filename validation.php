<?php

session_start();
$con = mysqli_connect('remotemysql.com','ssUJ3ToNCc','uFozkCqXeR');
mysqli_select_db($con,'ssUJ3ToNCc');
$name = $_POST['user'];
$pass = $_POST['password'] ;
$s= "select * from usertable where name='$name'&& password = '$pass' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']= $name;
header('location:home.php');
}
else{
 header('location:account.php') ;
}
?>
