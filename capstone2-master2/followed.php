<?php 
		if(isset($_POST['follow'])){
		$account_id = $_GET['current_account'];
		header('location:profile.php?current_account=$account_id');
		session_start();
		require 'connection.php';


		 require 'signup.php';
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
      	$sql = "INSERT INTO Follow (finollow_ko,user_id)
            VALUES('$account_id',$id)";
        mysqli_query($conn,$sql);
        
        
	}
?>