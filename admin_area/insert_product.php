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
	<form method="POST" action="insert_product.php" enctype="multipart/form-data">
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
                   <select name="product_cat">
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
				<select name="product_brand">
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
<?php
   if (isset($_POST['insert_product'])) {

   	//Text data variables
   	  $product_title = $_POST['product_title'];
   	  $product_cat = $_POST['product_cat'];
      $product_brand = $_POST['product_brand'];
      $product_price = $_POST['product_price'];
      $product_desc = $_POST['product_desc'];
      $status = 'on';
      $product_keywords = $_POST['product_keywords'];

      //Image names 
       $product_img1 = $_FILES['product_img1']['name'];
       $product_img2 = $_FILES['product_img2']['name'];
       $product_img3 = $_FILES['product_img3']['name'];

      //Image temp names
        $temp_name1 = $_FILES['product_img1'];
        $temp_name2 = $_FILES['product_img2'];
        $temp_name3 = $_FILES['product_img3'];

       if($product_title=='' OR $product_cat=='' OR $product_brand=='' OR $product_price=='' OR $product_desc=='' OR $product_keywords=='' OR $product_img1=='') {

       	 echo "<script>alert('Please Fill all the fields!')</script>";
       	 exit();
       	
       }

       else{

         //uploading images to its folder
          move_uploaded_file($temp_name1, "product_images/$product_img1");
          move_uploaded_file($temp_name2, "product_images/$product_img2");
          move_uploaded_file($temp_name3, "product_images/$product_img3");


         $insert_product = "Insert into Products (cat_id,brand_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,status) values ('$product_cat','$product_brand',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$status')";

         $run_product = mysqli_query($con,$insert_product);

         if ($run_product) {
         	echo "<script>alert('Product inserted Successfully')</script>";
         }



   }

}

 
?>



















