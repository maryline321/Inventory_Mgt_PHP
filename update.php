<?php include('header.php');?>
<?php include('db.php'); ?>


	<?php 

	if(isset($_GET['id'])){
		$id=$_GET['id'];
	


			$query="SELECT * FROM `inventory_details` WHERE  `product_id`='$id'";

			$result=mysqli_query($connection, $query);

			if(!$result){
				die("query Failed".mysqli_error($connection));
			}
			else{

				$row=mysqli_fetch_assoc($result);
			
	}		
				
}
	?>

 <?php
if(isset($_POST['update_inventory'])){
	if (isset($_GET['id_new'])) {
		$idnew=$_GET['id_new'];
		# code...
	}
	$productname=$_POST['product_name'];
	  $quantity=$_POST['quantity'];
	  $measurement=$_POST['measurement'];
	  $original_price=$_POST['original_price'];
	  $profit=$_POST['profit'];
	  $selling_price=$_POST['selling_price'];

	   $query="UPDATE `inventory_details` SET `product_name`='$productname',`quantity`='$quantity',`measurement`='$measurement',`original_price`='$original_price',`profit`='$profit',
    		`selling_price`='$selling_price' where `product_id`='$idnew'";

    		$result=mysqli_query($connection, $query);

			if(!$result){
				die("query Failed".mysqli_error($connection));
			}
			else{
				header('location:index.php?update_msg= Data successfully updated');
			}
	}

 ?>


  <link href="style.css" rel="stylesheet">
<div class="container" style="

  display: flex;
  flex-direction: column;
  justify-content: center;
  max-width: 600px;
  box-shadow: 2px 2px 4px rgba(0.9,0,0,0.9);
  padding: 10px;
  
  margin-top: 10px;
">

    <h3 style="text-align: center;">Update Inventory</h3>
    <div class="title"  style="text-align: center;">Here;</div>

<form action="update.php?id_new=<?php echo $id;?>" method="post">

  <div class="form-group" style="width: 100%;">
        	<label><b>Product Name:</b></label>
    <input type="text" class="form-control" placeholder="Enter your name"
      name="product_name" value="<?php echo $row['product_name']?>">

      </div>
       <div class="form-group" style="width: 100%;">
       	 <label><b>Quantity:</b></label>
    <input type="number" class="form-control" placeholder="Enter amount" name="quantity"
     value="<?php echo $row['quantity']?>">
        	
      </div>
       <div class="form-group" style="width: 100%;">
       	 <label><b>Product Type:</b></label>
    <input type="text" class="form-control" placeholder="Enter measurement" name="measurement" value="<?php echo $row['measurement']?>"> 
        	
      </div>
       <div class="form-group" style="width: 100%;">
       	 <label><b>Original Price:</b></label>
    <input type="number" class="form-control" placeholder="Enter original_price" name="original_price" value="<?php echo $row['original_price']?>">
    
        	
      </div>
        	
      <div class="form-group" style="width: 100%;">
      	 <label><b>Selling Price:</b></label>
    <input type="number" class="form-control" placeholder="Enter sellprice" 
    name="selling_price" value="<?php echo $row['selling_price']?>">
    

      </div>

        <div class="form-group" style="width: 100%;">
        <label><b>Profit:</b></label>
    <input type="number" class="form-control" placeholder="Enter profit" name="profit"
    value="<?php echo $row['profit']?>">
     
  </div>
      <br>
      <input type="submit" name="update_inventory" class="btn btn-success" value="Update">
        <a class="btn btn-secondary" href="index.php" style="text-decoration: none; color:white; "><span class="fa fa-user"></span>&nbsp;close</a>  
  </form>
</div>



<?php include('footer.php');?>