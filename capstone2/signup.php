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
 		$sql = "INSERT INTO users(fullname,username,password)
 			VALUES('$fullname','$username','$password')";
 			mysqli_query($conn,$sql);
 			$_SESSION['username'] = $username;
 			$_SESSION['fullname'] = $fullname;
 			header('location:loginhome.php');
 	}else{
 		echo "Password did not match";
 	}
 }
?>

