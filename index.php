<?php
session_start();

if(!empty($_GET['action'])){
switch($_GET['action']){
  case 'add':
    if(!empty($_POST['quantity']))
$id = $_GET['id'];
$query = "SELECT * FROM producttb   WHERE id=$id'";
$result = mysqli_query($con, $query);
while($product = mysqli_fetch_array($result)){
  $itemArray = [
    $product['id'] =>[
      'name' => $product['product_name'],
      
  'quantity'=> $_POST['quantity'],
'price' =>$product['product_price'],
'image' =>$product['product_image']
    ]
    ];


}
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>YOUR STORE</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<div class="header">
<div class="container">
  <div class="navbar">
    <div class="logo">
      <a href="index.php"class="btn"><img src="logo.jpg" width="100px">
        </a>
    
    </div>
    
    <nav>
    <ul id="MenuItems">
      <li><a href="index.php"><button class="b">Home</button></a></li>
      <li><a href="products.html"><button class="b">Products</button></a></li>
      <li><a href="clothes.html"><button class="b">Clothes</button></a></li>
      <li><a href="accessories.html"><button class="b">Accessories</button></a></li>
      <li><a href="account.php"><button class="b">Account</button></a></li>
      
    </ul>
    </nav>

    <div class="cart">
    <a href="empty.html"><img src="carts.jpg" width="30px" height="30px"></a>
  </div>
  <img src="menu.png" class="menu-icon" onclick="menutoggle()">
</div>
    
    
<div class="row">
  <div class="col-sm-2 col-md-10">
    <h1>
       Your Stop for everything royal!
 </h1>
    <p>
      Check out our latest collection.<br>
      <h1>
      <a href="#down" ><button class="btn" scroll-behavior:smooth;>Explore Now &#8595</button></a></h1>
 </p>

</div>
</div>
<!-------featured clothes-------->
<div class="Clothes">
  <div id ="down" class="small-container">
   <h2 class="title">
      Featured Clothes</h2>
    <div class="row">
      <div class="col-3">
        <form action="index.php" method="post" >
          <div class="card shadow">
     <div>   <a href="products details.html"><img src="d_1.jpg"></a>
</div>
<div class="card-body">
         <h4> Bottle Green Lehnga</h4>
    <div class="icon">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
       </div>
<p><span class="price"> $8999 </span> </p>
<a href="cartpage1.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
  <div class="col-3">
  <form action="index.php" method="post">
  <div class="card shadow">
     <div> <a href="products details_d2.html"><img src="d_2..jpg"></a>
</div>
<div class="card-body">
      <h4> Yellow georgette jacket</h4>
      <div class="icon">
        <i  class="fa fa-star"></i>
        <i  class="fa fa-star"></i>
        <i  class="fa fa-star"></i>
        <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          
  <p><span class="price"> $999</span> </p>
  <a href="cartpage2.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
  <div class="col-3">
  <form action="index.php" method="post">
  <div class="card shadow">
     <div>
    <a href="product detail_3.html"><img src="d_3.jpg" ></a>
</div>
<div class="card-body">
   <h4>
Maroon lehnga
</h4>
<div class="icon">
  <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
    </div>
<p><span class="price">$9999 </span></p>
<a href="cartpage3.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
<div class="col-3">
<form action="index.php" method="post">
  <div class="card shadow">
     <div>
  <a href="product details_4.html"><img src="d__4.jpg" ></a>
</div>
<div class="card-body">
  <h4>
    Red Bridal lehnga
  </h4>
  <div class="icon">
  <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
  </div>
  <p><span class="price">$40000 </span></p>
  <a href="cartpage4.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
<div class="row">
  <div class="col-3">
  <form action="index.php" method="post">
  <div class="card shadow">
     <div>
    <a href="product details_5.html"><img src="d_5.jpg"></a>
</div>
<div class="card-body">
  <h4> Black Ethinc Dress</h4>

<div class="icon">
<i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-o"></i>
      <i class="fa fa-star-o"></i>
</div>
<p><span class="price">$650</span>
</p>
<a href="cartpage5.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
  <div class="col-3">
  <form action="index.php" method="post">
  <div class="card shadow">
     <div>
    <a href="product details_6.html"><img src="d_6.jpg"></a>
</div>
<div class="card-body">
  <h4> Merganda Dress</h4>

<div class="icon">
<i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
  </div>
  <p><span class="price">$1200</span></p>
  <a href="cartpage6.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
  </div>
</div>
</div>
  <div class="col-3">
  <form action="index.php" method="post">
  <div class="card shadow">
     <div>
    <a href="product detail_7.html"><img src="d_7.jpg"></a>
</div>
<div class="card-body">
    <h4> Off white party dress</h4>
 
 <div class="icon">
 <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-o"></i>
      <i class="fa fa-star-o"></i>
  </div>
  <p><span class="price">$750<span> </p>
  <a href="cartpage7.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
  </div>
</div>
</div>
  <div class="col-3">
  <form action="index.php" method="post">
  <div class="card shadow">
     <div>
    <a href="product details_8.html"><img src="d_8.jpg"></a>
</div>
<div class="card-body">
    <h4>White Ethinc Dress</h4>
 <div class="icon">
  <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
  </div>
  <p> <span class="price">$800</span> </p>
  <a href="cartpage8.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
</div>
<!-------featured Accessories------->
<div class="small-container">
  <h2 class="title">
Featured Accessories
  </h2>
  <div class="row">
    <div class="col-3">
    <form action="index.php" method="post">
  <div class="card shadow">
     <div>
   <a href="product detail_9.html"><img src="b1.jpg"></a>
</div>
<div class="card-body">
  <div class="icon">
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-o"></i>
      <h4> Brown Vintage Sling Bag</h4>
  </div>
 <p><span class="price">  $200</span> </p>
          <a href="cartpage9.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
   </div>
</div>
</div> 
 <div class="col-3">
 <form action="index.php" method="post">
  <div class="card shadow">
     <div>
 <a href="product detail_10.html"><img src="b2.jpg"></a>
</div>
<div class="card-body">
 <h4> Maroon Clutch</h4>
    <div class="icon">
      <i  class="fa fa-star"></i>
      <i  class="fa fa-star"></i>
      <i  class="fa fa-star"></i>
      <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p><span class="price">$500 </span></p>
        <a href="cartpage10.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
<div class="col-3">
<form action="index.php" method="post">
  <div class="card shadow">
     <div>
<a href="product detail_11.html"><img src="b3.jpg" ></a>
</div>
<div class="card-body">
 <h4>
Black leather Bag
</h4>
<div class="icon">
<i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
  </div>
<p><span class="price">$699</span></p>
<a href="cartpage11.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
<div class="col-3">
<form action="index.php" method="post">
  <div class="card shadow">
     <div>
  <a href="product detail_12.html"><img src="b4.png" ></a>
</div>
<div class="card-body">
<h4>
  Vintage clutch
</h4>

<div class="icon">
<i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
</div>
<p><span class="price">$599</span></p>
<a href="cartpage12.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
<div class="row">
<div class="col-3">
<form action="index.php" method="post">
  <div class="card shadow">
     <div>
     <a href="product detail_14.html"><img src="b_5.jpg"></a>
</div>
<div class="card-body">
     <h4> Leather Belt</h4>
<div class="icon">
<i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star-o"></i>
    <i class="fa fa-star-o"></i>
</div>
<p><span class="price">$650</span></p>
<a href="cartpage13.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
<div class="col-3">
<form action="index.php" method="post">
  <div class="card shadow">
     <div>
  <a href="product detail_16.html"><img src="b6.jpg"></a>
</div>
<div class="card-body">
<h4> Multicoloured Potli</h4>
<div class="icon">
<i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
</div>
<p><span class="price">$399</span></p>
<a href="cartpage14.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
<div class="col-3">
<form action="index.php" method="post">
  <div class="card shadow">
     <div>
  <a href="product detail_17.html"><img src="b7.jpg"></a>
</div>
<div class="card-body">
<h4>Choker Necklace </h4>
<div class="icon">
<i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star-o"></i>
    <i class="fa fa-star-o"></i>
</div>
<p><span class="price">$199</span></p>
<a href="cartpage15.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
<div class="col-3">
<form action="index.php" method="post">
  <div class="card shadow">
     <div>
     <a href="product detail_15.html"><img src="b_8.jpg"></a>
</div>
<div class="card-body">
     <h4>Bottle Green Clutch</h4>

<div class="icon">
<i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
</div>
<p><span class="price">$399 </span></p>
<a href="cartpage16.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-------Latest Products------->
<div class="small-container">
  <h2 class="title">
Latest Products
  </h2>
<div class="row">
  <div class="col-3">
  <form action="index.php" method="post">
  <div class="card shadow">
     <div>
    <a href="product detail_18.html"><img src="l_1.jpg"></a>
</div>
<div class="card-body">
  <h4>Pastel coloured Saree</h4>
  <div class="icon">
  <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-o"></i>
      <i class="fa fa-star-o"></i>
  </div>
  <p><span class="price"> $899 </span></p>
  <a href="cartpage17.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
  </div>
</div>
</div>
<div class="col-3">
<form action="index.php" method="post">
  <div class="card shadow">
     <div>
    <a href="product detail_19.html"><img src="l_2.jpg"></a>
</div>
<div class="card-body">
    <h4> Multicoloured Khakhi Dress</h4>
 <div class="icon">
  <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
  </div>
  <p><span class="price">$499</span></p>
  <a href="cartpage18.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
  </div>
</div>
</div>
  <div class="col-3">
    <form action="index.php" method="post">
  <div class="card shadow">
     <div>
    <a href="product detail_20.html"><img src="l_3.jpg"></a>
</div>
<div class="card-body">
    <h4>White Shimmer Saree </h4>
   <div class="icon">
  <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-o"></i>
      <i class="fa fa-star-o"></i>
  </div>

  <p><span class="price">$599</span></p>
  <a href="cartpage19.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag</a>
  </div>
</div>
</div>
  <div class="col-3">
  <form action="index.php" method="post">
  <div class="card shadow">
     <div>
  <a href="product detail_13.html"><img src="l_4..jpg"></a>
</div>
<div class="card-body">
  <h4>Vintage Brown Potli</h4>
  <div class="icon">
  <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-o"></i>
      <i class="fa fa-star-o"></i>
  </div>
  <p><span class="price">$299 </span></p>
  <a href="cartpage20.html" class="btn"data-inline="true" button type="submit"name="add">Add to Bag </a>
  </div>
</div>
</div>
</div>
</div>
</div>

<!--------offer----------->
<div class="offer">
  <div class="small-container">
    <div class="row">
      <div class="col-2">
        <img src="ex1.jpg" class="offer-img">
        </div>
        <div class="col-2">
          <p>
            Exclusively Available on Your Store</p>
            <h1>Emerald Choker</h1>
            <a href="product detail_21.html" class="btn" button type="submit"name="add">Buy Now </a>
          </p>
          </div>
          </div>
          </div>
</div>


</div>
</div>
</div>
<br>
<br>
<!--------footer------->
<div class="footer">
<div class="container">
<div class= "row">
  <div class="footer-col-1">
    <h3>Download Our App</h3>
    <p>Download App for Android and IOS Mobile Phone</p>
    <div class="app-logo">
      <img src="ps1.png">
      <img src="ps2.png">
    
    </div>
  </div>
    <div class="footer-col-2">
      
<p>Our purpose is to sustainably make the royal look accessible to many.</p>
      </div>
      <div class="footer-col-3">
        <h3>Useful Links</h3>
        <ul>
          <li>Coupons</li>
          <li>Blog Post</li>
          <li>Return Policy
          </li>
          <li>Join Affiliate</li>
        </ul>
        </div>
      <div class="footer-col-4">
        <h3>Follow Us</h3>
        <ul>
          <li>Facebook</li>
          <li>Twitter</li>
          <li>Instagram </li>
          <li>Youtube</li>
        </ul>
        </div>
        <p class="copyright">Copyright 2020-your store</p>
      </hr>
        </div>
        </div>
</div>
</div>
</div>
        <!----------js for toggle menu------>
        <script>
          var MenuItems = document.getElementById("MenuItems")
          MenuItems.style.maxHeight="0px";
          function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
              MenuItems.style.maxHeight ="200px";

            }
            else{
              MenuItems.style.maxHeight ="0px";
            }
          }
        </script>  
    </body>
   </html>