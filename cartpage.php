<?php
session_start();
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
<div class="container">
  <div class="navbar">
    <div class="logo">
      <a href="index.html"class="btn"><img src="logo.jpg" width="100px"> </a>
       </div>
    
    <nav>
    <ul id="MenuItems">
      <li><a href="index.html">Home</a></li>
      <li><a href="products.html">Products</a></li>
      <li><a href="clothes.html">Clothes</a></li>
      <li><a href="accessories.html">Accessories</a></li>
      <li><a href="account.html">Account</a></li>
      
    </ul>
    </nav>
    <div class="cart">
    <a href="cartpage.html"><img src="cart.jpg" width="30px" height="30px"></a>
  </div>
  <img src="menu.png" class="menu-icon" onclick="menutoggle()">
</div>
</div>

<!---------cart item details---->
<div class="container ">
 <div class="row text-center py-5">
     <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <form action="cartpage.php" method="post">
             <div class="card shadow">
                 <div>
                     <img src="d1.jpg" alt="image1" class="img-fluid card-img-top">
</div>
<div class="card-body">
    <h5 class="card-title">Bottle Green Lehnga</h5>
    <p>Beautiful lehnga in rich bottle green color of chiffon material.
      Semi-stitched with blouse and dupatta.<p>
      <span class="price">$8999</span>
</div>
</div>
</form>
</div>

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
         </div>
         
         <p class="copyright">Copyright 2020-your store</p>
       </hr>
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
    