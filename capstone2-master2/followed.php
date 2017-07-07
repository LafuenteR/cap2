<?php 
		if(isset($_POST['follow'])){
		session_start();
		require 'connection.php';
		$account_id = $_GET['current_account'];
		 require 'signup.php';
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
      $sql = "INSERT INTO Follow (finollow_ko,user_id)
            VALUES('$account_id',$id)";
        mysqli_query($conn,$sql);
        // header('location:profile.php?current_account=$user_id');
	}
	// require 'profile.php';
?>