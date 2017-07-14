<?php 
		if(isset($_POST['unfollow'])){
		session_start();
		require 'connection.php';
		$account_id = $_GET['current_account'];
		header('location:profile.php?current_account=$account_id');
		 require 'signup.php';
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
      $sql = "DELETE FROM Follow WHERE finollow_ko = '$account_id' AND user_id =$id";
        mysqli_query($conn,$sql);
        
	}
?>