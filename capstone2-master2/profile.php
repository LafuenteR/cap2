
<?php 
function loop_username(){
    require 'connection.php';
$account_id = $_GET['current_account'];
$sql1 = "SELECT * from image where user_id = '$account_id'";
$result1 = mysqli_query($conn,$sql1);
// if(mysqli_num_rows($result)>0){
while ($row1 = mysqli_fetch_assoc($result1)) {
  extract($row1);
  return $row1['img_username'];
}
}
?>
<?php 
function loop_fullname(){
    $account_id = $_GET['current_account'];
    require 'connection.php';
  $img_fullname = "SELECT * from users where id ='$account_id'";
  $result_full = mysqli_query($conn,$img_fullname);
  // if($_GET['current_account']==$id){
  while ($row2 = mysqli_fetch_assoc($result_full)) {
  extract($row2);
  if($_GET['current_account']==$id){
  return $row2['fullname'];
}
}
}
?>
<?php 
  function follow() {
    require 'connection.php';
    $id = $_SESSION['id'];
    $account_id = $_GET['current_account'];
    $sql = "SELECT * from Follow where finollow_ko = '$account_id' AND user_id = '$id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      return true;

  }else{
    return false;
  }
  }
?>
<?php

function display_content(){
require 'connection.php';
$account_id = $_GET['current_account'];
if($_SESSION['id']==$account_id){
  header('location:profile1.php');
}
else{
echo "
<div class='col-md-12 col-sm-12'>
  <a href='images/whitewalker.jpg' download=''>
    <img src='images/whitewalker.jpg' class='img-circle col-md-5 col-sm-5' alt='Cinque Terre' width='304' height='236'>
  </a>
  <div class='col-md-7 col-sm-7 profile-left'><br><br>
    <div>
      <strong class='col-md-3'><h4>";
        echo loop_username();
        echo "</h4> 
      </strong>
      <div class='col-md-9'>";
      if(follow()) {
      echo"
      <form id='unfollow_form' method='POST' action='unfollow.php?current_account=$account_id'>
      <input class='btn btn-info' type='submit' name='unfollow' value='Unfollow' id='unfollow_id'>
      </form>";
    }else{
        echo"
      <form id='follow_form' method='POST' action='followed.php?current_account=$account_id'>
      <input class='btn btn-default' type='submit' name='follow' value='Follow' id='follow_id'>
      </form>";
  }
      echo "</div>
  </div>
  <div class='col-md-12 com-sm-12 follow'>
    <div class='col-md-4 col-sm-4 follow'><strong>";
    echo post(); 
    echo "&nbsp; post</strong></div>
    <div class='col-md-4 col-sm-4 follow'><strong>";
    echo follower();
     echo "&nbsp;followers</strong></div>
    <div class='col-md-4 col-sm-4 follow'><strong>";
      echo follow_ko();
    echo  "&nbsp;following</strong></div>
  </div><br><br><br>
   <div>
    <h3>";

    echo loop_fullname(); 
    echo"       </h3>
  </div>
  </div>
   
    <div class='col-md-12 col-sm-12'>
    <hr>
  </div>";

  display_other_profile();
  echo"         
  
</div>";
}
}
?>

<?php 

?>

<?php
    function display_other_profile(){
        require 'connection.php';
                    echo "<div id='myNav' class='col-md-12'>";
                    $sql1 = "SELECT img_username from image where user_id=";
            $sql2 = "SELECT img_id from image";
            $result1 = mysqli_query($conn,$sql1);
            $sql = "SELECT * from image";
                      $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    extract($row);

                        if($_GET['current_account']==$user_id){
                                            echo "<div class='col-md-6 col-sm-6 clearfix img_prof_size'>";
                        // echo "<br><br><a href='#'><strong>$img_username</strong></a>" . "<br>";
                        
                        echo "<a href='#'><img src='"."uploads/$img'></a><br>"; 
                        echo "<form><input type='submit' name='like'  value='Like'</form>";
                        echo "<form><input type='submit' name='edit'  value='Edit'</form>";
                        echo "<form><input type='submit' name='delete'  value='Delete'</form>";
                        echo "<form><input type='submit' name='download'  value='Download'</form>";
                        echo "</div>";
                                          
                    }
                }
            }
        echo "</div>";
        }
   require 'loginhome.php';

?>

<?php 
function post(){
    $account_id = $_GET['current_account'];
    require 'connection.php';
    $sql = "SELECT COUNT(`img_id`) as count_img FROM `image` WHERE `user_id` = '$account_id'";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
    extract($row);
    
    return $count_img;

}
}


?>
<?php 
function follow_ko(){
  $account_id = $_GET['current_account'];
  require 'connection.php';
  $sql2 = "SELECT COUNT(`finollow_ko`) as count_finollow FROM `Follow` WHERE user_id = '$account_id'";
  $result2 = mysqli_query($conn,$sql2);
    while($row = mysqli_fetch_assoc($result2)) {
    extract($row);
    
    return $count_finollow;

}
}

?>

<?php 
  function follower(){
  $account_id = $_GET['current_account'];
  require 'connection.php';
  $sql2 = "SELECT COUNT(`user_id`) as count_user FROM `Follow` WHERE finollow_ko = '$account_id'";
  $result2 = mysqli_query($conn,$sql2);
    while($row = mysqli_fetch_assoc($result2)) {
    extract($row);
    
    return $count_user;

}
}
?>





  



