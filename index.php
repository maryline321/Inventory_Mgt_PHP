<?php include('header.php');?>
<?php include('db.php'); ?>
		
		<div class="box1">
       
        <?php 

        if(isset($_GET['message'])){
        	echo "<h6> ".$_GET['message']."</h6>";
        }

        ?>


        <?php 

        if(isset($_GET['insert_msg'])){
        	echo "<h6> ".$_GET['insert_msg']."</h6>";
        }
        
        ?>


        <?php 

        if(isset($_GET['update_msg'])){
        	echo "<h6> ".$_GET['update_msg']."</h6>";
        }
        
        ?>

        <?php 

        if(isset($_GET['delete_msg'])){
        	echo "<h6> ".$_GET['delete_msg']."</h6>";
        }
        
        ?>
        <h2>	<a href="login.php" class="btn btn-danger btn-sm" >Logout</a><br></h2>


		<a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal"   class="btn btn-primary btn-sm" >Add Inventory</a><br>

	
	
	</div>


		<table class="table table-hover table-bordered table-striped">
		<thead>
			<tr>
			<th>Product Id</th>
			<th>Product Name</th>
			<th>Quantity</th>
			<th>Product Type</th>
			<th>Original Price</th>
			<th>Selling Price</th>
			<th>Profit</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		</thead>

		<tbody>

			<?php 
			$query="SELECT * from `inventory_details`";

			$result=mysqli_query($connection, $query);

			if(!$result){
				die("query Failed".mysqli_error());
			}
			else{
				// print_r($result);
				//looping through the rows
				while($row=mysqli_fetch_assoc($result)){

					?>

					<tr>
				<td><?php echo $row['product_id'];?></td>
				<td><?php echo $row['product_name'];?></td>
				<td><?php echo $row['quantity'];?></td>
				<td><?php echo $row['measurement'];?></td>
				<td><?php echo $row['original_price'];?></td>
				<td><?php echo $row['selling_price'];?></td>
				<th><?php echo $row['profit'];?></th>


				<td><a href="update.php?id=<?php echo $row['product_id'];?>" class="btn btn-success">Update</a></td>

				<td><a href="delete.php?id=<?php echo $row['product_id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the record?')">Delete</a></td>
			
			</tr>




					<?php
				}
			}



			?>




			
		</tbody>
	</table>
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Inventory</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addUser" action="insert.php" method="post">
          <div class="mb-3 row">
            <label for="addUserField" class="col-md-3 form-label">Product Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="addUserField" name="product_name" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addEmailField" class="col-md-3 form-label">Quantity</label>
            <div class="col-md-9">
              <input type="number" class="form-control" id="addEmailField" name="quantity">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addMobileField" class="col-md-3 form-label">Product Type</label>
            <div class="col-md-9">

              <input type="text" class="form-control" id="addMobileField" name="measurement">

            </div>
          </div>
          <div class="mb-3 row">
            <label for="addCityField" class="col-md-3 form-label">Original price</label>
            <div class="col-md-9">
              <input type="number" class="form-control" id="addCityField" name="original_price">
            </div>
          </div>
         
          <div class="mb-3 row">
            <label for="addCityField" class="col-md-3 form-label">Selling price</label>
            <div class="col-md-9">
              <input type="number" class="form-control" id="addCityField" name="selling_price">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="addCityField" class="col-md-3 form-label">Profit</label>
            <div class="col-md-9">
              <input type="number" class="form-control" id="addCityField" name="profit">
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary" name="add_inventory">Submit</button>
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
          </div>
         
        </form> 
      </div>
      
    </div>
  </div>
</div>	

	<?php include('footer.php');?>