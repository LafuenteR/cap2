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
            $id = $_SESSION['id'];
            // $sql = "SELECT * FROM image
            //     WHERE user_id = '$id' OR (user_id = SELECT finollow_ko FROM Follow where user_id = '$id')";

            $sql = "SELECT * from Follow f, image i  where (i. user_id = $id or $id = f . user_id) and (f. finollow_ko = i. user_id) GROUP BY i .img_id ORDER BY img_id DESC";

             // $sql = "SELECT * from Follow f, image i where (finollow_ko = i. user_id) AND (i. user_id = $idd) OR ($idd = f. user_id)";

            // $sql = "SELECT * FROM image
            // WHERE user_id = '$id' or user_id = (SELECT finollow_ko FROM Follow where user_id = '$id')";

              // $sql = "SELECT * from image i where (i. user_id = $id or $id = Follow. user_id) and (Follow. finollow_ko = i. user_id) GROUP BY i .img_id ORDER BY img_id DESC";

            // $sql = "SELECT * from image ORDER BY img_id DESC";
     		$result = mysqli_query($conn,$sql);
            // var_dump($result);
     		if(mysqli_num_rows($result)>0){
     			while($row = mysqli_fetch_assoc($result)){
     				extract($row);
     				   $id = $_SESSION['id'];
                        if ($id==$user_id){
                        echo "<div class='col-md-12 col-sm-12 col-xs-12 clearfix img-hover container1'>";
                        echo "<br><br>";
                        // echo "<br><br><div class='col-md-2 col-sm-2 col-xs-3'>";
                        // echo "<img src='"."uploads/$img' class='image img-rounded' style='width:100%;height:50px;'>"; 
                        // echo "</div>";
                        // echo "<div class='col-md-10 col-sm-10 col-xs-9'>";
                        // echo "<p></p>";
                        echo "<a href='profile.php?current_account=$user_id'><strong>@$img_username</strong></a><br>";
                        echo $time_stamp ."<br>";
                        // echo "</div>";
                        echo "<img src='"."uploads/$img' class='image img-thumbnail' style='width:100%;'>"; 
                        echo "<div class='col-md-12 col-sm-12 col-xs-12 button-hide
                        middle'style='text-align:right;width:100%;'>";
                        echo "<button><a title='Edit' href='edit.php?current_img=$img_id'><span class='glyphicon glyphicon-edit'></span></a></button>";
                        echo "<button><a title='Delete' href='delete.php?current_img=$img_id'><span class='glyphicon glyphicon-trash'></span></a></button>";
                        echo "<button><a title='Download' href='uploads/$img' download='uploads/$img'><span class='glyphicon glyphicon-download'></span></a></button></div>";
                        echo "</div>";

                        echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
                        echo "<strong>$caption</strong>" . "<br>";
                        echo "<div class='col-md-12 col-sm-12 col-xs-12 like-button'>";
                        // echo "<button id='like'>";
                        // echo "<a class='like' name='like' title='Like' href='index.php?current_img=$img_id'><span class='fa fa-thumbs-o-up'></span></a>";
                        // echo "</button>";
                        // echo "<button id='dislike'>";
                        // echo "<a class='dislike' name='like' title='Dislike' href='index.php?current_img=$img_id'><span class='fa fa-thumbs-o-down'></span></a>";
                        // echo "</button>";
                        // echo "&nbsp; like this ";
                        // echo "&nbsp; dislike this";
                        echo "</div>";
                        echo "</div>";                        
                        }
                        else{
     				    echo "<div class='col-md-12 col-sm-12 col-xs-12 clearfix img-hover container1'>";
     					echo "<br><br>";
                        // echo"<div class='col-md-2 col-sm-2 col-xs-3'>";
          //               echo "<img src='"."uploads/$img' class='image img-rounded' style='width:100%;height:50px;'>"; 
          //               echo "</div>";
                        // echo "<div class='col-md-10 col-sm-10 col-xs-9'>";
                        // echo "<p></p>";
                        echo "<a href='profile.php?current_account=$user_id'><strong>@$img_username</strong></a><br>";
                        echo $time_stamp ."<br>";
                        // echo "</div>";
     					          echo "<img src='"."uploads/$img' class='image img-thumbnail' style='width:100%'>"; 
     					          // echo "$caption" . "<br>";
                        echo "<div class='col-md-12 col-sm-12 col-xs-12 button-hide middle'style='text-align:right;width:100%;'>";
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

                        echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
                        echo "<strong>$caption</strong>" . "<br>";
                        echo "<div class='col-md-12 col-sm-12 col-xs-12 like-button'>";
                        // echo "<button><a name='like' title='Like' href='index.php?current_img=$img_id'><span class='fa fa-thumbs-o-up'></span></a></button>";
                        // echo "<button><a title='Dislike' href='index.php?current_img=$img_id'><span class='fa fa-thumbs-o-down'></span></a></button>";
                        // echo "&nbsp; like this";
                        // echo "&nbsp; dislike this";
                        echo "</div>";
                        echo "</div>";                        
                        }
          			}
     		}
        
        }

        require 'loginhome.php' ;
}


?>
<?php 
    
    // require 'connection.php';
    // $current_img = $_GET['img_id'];
    // $query = "SELECT * FROM image where img_id='$current_img'";
    // $result = mysqli_query($conn,$query);
    // if(mysqli_num_rows($result)>0){
   
// }
?>
<?php 
    // function liked(){
    // if(isset($_POST['like'])){
    // if(isset($_GET['current_img'])){
    // $current_img = $_GET['current_img'];
    // session_start();
    // require 'connection.php';


    //  // require 'signup.php';
    //     $id = $_SESSION['id'];
    //     // $username = $_SESSION['username'];
    //     $sql = "INSERT INTO favorite (user_id , photo_id)
    //         VALUES('$id' ,'$current_img')";
    //     $result = mysqli_query($conn,$sql);
        // var_dump($result);
        
      // } 
        
  // }
 
?>



