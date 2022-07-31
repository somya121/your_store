<?php

session_start();
$con = mysqli_connect('remotemysql.com','0fA8qXSpM7','A4wKoqbc91') or die(mysqli_error($con));
mysqli_select_db($con,'0fA8qXSpM7') or die(mysqli_error($con));
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
