<?php 
		if(isset($_POST['unfollow'])){
		session_start();
		require 'connection.php';
		$account_id = $_GET['current_account'];
		 require 'signup.php';
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
      $sql = "DELETE FROM Follow WHERE finollow_ko = '$account_id' AND user_id =$id";
        mysqli_query($conn,$sql);
        // header('location:profile.php?current_account=$user_id');
	}
	// require 'profile.php';
?>