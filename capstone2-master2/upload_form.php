<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:home.php');
}
else
{
function get_title(){
    echo "Upload";
}

	function display_content(){	 
	echo "<form style='text-align:center' action='upload.php' method='POST' enctype='multipart/form-data' id='uploadform'>
		    Select image to upload:
		    <input class='btn btn-default' type='file' name='fileToUpload' id='fileToUpload'>
		    <input class='btn btn-info' type='submit' value='Upload Image' name='submit11'><br>
		    <input class='form-control' type='text' name='caption' placeholder='Caption...'>";
		    echo "<script src='preview.js'>";
		echo "<?script>";
		echo "</form>";
		
	}
	
}
	require 'loginhome.php';
?>



