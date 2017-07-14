<?php
	session_start();
	require 'connection.php';
		$current_img = $_GET['current_img'];

		if(isset($_POST['yes'])){
			
		require 'login.php';
		$id = $_SESSION['id'];
		$username = $_SESSION['username'];
		$sql = "INSERT INTO report(img_id,user_id,reporter)
		VALUES('$current_img','$id','$username')";
		mysqli_query($conn,$sql);
		header('location:index.php');
		}

if(!isset($_SESSION['username'])){
    header('location:home.php');
}
else
{
	function get_title(){
    echo "Delete Image";
}
	function display_content(){
		global $conn;
	
	if(isset($_POST['no'])){

		header('location:index.php');
		}
		$current_img = $_GET['current_img'];
		require 'connection.php';
		echo "<div id='myNav' class='col-md-12 col-sm-12'>";
		$sql = "SELECT * FROM image WHERE img_id ='$current_img'";
		$result = mysqli_query($conn,$sql);
		
		while ($row = mysqli_fetch_assoc($result)) {
		extract($row);
				
		echo "<div class='col-md-12 col-sm-12 clearfix img-hover'>";
		echo "<h3><strong>Are you sure you want to report this photo?</strong><h3>";
		echo "<form method='POST' action=''>";
		echo "<input class='btn btn-danger' type='submit' name='yes' value='YES'>";
		echo "<input class='btn btn-default' type='submit' name='no' value='No'><br>";
		
		echo "</form>";

		echo "<a href='#'><img src='"."uploads/$img' style='width:100%;'></a><br>";
		echo "</div>";
		}
		 echo "</div>";
	}
}
		require 'loginhome.php';
?>



		







