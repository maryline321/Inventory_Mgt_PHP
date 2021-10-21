<?php include('db.php'); ?>
<?php

if(isset($_POST['user_register'])){

  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirm_password=$_POST['confirm_password'];


  if($confirm_password != $password){
  	header('location:register.php?message=Password not matching!');
  	exit();
  }

else{

	$query="INSERT INTO `users`(`username`, `email`, `password`, `confirm_password`) VALUES ('$username','$email','$password','$confirm_password')";

    $result=mysqli_query($connection, $query);

    if(!$result){
        die("query Failed".mysqli_error($connection));
      }

  else{
  	header('location:login.php?insert_msg= Regitration successfuly');
  }

 }
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
		<div class="title"  style="text-align: center;">Register here </div>
		<div>


		<?php 

        if(isset($_GET['message'])){
        	echo "<h3> ".$_GET['message']."</h3>";
        }

        ?>
			<label for="Username"> Username</label>
			<i class="fas fa-user"></i>
			<input type="text" name="username" id="Username" required=""/>
			<i class="fas fa-exclamation-circle failure-icon"></i>
			<i class="far fa-check-circle success-icon"></i>
			<div class="error"></div>
		</div>

			<div>
			<label for="email"> Email Address</label>
			<i class="fas fa-envelope"></i>
			<input type="email" name="email" id="Email" required=""/>
			<i class="fas fa-exclamation-circle failure-icon"></i>
			<i class="far fa-check-circle success-icon"></i>
			<div class="error"></div>
		</div>


			<div>
			<label for="password"> Passoword</label>
			<i class="fas fa-lock"></i>
			<input type="password" name="password" id="Password" required=""/>
			<i class="fas fa-exclamation-circle failure-icon"></i>
			<i class="far fa-check-circle success-icon"></i>
			<div class="error"></div>
		</div>


			<div>
			<label for="password">Confirm passoword</label>
			<i class="fas fa-lock"></i>
			<input type="password" name="confirm_password" id="Password" required="" />
			<i class="fas fa-exclamation-circle failure-icon"></i>
			<i class="far fa-check-circle success-icon"></i>
			<div class="error"></div>
		</div>

		 <button type="submit" name="user_register" class="btn btn-primary"><span class="fa fa-user"></span>&nbsp;Register</button>
		          
	</form>
</div>


</body>

  <script src="main.js"></script>
</html>