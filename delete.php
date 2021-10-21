<?php include('header.php');?>
<?php include('db.php'); ?>


<?php
if(isset($_GET['id'])){
		$id=$_GET['id'];
	


			$query="DELETE FROM `inventory_details` WHERE  `product_id`='$id'";

			$result=mysqli_query($connection, $query);

			if(!$result){
				die("query Failed".mysqli_error($connection));
			}
			else{

				header('location:index.php?delete_msg= Record Deleted successfully ');
			
	}		
				
}


?>


<?php include('footer.php');


