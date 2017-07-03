<?php
	function display_content(){	 
	echo "<form action='upload.php' method='POST' enctype='multipart/form-data' id='uploadform'>
		    Select image to upload:
		    <input class='btn btn-default' type='file' name='fileToUpload' id='fileToUpload'>
		    <input class='btn btn-info' type='submit' value='Upload Image' name='submit11'>
		</form>";
	}
	require 'loginhome.php';
?>

	<!-- function filePreview(input){
		if(input.files && input.files[0]){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#uploadform + img').remove();
				$('#uploadform').after('<img src="'+e.target.result+'" width="450" height="300"/>');
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$('#fileToUpload').change(function(){
		filePreview(this);
	}); -->


