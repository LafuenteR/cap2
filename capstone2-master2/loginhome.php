<?php 
 function display_notifs(){
        require 'connection.php';
            echo "<div id='myNav' class='col-md-12 col-sm-12 col-xs-12'>";
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

?>
<?php 
    function display_upload(){  
    echo "<form style='text-align:center' action='upload.php' method='POST' enctype='multipart/form-data' id='uploadform'>
            Select image to upload:
            <input class='btn btn-default' type='file' name='fileToUpload' id='fileToUpload'>
            <input class='btn btn-info' type='submit' value='Upload Image' name='submit11'><br>
            <input class='form-control' type='text' name='caption' placeholder='Caption...'>";
            echo "<script src='preview.js'>";
        echo "<?script>";
        echo "</form>";
        
    }
    

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php get_title(); ?></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/lightbox.css" rel="stylesheet">
    <script src="js/lightbox.min.js"></script>

 </head>
<body>
	<nav class="navbar navbar-inverse center-block">
    	<div class="container-fluid nav-header-color">
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span> 
      			</button>
              <a class="navbar-brand" href="index.php">PhotoSharing</a>
             
            </div>

            <?php
            require 'search.php';
            display_content1(); ?>
            <div class="collapse navbar-collapse dropdown-content" id="myNavbar">
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="profile1.php">Hi, 
                <?php 
                 echo $_SESSION['username']; ?>
                </a></li>
        
                <li type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Log Out</li>
               
            </ul>
         
            </div>
      	</div>  <!-- container-fluid -->
    </nav>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Are you sure you want to Log out?</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="logout.php">
                <input class="btn btn-danger" type="submit" name="logout" value="Yes">
                <input class="btn btn-default" type="submit" name="no" value="No">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <div class="container center-block">
        <div class="row">
            <div class="left-sidebar col-md-2 col-sm-2 col-xs-2">
      
            </div>
            <div class="backcolor col-md-8 col-sm-8 col-xs-8">
            
                    <?php display_content(); ?>
                
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
        </div>
    </div>
    
            <div class="container container-fix-footer center-block" style="position: fixed;bottom: 0;left: 50%;transform: translateX(-50%);margin-right: 0;margin-left: 0;">
            <div class="row center-block">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  
                </div>
                <div class=" col-md-8 col-sm-12 col-xs-12">
               
                    <div class="center-block col-md-4 col-sm-4 col-xs-4 foot">
                        <a href="index.php" title="Home"><button type="button" class="btn btn-info btn-sm">
                            <span class="glyphicon glyphicon-home"></span>
                        </button></a>
                      
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 foot">
                        <!-- <a href="upload_form.php" title="Upload"> -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#uploadPhoto">
                                <span class="glyphicon glyphicon-upload"></span>
                            </button> 
                        <!-- </a> -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 foot">
                        <!-- <a href="notification.php" title="Notifications"> -->
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myNotifs">
                            <span class="glyphicon glyphicon-globe"></span>
                        </button> 
                        <!-- </a>   -->
                    </div>
                    
                 
                </div>
            </div>
        </div>
<!-- <script src="js/lightbox.min.js"></script> -->
<!-- Modal -->
  <div class="modal fade" id="myNotifs" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Notifications</h3>
          <?php display_notifs(); ?>
      </div>
      
    </div>
  </div>
  </div>
  <div class="modal fade" id="uploadPhoto" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Upload Photo</h3>
          <?php display_upload(); ?>
      </div>
      
    </div>
  </div>
  </div>
<script type="text/javascript">
    function filePreview(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#uploadform + img').remove();
                $('#uploadform').after('<img src="'+e.target.result+'" width="450" height="300"/>');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#fileToUpload').change(function(){
        filePreview(this);
    });
    $(document).ready(function(){
    $("#follow_id").click(function(){
    $("#unfollow_form").show();
    $("#follow_form").hide();
  });
    $("#unfollow_id").click(function(){
    $("#follow_form").show();
    $("#unfollow_form").hide();
  });
 $(function(){
        $('#info').click(function() {
            $(this).hide();
        });
    }); 
   </script>
</body>

</html>

