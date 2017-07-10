<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:home.php');
}
else
{
function get_title(){
    echo "Home";
}
 function display_content(){
 		require 'connection.php';
        // echo "<div class='container'>";
        // require 'login.php';
        // session_start();
     		echo "<div id='myNav' class='col-md-12'>";
        			$sql1 = "SELECT img_username from image where user_id=";
 			$sql2 = "SELECT img_id from image";

 			$result1 = mysqli_query($conn,$sql1);
            $id = $_SESSION['id'];
            // $sql = "SELECT * from image ORDER BY img_id DESC";
     		// $sql = "SELECT * from image i join Follow f ON ( f. user_id = i. user_id)  where $id = f. user_id ORDER BY img_id DESC";
            // $sql = "SELECT DISTINCT * from Follow f, image i where $id = f. user_id and f. finollow_ko = i. user_id ORDER BY img_id DESC";
     		// $description = 'sdlmvdhgjlhg;skg;k;fkh;f';
            $sql = "SELECT * from Follow f, image i where (i. user_id = $id or $id = f. user_id) and (f. finollow_ko = i. user_id) ORDER BY img_id DESC";
     		$result = mysqli_query($conn,$sql);
     		if(mysqli_num_rows($result)>0){
     			while($row = mysqli_fetch_assoc($result)){
     				extract($row);
     				// if(!isset($_POST['logout'])){
     					// echo "<div class='col-md-2 col-sm-2 clearfix'></div>";
                        if ($_SESSION['id']==$user_id){
                        echo "<div class='col-md-12 col-sm-12 clearfix img-hover'>";
                        echo "<br><br><a href='profile.php?current_account=$user_id'><strong>@$img_username</strong></a>" . "<br>";
                        echo "<a href='#'><img src='"."uploads/$img'></a><br>"; 
                        echo "$caption" . "<br>";
                        echo "<div class='col-md-8 col-sm-8 like-button'>";
                        // echo "<form><input type='submit' name='like'  value='Like'</form>";
                        // echo "&nbsp;&nbsp;&nbsp;liked this";
                        echo "</div><div class='col-md-4 col-sm-4 button-hide'style='text-align:right;'>";
                        echo "<button><a href='edit.php?current_img=$img_id'>Edit</a></button>";
                        echo "<button><a href='delete.php?current_img=$img_id'>Delete</a></button>";
                        echo "<button><a href='uploads/$img' download='uploads/$img'>Download</a></button></div>";
                        echo "</div>";  
                        }
                        else{
     					echo "<div class='col-md-12 col-sm-12 clearfix img-hover'>";
     					echo "<br><br><a href='profile.php?current_account=$user_id'><strong>@$img_username</strong></a>" . "<br>";
     					
     					echo "<a href='#'><img src='"."uploads/$img'></a><br>"; 
     					echo "$caption" . "<br>";
                        echo "<div class='col-md-8 col-sm-8 like-button'>";
     					// echo "<form method='POST' action='liked.php?current_img=$img_id'><input type='submit' name='like'  value='Like'></form>";
          //               echo "&nbsp;&nbsp;&nbsp;liked this";
                        echo "</div><div class='col-md-4 col-sm-4 button-hide' style='text-align:right;'>";
                        echo "<button><a href='report.php?current_img=$img_id'>REPORT</a></button>";
     					echo "<button><a href='uploads/$img' download='uploads/$img'>Download</a></button></div>";
     					echo "</div>";
                        }
     					// echo "<div class='col-md-2 col-sm-2'></div>";
     				// }
     			}
     		}
        echo "</div>";
        }

        require_once('loginhome.php');
}


?>