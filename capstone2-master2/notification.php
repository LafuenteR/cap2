<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:home.php');
}
else
{
function get_title(){
    echo "Notifications";
}
 function display_content(){
 		require 'connection.php';
            echo "<div id='myNav' class='col-md-12'>";
        	$sql1 = "SELECT img_username from image where user_id=";
 			$sql2 = "SELECT img_id from image";

 			$result1 = mysqli_query($conn,$sql1);
            $id = $_SESSION['id'];
            $sql = "SELECT u. username from Follow f, users u where f. finollow_ko = $id AND f. user_id = u .id ORDER BY f. id";
     		$result = mysqli_query($conn,$sql);
     		if(mysqli_num_rows($result)>0){
                // var_dump($sql);
     			while($row = mysqli_fetch_assoc($result)){
     				extract($row);

                        echo "<div class='col-md-12 col-sm-12 clearfix img-hover'>";
                        
                        echo "<strong>$username</strong> followed you";
                      
                        echo "</div>";  
                        
                 
     			}
     		}
        echo "</div>";
        }
}
        require_once('loginhome.php');
?>