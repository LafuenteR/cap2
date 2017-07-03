<!DOCTYPE html>
<html>
<head>
	<title>Photo Sharing</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    .nav-header-color{
    	/*background: linear-gradient(to bottom, #3399ff 0%, #ccffff 100%);*/
    	/*background: linear-gradient(to bottom, #0033cc 0%, #66ccff 50%);*/
    	/*background: linear-gradient(to bottom, #0033cc 0%, #66ccff 100%);*/
    	background: white;
    	border: none;
    	/*border-color: #fcf8e3;*/
    }
    .navbar{
    	border: none;
    }
    .sign-log-border{
    	border: 1px solid black;
    	margin-bottom: 30px;
    }
    #log-in-div, #sign-up-h5{
    	display: none;
    }
 /*    .nav-header-color .navbar-header>a{
    color: black;
    }
     .nav-header-color .navbar-header>a{
    	color: red;
    }*/
    .btn-sm{
        width: 100%;
        height: 100%;
    }
    .foot{
        padding-left: 0;
        padding-right: 0;
        height: 50px;
    }
    .container-fix-footer{
        margin-left: 55px;
        margin-right: 55px;
    }
     .navbar-collapse .navbar-nav>li>a, .nav-header-color .navbar-header>a{
    color: black;
    }
    .navbar-collapse .navbar-nav>li>a:hover{
        color: red;
    }
   .imgi{
        width: 80px;
    }
/*    .special-img 
    {
        position: relative;
        top: -5px;
        float: left;
        left: -5px;
    }*/
    /*.left-sidebar{
        text-align: center;
        border-right: 1px solid grey;*/
        /*position: fixed; */
        /*top: 300;*/
    /*}*/
   input[type=file] {
    display: inline;
}
.backcolor{
  background-color: grey;
}

   </style>
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
                        <!-- <div class="col-sm-3 col-md-3"></div> -->
                <div class="col-sm-4 col-md-4">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
            <div class="collapse navbar-collapse dropdown-content" id="myNavbar">
            
            <ul class="nav navbar-nav navbar-right">
                <!-- <form> -->
              <!--   <li>
                    <a >
                       <!--  <img src="images/whitewalker.jpg" class="img-circle col-md-5 col-sm-5" alt="Cinque Terre"> -->
                     <!--   <img src="http://placehold.it/50x50" class="profile-image special-img img-circle"> </a>
                    <!-- </a> -->
                <!-- </li> --> 
                <li><a href="profile.php">Hi, 
                <?php 
                require 'login.php';
                require 'signup.php';
                // var_dump($_SESSION['id']);
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
            <div class="left-sidebar col-md-2 col-sm-2">
               <!--  <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-upload"></span> Upload
                 </button> -->
                 <img src="images/whitewalker.jpg" class="imgi img-circle" alt="Cinque Terre"><br>
                 <a href="#">
                     <h3><?php echo $_SESSION['fullname']; ?></h3>
                     <h4>(<?php echo $_SESSION['username'];?>)</h4>
                 </a>
                 <span>1000 Post</span>
                 <span>1000 Followers</span>
                 <span>1000 Following</span>
                 <br>
                  <br>
                   <br>
                    <br>
                     <br>
                      <br>
                       <br>
                        <br>
                         <br>
                          <br>

                           <br>
                            <br>
                             <br>
                              <br>
                               <br>
                                <br> <br> <br>
                                 <br>
                                  <br>

                                   <br>
                                    <br>
                                     <br>
                                      <br>
                                       <br>
                                        <br>


            </div>
            <div class="backcolor col-md-8 col-sm-8">
            
                <hr>
                <div class="container" style="height: 2000px;">
                    <?php display_content(); ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- <div class="container" style="position: fixed; bottom: 0;"> -->
        <div class="container center-block container-fix-footer" style="position: fixed;bottom: 0;">
            <div class="row center-block">
                <div class="col-md-2 col-sm-2">
                  <!--   <a href="google.com"><button type="button" class="btn btn-info btn-sm">
                            <span class="glyphicon glyphicon-home"></span> Home
                        </button></a> -->
                </div>
                <div class=" col-md-8 col-sm-8">
                <hr>
                    <div class="center-block col-md-4 col-sm-4 foot">
                        <a href="index.php"><button type="button" class="btn btn-info btn-sm">
                            <span class="glyphicon glyphicon-home"></span> Home
                        </button></a>
                      <!--   <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="submit11">
                        </form> -->
                    </div>
                    <div class="col-md-4 col-sm-4 foot">
                        <a href="form.php">
                            <button type="button" class="btn btn-info btn-sm">
                                <span class="glyphicon glyphicon-upload"></span> Upload
                            </button> 
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 foot">
                        <button type="button" class="btn btn-info btn-sm">
                            <span class="glyphicon glyphicon-globe"></span> Notifications
                        </button>   
                    </div>
                </div>
               <!--  <div class="col-md-4 col-sm-4">
                    <h1>Notifications</h1>
                </div> -->
            </div>
        </div>
    <!-- </div> -->
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
</script>
</body>

</html>

