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
	if(isset($_POST['search'])){
	$find = $_POST['find'];

	$sql = "SELECT * FROM `image` WHERE (img_username Like '%$find%') OR (caption Like '%$find%')";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			extract($row);

			if ($_SESSION['id']==$user_id){
                    
                        echo "<div class='col-md-12 col-sm-12 clearfix img-hover container1'>";
                        echo "<br><br><a href='profile.php?current_account=$user_id'><strong>@$img_username</strong></a>" . "<br>";
                        echo "<img src='"."uploads/$img' class='image img-thumbnail' style='width:100%;'>"; 
                        // echo "<strong>$caption</strong>" . "<br>";
                        // echo "<div class='col-md-8 col-sm-8 like-button'>";
                        // echo "<button><a title='Like' href='report.php?current_img=$img_id'><span class='glyphicon glyphicon-heart-empty'></span></a></button>";
                        // echo "</div>";
                        echo "<div class='col-md-12 col-sm-12 button-hide middle'style='text-align:right;width:100%;'>";
                        echo "<button><a title='Edit' href='edit.php?current_img=$img_id'><span class='glyphicon glyphicon-edit'></span></a></button>";
                        echo "<button><a title='Delete' href='delete.php?current_img=$img_id'><span class='glyphicon glyphicon-trash'></span></a></button>";
                        echo "<button><a title='Download' href='uploads/$img' download='uploads/$img'><span class='glyphicon glyphicon-download'></span></a></button></div>";
                        echo "</div>";

                        echo "<div class='col-md-12 col-sm-12'>";
                        echo "<strong>$caption</strong>" . "<br>";
                        echo "<div class='col-md-8 col-sm-8 like-button'>";
                        // echo "<button><a title='Like' href='report.php?current_img=$img_id'><span class='glyphicon glyphicon-heart-empty'></span></a></button>";
                        echo "</div>";
                        echo "</div>";                        
                        }
                        else{
                                  echo "<div class='col-md-12 col-sm-12 clearfix img-hover container1'>";
                                  echo "<br><br><a href='profile.php?current_account=$user_id'><strong>@$img_username</strong></a>" . "<br>";

                                  echo "<img src='"."uploads/$img' class='image img-thumbnail' style='width:100%'>"; 
                                  // echo "$caption" . "<br>";
                        echo "<div class='col-md-12 col-sm-12 button-hide middle'style='text-align:right;width:100%;'>";
                        // echo "<button><a title='Like' href='report.php?current_img=$img_id'><span class='glyphicon glyphicon-heart-empty'></span></a></button>";
                        // if(liked()){
                        // echo "<button type='submit' id='btn-unlike'><a href='index.php?like=$img_id'>Unlike</a></button>";
                        // }
                        // else{
                        //  echo "<button type='submit' id='btn-like'><a href='index.php?current_img=$img_id'>Like</a></button>";
                        // }
                                  // echo "</div><div class='col-md-4 col-sm-4 button-hide' style='text-align:right;'>";
                        echo "<button><a title='Report Image' href='report.php?current_img=$img_id'><span class='glyphicon glyphicon-warning-sign'></span></a></button>";
                                  echo "<button><a title='Download' href='uploads/$img' download='uploads/$img'><span class='glyphicon glyphicon-download'></span></a></button></div>";
                                  echo "</div>";

                        echo "<div class='col-md-12 col-sm-12'>";
                        echo "<strong>$caption</strong>" . "<br>";
                        echo "<div class='col-md-8 col-sm-8 like-button'>";
                        // echo "<button><a title='Like' href='report.php?current_img=$img_id'><span class='glyphicon glyphicon-heart-empty'></span></a></button>";
                        echo "</div>";
                        echo "</div>";                        
                        }
		}
	}
	} 
}
}
require 'loginhome.php';
?>