<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:home.php');
}
else
{
function get_title(){
    echo "Search Result";
}
	function display_content(){
	require 'connection.php';
	// require 'search_result.php';
	if(isset($_POST['search'])){
		$find = $_POST['find'];

	$sql = "SELECT * FROM `image` WHERE (img_username Like '%$find%') OR (caption Like '%$find%')";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			extract($row);

			if ($_SESSION['id']==$user_id){
                        echo "<div class='col-md-12 col-sm-12 clearfix img-hover'>";
                        echo "<br><br><a href='profile.php?current_account=$user_id'><strong>@$img_username</strong></a>" . "<br>";
                        echo "<a href='#'><img src='"."uploads/$img'></a><br>"; 
                        echo "$caption" . "<br>";
                        echo "<div class='col-md-8 col-sm-8 like-button'>";
                        // echo "<form><input type='submit' name='like'  value='Like'</form>";
                        // echo "&nbsp;&nbsp;&nbsp;liked this";
                        echo "</div><div class='col-md-4 col-sm-4 button-hide'style='text-align:right;'>";
                        echo "<form><input type='submit' name='edit'  value='Edit'</form>";
                        echo "<button><a href='report.php?current_img=$img_id'>REPORT</a></button>";
                        echo "<button><a href='uploads/$img' download='uploads/$img'>Download</a></button></div>";
                        echo "</div>";  
                        }
                        else{
     					echo "<div class='col-md-12 col-sm-12 clearfix img-hover'>";
     					echo "<br><br><a href='profile.php?current_account=$user_id'><strong>@$img_username</strong></a>" . "<br>";
     					
     					echo "<a href='#'><img src='"."uploads/$img'></a><br>"; 
     					echo "$caption" . "<br>";
                        echo "<div class='col-md-8 col-sm-8 like-button'>";
     					// echo "<form><input type='submit' name='like'  value='Like'</form>";
          //               echo "&nbsp;&nbsp;&nbsp;liked this";
                        echo "</div><div class='col-md-4 col-sm-4 button-hide' style='text-align:right;'>";
                        echo "<button><a href='report.php?current_img=$img_id'>REPORT</a></button>";
     					echo "<button><a href='uploads/$img' download='uploads/$img'>Download</a></button></div>";
     					echo "</div>";
                        }
		}
	}
	} 
}
}
require 'loginhome.php';
?>