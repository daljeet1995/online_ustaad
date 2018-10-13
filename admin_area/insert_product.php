<?php
  include("includes/db.php");

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="all" href="styles/style.css" />
    
	<title>Untitled Document</title>
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<style>
	.mce-path {/* CSS */
    display: none !important;
}
</style>
<body bgcolor="#999999">
	<form method="post" action="insert_product.php" enctype="multipart/form-data">
		<table width="700" align="center" border="1" bgcolor="#c7ecee">
			<tr align="center">
				<td colspan="2"><h1>Insert New Product:</h1> </td>
			</tr>

			<tr>
				 <td align="right"><b>Product Title</b></td>
				<td><input type="text" name="product_title" size="50" /> </td>
			</tr>

			<tr>
				<td align="right"><b>Product Category</b></td>
				<td>
                   <select name="product_cart">
                   	   <option>Select a Category</option>
                           <?php

                             $sel_cats = "Select * from categories";
                              $run_cats = mysqli_query($con, $sel_cats);
                               while ($row_cats= mysqli_fetch_array($run_cats)) {
                                  $cat_id = $row_cats['cat_id'];
                                  $cat_title = $row_cats['cat_title'];
                                  
                                 echo "<option value='$cat_id'>$cat_title</option>";

                               }
                             
                            ?> 
                   </select>
			    </td>
			</tr>

			<tr>
			 <td align="right"><b>Product Brand</b></td>
			 <td>
				<select name="product_brand  ">
                 <option>Select Brand</option>	
                   <?php

                       $get_brand = "Select * from brands";
                         $run_brands = mysqli_query($con, $get_brand);
                            while ($row_brand= mysqli_fetch_array($run_brands)) {
                               $brand_id = $row_brand['brand_id'];
                                 $brand_title = $row_brand['brand_title'];
                                     

                         echo "<option value='$brand_id'>$brand_title</option>";

                        }
                                   
                    ?>
                   </select>
			    </td>
			</tr>

			<tr>
				<td align="right"><b>Product Image 1</b></td>
				<td><input type="file" name="product_img1"> </td>
			</tr>

			<tr>
				<td align="right"><b>Product Image 2</b></td>
				<td><input type="file" name="product_img2"> </td>
			</tr>

			<tr>
				<td align="right"><b>Product Image 3</b></td>
				<td><input type="file" name="product_img3"> </td>
			</tr>

			<tr>
				<td align="right"><b>Product Price</b></td>
				<td><input type="text" name="product_price"> </td>
			</tr>

			<tr>
				<td align="right"><b>Product Description</b></td>
				<td><textarea type="text" name="product_desc" cols="35" rows="10"></textarea></td>
			</tr>

			<tr>
				<td align="right"><b>Product Keywords</b></td>
				<td><input type="text" name="product_keywords" size="50" /> </td>
			</tr>

			<tr align="center">
				<td colspan="2"><input type="submit" name="insert_product" value="Insert Product"> </td>
			</tr>




	</form>

</body>
</html>