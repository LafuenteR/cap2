<?php
 function display_content(){
 		require 'connection.php';
        echo "<div class='container'>";
     		echo "<div class='container row'>";
     		$sql1 = "SELECT * from image";
     		$result = mysqli_query($conn,$sql1);
     		if(mysqli_num_rows($result)>0){
     			while($row = mysqli_fetch_assoc($result)){
     				extract($row);
     				if(!isset($_POST['logout'])){
     					echo "<div class='col-md-12 col-sm-12 clear'>" ."<img src='"."uploads/$img'"."<br></div>"; 
     				}
     			}
     		}
        echo "</div>";
        }

        require_once('loginhome.php');
?>