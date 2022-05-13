<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$database="eduDB";

	$connection=mysqli_connect($servername,$username,$password,$database);

	if(!$connection) {
		die("Connecting Failed:".mysqli_connect_error());
	}
	else
	{
		// echo "Connection Successful";
	}
 ?>