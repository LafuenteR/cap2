<?php 
	// session_start();
	require 'connection.php';
 if(isset($_POST['signup'])){
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$pw2 = $_POST['confirm-password'];
 	$fullname = $_POST['fullname'];
 	// $email = $_POST['email'];

 	if($password == $pw2){
 		$password = sha1($password);
 		$sql = "INSERT INTO users(fullname,username,password,role)
 			VALUES('$fullname','$username','$password','regular')";
 			mysqli_query($conn,$sql);
 			$_SESSION['username'] = $username;
 			$_SESSION['fullname'] = $fullname;
 			header('location:home.php');
 	}else{
 		echo "Password did not match";
 	}
 }
?>

