<?php
session_start();
if(!isset($_SESSION['role'])=='admin'){
    header('location:home.php');
}
elseif(($_SESSION['role'])!='admin'){
    header('location:index.php');
}
else{
    function get_title(){
        echo "Admin";
    }
 function display_content(){
            if(isset($_POST['report_image'])){
            $sql = "DELETE FROM image where img_id = '$img_id'";
            mysqli_query($conn,$sql);
            header('location:admin.php');
            }
 		    require 'connection.php';
     		echo "<div id='myNav' class='col-md-12'>";
            $id = $_SESSION['id'];
            $sql = "SELECT * from report";
            
     		$result = mysqli_query($conn,$sql);
            
     		if(mysqli_num_rows($result)>0){

     			while($row = mysqli_fetch_assoc($result)){
     				extract($row);
                        
                        echo "<div class='col-md-12 col-sm-12 clearfix img-hover'>";
                        
                        echo "<strong>$reporter</strong>";
                        echo  " reported image ";
                        echo $img_id;
                        
                        echo "</div>";  
                        
                        
     		}
        echo "</div>";
        }
}}
        require_once('loginhome.php');


?>