<?php
		session_start();

	function get_title(){
		echo "Edit";
	}
require 'connection.php';
		// $current_img = $_GET['current_img'];
		
		if(isset($_POST['save'])){
			$id = $_SESSION['id'];
			$fullname = $_POST['fullname'];
			$username = $_POST['username'];
		$sql = "UPDATE users SET username = '$username' and fullname = '$fullname' where id = '$id'";
		mysqli_query($conn,$sql);
		header('location:index.php');
		}
if(!isset($_SESSION['username'])){
    header('location:home.php');
}
else
{
	function display_content(){
		global $conn;
	
	if(isset($_POST['cancel'])){

		header('location:profile1.php');
		}
		require 'connection.php';
		echo "<div id='myNav' class='col-md-12'>";
		$id = $_SESSION['id'];
		$sql = "SELECT * FROM users WHERE id ='$id'";
		$result = mysqli_query($conn,$sql);
		
		while ($row = mysqli_fetch_assoc($result)) {
		extract($row);
		// $caption = $row['caption'];
		
		echo "<div class='col-md-12 col-sm-12 clearfix img-hover'>";
		echo "<h3><strong>Are you sure you want edit your profile?</strong></h3>";
		// echo "<a href='#'><img src='"."uploads/$img' style='width:100%;'></a><br>";
		echo "<form method='POST' action=''>";
		echo "<input type='text' name='fullname' class='form-control' placeholder='$fullname'><br>";
		echo "<input type='text' name='username' class='form-control' placeholder='$username'><br>";
		echo "<input class='btn btn-danger' type='submit' name='save' value='Save'>";
		echo "<input class='btn btn-default' type='submit' name='cancel' value='Cancel'>";
		echo "</form>";
		echo "</div>";
		}
		 echo "</div>";
	}
}
		require 'loginhome.php';
?>



		







