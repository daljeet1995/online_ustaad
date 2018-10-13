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
</head>
<body>
	<form method="post" action="insert_product.php" enctype="multipart/form-data">
		<table width="700" align="center">
			<tr>
				<td><h2>Insert New Product:</h2> </td>
			</tr>

			<tr>
				<td><input type="text" name="product_title"> </td>
			</tr>

			<tr>
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
				<td><input type="file" name="product_img1"> </td>
			</tr>

			<tr>
				<td><input type="file" name="product_img2"> </td>
			</tr>

			<tr>
				<td><input type="file" name="product_img3"> </td>
			</tr>

			<tr>
				<td><input type="text" name="product_price"> </td>
			</tr>

			<tr>
				<td><input type="text" name="product_desc"> </td>
			</tr>

			<tr>
				<td><input type="text" name="product_keywords"> </td>
			</tr>

			<tr>
				<td><input type="submit" name="submit"> </td>
			</tr>




	</form>

</body>
</html>