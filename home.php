<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:account.php');
}
?>
<html>
    <head>
        <title> HOME</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="style2.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
<div class="container">
  <div class="navbar">
    <div class="logo">
      <a href="index.php"class="btn"><img src="logo.jpg" width="100px">
        </a>
    
    </div>
    
    <nav>
    <ul id="MenuItems">
      <li><a href="index.php"><button class="btn">Home</button></a></li>
      <li><a href="products.html"><button class="btn">Products</button></a></li>
      <li><a href="clothes.html"><button class="btn">Clothes</button></a></li>
      <li><a href="accessories.html"><button class="btn">Accessories</button></a></li>
      <li><a href="account.php"><button class="btn">Account</button></a></li>   
    </ul>
    </nav>
    </div>
</div>
<div class="container">
<div class="row">
  <div class="col-1">
<h1>
     WELCOME
<?php echo $_SESSION['username']; 
?>
</h1>
</div>
</div>
<div class="row">
  <div class="col-1">
<a class="button" href="logout.php"> LOG OUT</a>
</div>
</div>
</div>
</div>
</body>


</html>
