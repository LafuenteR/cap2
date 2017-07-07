<?php
 function display_content(){
 		require 'connection.php';
        // echo "<div class='container'>";
     		echo "<div id='myNav' class='col-md-12'>";
        			$sql1 = "SELECT img_username from image where user_id=";
 			$sql2 = "SELECT img_id from image";
 			$result1 = mysqli_query($conn,$sql1);
     		$sql = "SELECT * from image ORDER BY img_id DESC";
     		// $description = 'sdlmvdhgjlhg;skg;k;fkh;f';
     		$result = mysqli_query($conn,$sql);
     		if(mysqli_num_rows($result)>0){
     			while($row = mysqli_fetch_assoc($result)){
     				extract($row);
     				// if(!isset($_POST['logout'])){
     					// echo "<div class='col-md-2 col-sm-2 clearfix'></div>";
     					echo "<div class='col-md-12 col-sm-12 clearfix'>";
     					echo "<br><br><a href='profile.php?current_account=$user_id'><strong>$img_username</strong></a>" . "<br>";
     					
     					echo "<a href='#'><img src='"."uploads/$img'></a><br>"; 
     					// echo "$description" . "<br>";
     					echo "<form><input type='submit' name='like'  value='Like'</form>";
     					echo "<form><input type='submit' name='edit'  value='Edit'</form>";
     					echo "<form><input type='submit' name='delete'  value='Delete'</form>";
     					echo "<form><input type='submit' name='download'  value='Download'</form>";
     					echo "</div>";
     					// echo "<div class='col-md-2 col-sm-2'></div>";
     				// }
     			}
     		}
        echo "</div>";
        }

        require_once('loginhome.php');
?>