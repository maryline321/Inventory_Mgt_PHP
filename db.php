<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "inventory_management");

$connection=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

// if(!$connection){
// 	die("connection Failed");
// }
// else{
// 	echo "yeess";
// }

?>