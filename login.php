
<?php 

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "inventory_management");

$connection=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);


if(isset($_POST['username'])){

	$username=$_POST['username'];
	$password=$_POST['password'];



	$sql="SELECT * FROM `users` WHERE username='".$username."'AND password='".$password."' limit 1";

	$result=mysqli_query($connection,$sql);

	if(mysqli_num_rows($result)==1){
		 header("Location: index.php");
		exit();
	}
	else{
		 header('location:login.php?msg= Login Failed');
		exit();
	}


}

?>





<!DOCTYPE html>
<html>
<head>


	<title>Login</title>
	<link
      rel="stylesheet "
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      crossorigin="anonymous"
    />

  <link href="style2.css" rel="stylesheet">

</head>
<body>

<div class="container">
	<form id="form" action="" method="post">


		<h3 style="text-align: center;">Inventory Management</h3>
		<div class="title"  style="text-align: center;">Admin Login </div>
		<div>

		<?php 

        if(isset($_GET['insert_msg'])){
        	echo "<h3> ".$_GET['insert_msg']."</h3>";
        }
        
        ?>

        <?php 

        if(isset($_GET['msg'])){
        	echo "<h3> ".$_GET['msg']."</h3>";
        }
        
        ?>

			<label for="Username"> Username</label>
			<i class="fas fa-user"></i>
			<input type="text" name="username" id="Username" required="" />
			<i class="fas fa-exclamation-circle failure-icon"></i>
			<i class="far fa-check-circle success-icon"></i>
			<div class="error"></div>
		</div>


			<div>
			<label for="password"> Passoword</label>
			<i class="fas fa-lock"></i>
			<input type="password" name="password" id="Password" required="" />
			<i class="fas fa-exclamation-circle failure-icon"></i>
			<i class="far fa-check-circle success-icon"></i>
			<div class="error"></div>
		</div>
		

		 <button type="submit" name="user_login"><span class="fa fa-user"></span>&nbsp;Log in</button>
	
		  <a class="fcc-btn" href="register.php"><span class="fa fa-user"></span>&nbsp;Sign Up</a>  
			
		
		</button>

                 

	</form>
</div>


</body>

</html>