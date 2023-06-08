<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta nmae="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>online shopping</title>
  <link rel="stylesheet" href="new.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
</head>
<body>
  <div class="header">
  <div class="container">
    <div class="navbar">
      <div class="logo">
        <a href="new.html"><img src="images/logo.png" width="225px"></a>
      </div>
      <nav>
        <ul id="MenuItems">
       <li><a href="new.html">Home</a></li>
       <li><a href="components/product.php  ">product</a></li>
       <li><a href="#">About</a></li>
       <li><a href="#">Contact</a></li>
       <li><a href="components/account.php">Account</a></li>
       <li>
        <a href="components/cartpage.html" id="btn">
          <i class="fas fa-shopping-cart"></i>
          <span id="count"></span>
        </a>
      </li>
        </ul>
      </nav>
      
    
      <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
    <div class="row">
      <div class="col-2">
        <h1>Give Your Workout <br>A new style! </h1>
        <p> To enable E-Commerce in Nepal to take off, massive<br> investment 
          is needed in infrastructure. It will take massive investments 
          to increase mobile data coverage and geographic coverage,<br> and make it
           affordable for the entire population.</p>
        <a href="" class="btn">Exploer &#8594;</a>
      </div>
      <div class="col-2">
        <img src="images/image1.png" alt="">
      </div>
    </div>
  </div>
 </div>

 <!-- -----featured categories---- -->
  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
         <img src="images/category-1.jpg">
        </div>
        <div class="col-3"><img src="images/category-2.jpg"></div>
        <div class="col-3"><img src="images/category-3.jpg"></div>
      </div>
    </div>
 </div>
 
 <!-- -----featured categories---- -->
 <div class="small-container">
  <h2 class="title">Features products</h2>
  <div class="row">
    <div class="col-4">
      <a href="components/product_details.html"> <img src="images/product-1.jpg" alt=""></a>
      <a href="components/product_details.html"> <h4>Red Printed T-shirt</h4></a>
     <div class="rating">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fa fa-star-o"></i>
     </div>
     <p>Rs 1000.00</p>
     <a class="addCart"><i class="fas fa-shopping-cart cart"></i></a>
    </div>

    <div class="col-4">
      <img src="images/product-2.jpg" alt="">
      <h4>Red Printed T-shirt</h4>
      <div class="rating">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fa fa-star-o"></i>
      </div>
      <p>Rs 1000.00</p>
      <a class="addCart"><i class="fas fa-shopping-cart cart"></i></a>
      <a class="remove">Remove</a>
     </div>
    
     <div class="col-4">
      <img src="images/product-3.jpg" alt="">
      <h4>Red Printed T-shirt</h4>
      <div class="rating">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fa fa-star-o"></i>
      </div>
      <p>Rs 1000.00</p>
      <a class="addCart"><i class="fas fa-shopping-cart cart"></i></a>
     </div>
     <div class="col-4">
      <img src="images/product-4.jpg" alt="">
      <h4>Red Printed T-shirt</h4>
      <div class="rating">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fa fa-star-o"></i>
      </div>
      <p>Rs 1000.00</p>
      <a class="addCart"><i class="fas fa-shopping-cart cart"></i></a>
      <a class="remove">Remove</a>
     </div>
      
  </div>
  <h2 class="title">Latest products</h2>
  <div class="row">
    <div class="col-4">
     <img src="images/product-5.jpg" alt="">
     <h4>Red Printed T-shirt</h4>
     <div class="rating">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fa fa-star-o"></i>
     </div>
     <p>Rs 1000.00</p>
     <a class="addCart"><i class="fas fa-shopping-cart cart"></i></a>
     <a class="remove">Remove</a>
    </div>

    <div class="col-4">
      <img src="images/product-6.jpg" alt="">
      <h4>Red Printed T-shirt</h4>
      <div class="rating">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fa fa-star-o"></i>
      </div>
      <p>Rs 1000.00</p>
      <a class="addCart"><i class="fas fa-shopping-cart cart"></i></a>
      <a class="remove">Remove</a>
     </div>
    
     <div class="col-4">
      <img src="images/product-7.jpg" alt="">
      <h4>Red Printed T-shirt</h4>
      <div class="rating">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fa fa-star-o"></i>
      </div>
      <p>Rs 1000.00</p>
      <a class="addCart"><i class="fas fa-shopping-cart cart"></i></a>
      <a class="remove"><i class="fas fa-minus"></i></a>
     </div>
     <div class="col-4">
      <img src="images/product-8.jpg" alt="">
      <h4>Red Printed T-shirt</h4>
      <div class="rating">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fa fa-star-o"></i>
      </div>
      <p>Rs 1000.00</p>
      <a class="addCart"><i class="fas fa-shopping-cart cart"></i></a>
     </div>
 </div>
 </div>
 <!------ offer---- -->
    <div class="offer">
        <div class="small-container">
          <div class="row">
            <div class="col-2">
              <img src="images/exclusive.png" class="offer-img">
            </div>
            <div class="col-2">
              <p>Exclusive Avalable on RedStore</p>
              <h1>The Mi Smart 4</h1>
              <small>
                he Mi Smart Band 4 features a 39.9%
                       larger (than Mi Band 3)
                      AMOLED color Full-touch display with adjustable brightness.<br>
              </small>
              <a href="" class="btn">Buy Now &#8594;</a>
            </div>
          </div>
        </div>
</div>
        <!-- Testimonial -->
        <div class="testimonial">
          <div class="small-container">
            <div class="row">
              <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy 
                  text of the printing 
                  and typesetting. </p>
                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </div>
                   <img src="images/user-1.png" alt="">

                   <h3>Rekha Thapa</h3>
              </div>
              <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy 
                  text of the printing 
                  and typesetting. </p>
                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </div>
                   <img src="images/user-2.png" alt="">
                   <h3>Bisham Thapa</h3>
              </div>
              <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy 
                  text of the printing 
                  and typesetting. </p>
                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </div>
                   <img src="images/user-3.png" alt="">
                   <h3>Sita Thapa</h3>
              </div>
            </div>
        </div>
        </div>
        <!-- footer -->

        <script src="./jsfolder/togglemenu.js"></script>
        <script src="./jsfolder/addto _cart.js"></script>
        
</body>
</html>