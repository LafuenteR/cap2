<?php
session_start();
function get_title(){
		echo "Edit";
	}
	if(!isset($_SESSION['username'])){
    header('location:home.php');
}
else
{
	function display_content(){
		require 'connection.php';
		$current_img = $_GET['current_img'];

		if(isset($_POST['yes'])){
		$sql = "DELETE FROM image where img_id = '$current_img'";
		mysqli_query($conn,$sql);
		header('location:index.php');
		}
	
	if(isset($_POST['no'])){

		header('location:index.php');
		}
		$current_img = $_GET['current_img'];
		require 'connection.php';
		echo "<div id='myNav' class='col-md-12'>";
		$sql = "SELECT * FROM image WHERE img_id ='$current_img'";
		$result = mysqli_query($conn,$sql);
		
		while ($row = mysqli_fetch_assoc($result)) {
		extract($row);
		$caption = $row['caption'];
		
		echo "<div class='col-md-12 col-sm-12 clearfix img-hover'>";
		echo "<h3><strong>Are you sure you want to delete this item?</strong><h3>";
		echo "<form method='POST' action=''>";
		echo "<input class='btn btn-danger' type='submit' name='yes' value='Yes'>";
		echo "<input class='btn btn-default' type='submit' name='no' value='No'>";
		echo "</form>";
		echo "<a href='#'><img src='"."uploads/$img' style='width:100%;'></a><br>";
		echo "</div>";
		}
		 echo "</div>";
	}
}
		require 'loginhome.php';
?>



		







