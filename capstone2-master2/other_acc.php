<?php

function display_content(){
require 'connection.php';
// require 'display_other_prof.php';
$account_id = $_GET['current_account'];
$sql = "SELECT * from image where user_id = '$account_id'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
  extract($row);
  $row['img_username'];
echo "
<div class='col-md-12 col-sm-12'>
  <a href='images/whitewalker.jpg' download=''>
    <img src='images/whitewalker.jpg' class='img-circle col-md-5 col-sm-5' alt='Cinque Terre' width='304' height='236'>
  </a>
  <div class='col-md-7 col-sm-7 profile-left'><br><br>
    <form method='POST' action=''>
      <strong>";
        echo $row['img_username'];
        echo " 
      </strong>
      <input class='btn btn-default' type='submit' name='follow' value='Follow' id='follow_id'>
      <input class='btn btn-info' type='submit' name='unfollow' value='Unfollow' id='unfollow_id'>
  </form>
  <div class='col-md-12 com-sm-12 follow'>
    <div class='col-md-4 col-sm-4 follow'>171 post</div>
    <div class='col-md-4 col-sm-4 follow'>101 followers</div>
    <div class='col-md-4 col-sm-4 follow'>106 following</div>
  </div><br>
  <div id='edit'>
    <form>
      <input type='submit' name='edit' value='Edit Profile'>
    </form>
  </div>
  <div>
    <h3>";

    echo $row['img_username']; 
    echo"       </h3>
  </div>
  </div>
    <!-- </div> -->
    <div class='col-md-12 col-sm-12'>
    <hr>
  </div>";

  display_profile();
  echo"         
  
</div>";
      }
    }
   require 'loginhome.php';

?>
