<?php
	include 'database.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$sql = "INSERT INTO `login`( `name`, `email`,`password`,`confirm_password`,`phone`,`address`,`city`) 
	VALUES ('$name','$email','$password','$confirm_password','$phone','$address','$city')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	
	mysqli_close($conn);
?>

