<?php
// session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Photo Sharing</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    .navbar-collapse .navbar-nav>li>a{
    color: black;
    }
    .navbar-collapse .navbar-nav>li>a:hover{
    	color: red;
    }
    .profile-left{
        text-align: left;
    }.follow{
        padding-left: 0;
    }.remove-li >ul >li{
        list-style-type: none;
        text-align: center;
    }
    #edit > form > input{
        width: 100%;
    }
     .navbar-collapse .navbar-nav>li>a, .nav-header-color .navbar-header>a{
    color: black;
    }
    .navbar-collapse .navbar-nav>li>a:hover{
        color: red;
    }
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
    	<div class="container-fluid nav-header-color">
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span> 
      			</button>
              <a class="navbar-brand" href="loginhome.php">PhotoSharing</a>
            </div>
            <div class="collapse navbar-collapse dropdown-content" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
            	<li><a href="#">Hi,  
                <?php 
                require 'login.php';
                require 'signup.php';
                 echo $_SESSION['username']; ?>
                 </a></li>
                <li type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Log Out</li>
                <!-- <li><a href="product.php" id="container-product">Products</a></li> -->
            </ul>
            </div>
      	</div>  <!-- container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                 <!-- <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-upload"></span> Upload
                 </button> -->
                 <form>
                    <input class="glyphicon glyphicon-upload btn btn-default btn-sm" type="submit" name="submit">
                 </form>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="col-md-12 col-sm-12">
                    <a href="images/whitewalker.jpg" download="">
                    <img src="images/whitewalker.jpg" class="img-circle col-md-5 col-sm-5" alt="Cinque Terre" width="304" height="236"></a>
                    <div class="col-md-7 col-sm-7 profile-left">
                       <form method="POST" action="">
                             <strong>
                             <?php 
                                // require 'login.php';
                                // require 'signup.php';
                                echo $_SESSION['username']; ?>
                            </strong>
                            <input type="submit" name="follow" value="Follow">
                        </form>
                        <div class="col-md-12 com-sm-12 follow">
                            <div class="col-md-4 col-sm-4 follow">171 post</div>
                            <div class="col-md-4 col-sm-4 follow">101 followers</div>
                            <div class="col-md-4 col-sm-4 follow">106 following</div>
                        </div><br>
                        <div id="edit">
                            <form>
                                <input type="submit" name="edit" value="Edit Profile">
                            </form>
                        </div>
                        <div>
                            <h3><?php 
                                echo $_SESSION['fullname']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <hr>
                    </div>
                </div>
               <div class="row remove-li">
                    <ul class="col-md-12 col-sm-12">
                        <li class="col-md-6 col-sm-6">One by one</li>
                        <li class="col-md-6 col-sm-6">All</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   
</body>
<script type="text/javascript">
	$("#log-in-a").click(function(){
		$("#log-in-div").show();
		$("#sign-up-h5").show();
		$("#sign-up-div").hide();
		$("#log-in-h5").hide();
	});
	$("#sign-up-a").click(function(){
		$("#sign-up-div").show();
		$("#log-in-h5").show();
		$("#log-in-div").hide();
		$("#sign-up-h5").hide();
	});
</script>
</html>

