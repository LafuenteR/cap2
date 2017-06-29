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
    	background: linear-gradient(to bottom, #0033cc 0%, #66ccff 100%);
    	border: none;
    	border-color: #fcf8e3;
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
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
    	<div class="container-fluid nav-header-color">
            <div class="navbar-header">
            	<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span> 
      			</button> -->
              <a class="navbar-brand" href="index.php">PhotoSharing</a>
            </div>
         <!--    <div class="collapse navbar-collapse dropdown-content" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="about.php">Photo Sharing</a></li>
                <li><a href="product.php" id="container-product">Products</a></li>
            </ul>
            </div> -->
      	</div>  <!-- container-fluid -->
    </nav>
    <div class="container">
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="col-md-8">
	   
	    		</div>
	    		<div class="col-md-4">
	    			<div id="sign-up-div" class="sign-log-border container-fluid">
		    			<h1>PhotoSharing</h1>
		    			<h3>Sign up to see and download photos legally</h3>
		    			<hr>
		    			<form id="sign-up" method="POST" action="signup.php">
		    				<input class="form-control" type="text" name="fullname" placeholder="Full Name" required><br>
		    				<input class="form-control" type="text" name="username" placeholder="Username" required><br>
		    				<!-- <input class="form-group" type="email" name="email" placeholder="Email" required><br> -->
		    				<input class="form-control" type="password" name="password" placeholder="Password"><br>
		    				<input class="form-control" type="password" name="confirm-password" placeholder="Confirm Password"><br>
		    				<input class="form-control btn btn-info" type="submit" name="signup" value="Sign Up"><br>
		    				<h5>By signing up, you agree to our Terms & Privacy Policy.</h5>
		    			</form>
	    			</div>
	    			<div id="log-in-h5" class="sign-log-border container-fluid">
	    			<!-- <form> -->
	    				<h5>Already have an account? <a id="log-in-a" href="#">Log In</a></h5>
	    			<!-- </form> -->
	    			</div>
	    			<div id="log-in-div" class="sign-log-border container-fluid">
		    			<h1>PhotoSharing</h1>
		    			<hr>
		    			<form id="log-in" method="POST" action="login.php">
		    				<input class="form-control" type="text" name="username" placeholder="Username" required><br>
		    				<input class="form-control" type="password" name="password" placeholder="Password"><br>
		    				<input class="form-control btn btn-info" type="submit" name="login" value="Log In"><br><br>
		    			</form>
	    			</div>
	    			<div id="sign-up-h5" class="sign-log-border container-fluid">
	    			<!-- <form > -->
	    				<h5>Don't have an account? <a id="sign-up-a" href="#">Sign Up</a></h5>
	    			<!-- </form> -->
	    			</div>
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

