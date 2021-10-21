<?php include('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
	<title>Inventory.</title>

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>


	<input type="checkbox" id="nav-toggle">

	<div class="sidebar">
		<div class="sidebar-brand">

			<h2><span class="lab la-accusoft"></span> <span >Inventory <br>Management</span></h2>
			

		</div>

		<div class="sidebar-menu">
			
			<ul>
				<li>
				<a href="" class="active" style="text-decoration: none;"><span class="las la-igloo"></span> <span> Dashbord</span></a>
			</li>


				<li>
				<a href="" style="text-decoration: none;"><span class="las la-users"></span> <span> Items</span></a>
			</li>


				<li>
				<a href="" style="text-decoration: none;"><span class="las la-shopping-bag"></span> <span> category</span></a>
			</li>


				<li>
				<a href="" style="text-decoration: none;"><span class="las la-clipboard-list"></span> <span>Sales</span></a>
			</li>


				<li>
				<a href="" style="text-decoration: none;"><span class="las la-receipt"></span> <span> warehouse</span></a>
			</li>



				<li>
				<a href="" style="text-decoration: none;"><span class="las la-user-circle"></span> <span> comapny</span></a>
			</li>



				<li>
				<a href=""  style="text-decoration: none;"><span class="las la-clipboard-list"></span> <span> logout</span></a>
			</li>


			</ul>
		</div>
	</div>


	<div class="main-content">
		<header>


				<h2>

				<label for="nav-toggle">

					<span class="las la-bars"></span>
					

				</label>

				Dashboard
			</h2>

			<div class="search-wrapper">
				<span class="las la-search "></span>
				<input type="search" placeholder="search here">
			</div>

			<div class="user-wrapper">
				<img src="images/cher.png.jpg" width="40px" height="40px">
				

				<div>
					
			<h4>Admin</h4>
			<small>Super admin</small>
			<h6>chebet maryline</h6>

				</div>

			</div>
		</header>

		<main>

			<div class="cards">

				<div class="card-single">

					<div>
						<h1>5</h1>

						<span>Users</span>
					</div>
					
					<div>
						<span class="las la-users"></span>
					</div>

				</div>



				<div class="card-single">

					<div>
						<h1>79</h1>

						<span>Total Items</span>
					</div>
					
					<div>
						<span class="las la-clipboard-list"></span>
					</div>

				</div>
				

				<div class="card-single">

					<div>
						<h1>4</h1>

						<span>Total Orders</span>
					</div>
					
					<div>
						<span class="las la-shopping-bag"></span>
					</div>

				</div>
				
				
				<div class="card-single">

					<div>
						<h1>$5k</h1>

						<span>Total Sales</span>
					</div>
					
					<div>
						<span class="lab la-google-wallet"></span>
					</div>

				</div>
				


			</div>

			


			<div class="recent-grid">
				<div class="Projects">

					<div class="card">
						<div class="card-header">
							
							<a href="#!" class="btn btn-primary btn-sm" >Add Inventory</a><br>
							
						</div><h3>Recent Sales</h3>


						<div class="card-body">
							<div class="table-responsive">
							<table width="80%" class="table table-hover table-bordered table-striped">
								<thead>
									<tr>
										<th>Product Id</th>
			<th>Product Name</th>
			<th>Quantity</th>
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


				<td><a href="admin.php?id=<?php echo $row['product_id'];?>" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addUserModal"   class="btn btn-primary btn-sm">Update</a></td>

				<td><a href="delete.php?id=<?php echo $row['product_id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the record?')">Delete</a></td>
			</tr>


						<?php
				}
			}



			?>


			

								</tbody>
							</table>
							
						</div>
					</div>
						
					</div>
					
				</div>

				<div class="Customers">
                        
                        <div class="card">
						<div class="card-header">
							<h3>New Orders</h3>

							<button>Orders<span></span></button>
							
						</div>

						<div class="card-body">

							<div class="customer">
								<div class="info">
								<!-- <img src="images/cher.png.jpg" width="40px" height="40px" alt=""> -->

								<div>
									<h4>Items</h4>
									<small>Category</small>
								</div>

								</div>


							<div class="contact">

							<tr>
								<td>
											<button style="background-color: #6495ED;">Approve<span></span></button>
											<button style="background-color: #C70039;">Delete<span></span></button>
										</td>
							</tr>

						</div>
					</div>


					<div class="customer">
								<div class="info">
								<!-- <img src="images/cher.png.jpg" width="40px" height="40px" alt=""> -->

								<div>
									<h4>Items</h4>
									<small>Category</small>
								</div>

								</div>


							<div class="contact">

							<tr>
								<td>
											<button style="background-color: #6495ED; text-decoration: none;">Approve<span></span></button>
											<button style="background-color: #C70039;">Delete<span></span></button>
										</td>
							</tr>
						</div>
					</div>


					
				</div>
				
			</div>
		</div>

		</main>
		
	<!-- </div> -->

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

</body>
</html>