<?php
 function display_profile(){
 		require 'connection.php';
        // require 'profile1.php';
        // echo "<div class='container'>";
     		// echo "<div id='myNav' class='col-md-12'>";
        			$sql1 = "SELECT img_username from image where user_id=";
 			$sql2 = "SELECT img_id from image";
 			$result1 = mysqli_query($conn,$sql1);
            $id = $_SESSION['id'];
     		$sql = "SELECT * from image where user_id = '$id' order by img_id desc";
     		// $description = 'sdlmvdhgjlhg;skg;k;fkh;f';
     		$result = mysqli_query($conn,$sql);
     		if(mysqli_num_rows($result)>0){
     			while($row = mysqli_fetch_assoc($result)){
     				extract($row);
                        $yey = "<strong>$caption</strong>"."&nbsp;$time_stamp";           
                        echo "<div class='col-md-6 col-sm-6 clearfix img_prof_size'>";

                        
                        echo "<a href='uploads/$img' data-lightbox='$img_id' data-title='$yey'><img src='"."uploads/$img'></a>";

                        echo "<button><a title='Edit' href='edit.php?current_img=$img_id'><span class='glyphicon glyphicon-edit'></span></a></button>";
                        echo "<button><a title='Delete' href='delete.php?current_img=$img_id'><span class='glyphicon glyphicon-trash'></span></a></button>";
                        echo "<button><a title='Download' href='uploads/$img' download='uploads/$img'><span class='glyphicon glyphicon-download'></span></a></button>";
                        echo "<br><br></div>";
                    
     					                    
     			}
     		}
        // echo "</div>";
        }

        require_once('profile1.php');
?>
