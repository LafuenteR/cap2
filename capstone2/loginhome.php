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
    .navbar-collapse .navbar-nav>li>a, .nav-header-color .navbar-header>a{
    color: black;
    }
    .navbar-collapse .navbar-nav>li>a:hover, .nav-header-color .navbar-header>a{
    	color: red;
    }
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
                <!-- <form> -->
            	<li><a href="profile.php">Hi, 
                <?php 
                require 'login.php';
                require 'signup.php';
                 echo $_SESSION['username']; ?>
                </a></li>
        
                <li type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Log Out</li>
               
            </ul>
         
            </div>
      	</div>  <!-- container-fluid -->
    </nav>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

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
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-upload"></span> Upload
                 </button>
            </div>
            <div class="col-md-8 col-sm-8">
                <hr>
            </div>
        </div>
    </div>
   <!--  <div style="height: 2000px;">
        
    </div> -->
    <div style="position: fixed; bottom: 0;">
        <div class="container container-fix-footer">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="col-md-4 foot">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-home"></span> Home
                        </button>   
                    </div>
                    <div class="col-md-4 foot">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-upload"></span> Upload
                        </button>   
                    </div>
                    <div class="col-md-4 foot">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-globe"></span> Notifications
                        </button>   
                    </div>
                </div>
               <!--  <div class="col-md-4 col-sm-4">
                    <h1>Notifications</h1>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>

