
<?php include('db.php'); ?>
<?php

if(isset($_POST['add_inventory'])){

  $productname=$_POST['product_name'];
  $quantity=$_POST['quantity'];
  $measurement=$_POST['measurement'];
  $original_price=$_POST['original_price'];
  $profit=$_POST['profit'];
  $selling_price=$_POST['selling_price'];

  if($productname=="" || empty($productname)){
  	header('location:index.php?message=You need to Add a record');
  }

else{

	$query="INSERT INTO `inventory_details`(product_name, quantity, measurement, original_price, profit, selling_price) VALUES ('$productname',' $quantity',
  '$measurement',' $original_price','$profit','$selling_price')";

    $result=mysqli_query($connection, $query);

    if(!$result){
        die("query Failed".mysqli_error($connection));
      }

  else{
  	header('location:index.php?insert_msg=You data has been added successfuly');
  }

 }
}

?>