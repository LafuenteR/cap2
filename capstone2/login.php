<?php 
	session_start();
	// function login(){
	// 	require 'home.php';
	if(isset($_POST['login'])){
		require('connection.php');
		$username = $_POST['username'];
 		$password =sha1($_POST['password']);
 		$sql = "SELECT * FROM users 
 		WHERE username = '$username' 
 		AND password = '$password'";

 		$result = mysqli_query($conn,$sql);
 		if(mysqli_num_rows($result)>0){
 			while($row = mysqli_fetch_assoc($result)){
 			extract($row);
 			$_SESSION['message'] = 'Login Successfully'; 
 			$_SESSION['username'] = $username;
 			$_SESSION['fullname'] = $fullname;
 			$_SESSION['password'] = $password;
 			$_SESSION['id'] = $iddd;
 			header('location:loginhome.php');
 			// $_SESSION['role'] = $role;

 			echo "Login Successfully";
 		}
 			// header('location:home.php');
 		}else{
 			echo "not found";
 		}
	}
// }
// require 'home.php';
?>