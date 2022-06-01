<?php

session_start();
$con = mysqli_connect('remotemysql.com','QKap1xCpnR','AZcJXR1uP9') or die(mysqli_error($con));
mysqli_select_db($con,'QKap1xCpnR') or die(mysqli_error($con));
$name = $_POST['user'];
$pass = $_POST['password'] ;
$s= "select * from usertable where name='$name'&& password = '$pass' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']= $name;
header('location:index.php');
}
else{
 header('location:account.php') ;
}
?>
