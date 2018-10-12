<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="all" href="styles/style.css" />
	<title>My Shop</title>
</head>
<body>
	<!-- main container start -->
   <div class="main_wrapper">


   	  <!-- Header Starts -->
   	   <div class="header_wrapper">
            <img src="images/logo.jpg" style="float: left; width: 200px;">
            <img src="images/four.jpg" style="float: center; width: 360px;">
            <img src="images/six.jpg" style="float: right; width: 395px; height: 150px;">
       </div>
       <!-- Header Ends -->

           <!-- Navigation Bar Starts -->
       	   <div id="navbar">
                <ul id="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All Products</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            
                 <div id="form">
                   <form method="get" action="result.php" enctype="multipart/form-data">
                        <input type="text" name="user_query" placeholder="Search a Product" />
                        <input type="submit" name="search" value="Search" />
                   </form>
                 </div>
  

           </div>
           <!-- Navigation Bar Ends -->



         	   <div class="content_wrapper">
                     
                     <div id="left_sidebar">
                         <div id="sidebar_title">Categories</div>

                         <ul id="cats">
                             <li><a href="#">Laptops</a></li>
                             <li><a href="#">Mobile</a></li>
                             <li><a href="#">Camera</a></li>
                             <li><a href="#">Tables</a></li>
                             <li><a href="#">Computers</a></li>
                             <li><a href="#">Laptops</a></li>
                             <li><a href="#">Laptops</a></li>
                         </ul>

                         <div id="sidebar_title">Brands</div>
                               <ul id="cats">
                                   <li><a href="#">Motorola</a></li>
                                   <li><a href="#">Samsung</a></li>
                                   <li><a href="#">Dell</a></li>
                                   <li><a href="#">Intex</a></li>
                                   <li><a href="#">Sony</a></li>

                               </ul>    

                     </div>


                     <div id="right_content">Right Side Bar</div>

             </div>
   	   <div class="footer_area">
          <h1 style="color: #000; padding-top: 30px; text-align: center;"> &copy;by 2018 by www.online.com</h1>

       </div>





   </div>
    <!-- main container end -->







</body>
</html>