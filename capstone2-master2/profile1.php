<?php

function display_content(){
require 'display_profile.php';
echo "
                         <div class='col-md-12 col-sm-12'>
                    <a href='images/whitewalker.jpg' download=''>
                    <img src='images/whitewalker.jpg' class='img-circle col-md-5 col-sm-5' alt='Cinque Terre' width='304' height='236'></a>
                    <div class='col-md-7 col-sm-7 profile-left'>
                       <br><br><form method='POST' action=''>
                             <strong>";
                                echo $_SESSION['username'];
  echo "                          </strong>
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
                            
                                echo $_SESSION['fullname']; 
                     echo"       </h3>
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

?>
