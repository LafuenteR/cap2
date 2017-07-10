<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:home.php');
}
else{
function get_title(){
    echo "My Profile";
}
function display_content(){
require 'display_profile.php';
echo "
                    <div class='col-md-12 col-sm-12'>
                    <img src='images/whitewalker.jpg' class='img-circle col-md-5 col-sm-5' alt='Profile' width='304' height='236'>
                    <div class='col-md-7 col-sm-7 profile-left'>
                       <br><br><form method='POST' action=''>
                             <h3>";
                                echo $_SESSION['fullname'];
  echo "                          </h3>
                        </form>
                        <div class='col-md-12 com-sm-12 follow'>
                            <div class='col-md-4 col-sm-4 follow'><strong>";
                            echo post();
                            echo "&nbsp;post</strong></div>
                            <div class='col-md-4 col-sm-4 follow'><strong>";
                            echo follower(); 
                            echo "&nbsp;followers</strong></div>
                            <div class='col-md-4 col-sm-4 follow'><strong>"; 
                            echo follow_ko();
                            echo"&nbsp;following</strong></div>
                        </div><br>
                        <div id='edit'>
                            <form>
                                <input type='submit' name='edit' value='Edit Profile'>
                            </form>
                        </div>
                    
                    </div>
                    <div class='col-md-12 col-sm-12'>
                        <hr>
                    </div>
                </div>";
              
                    display_profile();
  echo"          </div>
        </div>";
    }
   require 'loginhome.php';
}
?>
<?php 
function post(){
    $id = $_SESSION['id'];
    require 'connection.php';
    $sql = "SELECT COUNT(`img_id`) as count_img FROM `image` WHERE `user_id` = '$id'";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
    extract($row);
    
    return $count_img;

}
}


?>

<?php 
function follow_ko(){
  require 'connection.php';
  $id = $_SESSION['id'];
  $sql2 = "SELECT COUNT(`finollow_ko`) as count_finollow FROM `Follow` WHERE user_id = '$id'";
  $result2 = mysqli_query($conn,$sql2);
    while($row = mysqli_fetch_assoc($result2)) {
    extract($row);
    
    return $count_finollow;

}
}

?>
<?php 
  function follower(){
  $id = $_SESSION['id'];
  require 'connection.php';
  $sql2 = "SELECT COUNT(`user_id`) as count_user FROM `Follow` WHERE finollow_ko = '$id'";
  $result2 = mysqli_query($conn,$sql2);
    while($row = mysqli_fetch_assoc($result2)) {
    extract($row);
    
    return $count_user;

}
}
?>
