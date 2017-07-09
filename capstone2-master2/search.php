<?php
	function display_content1(){
		// require 'search_result.php';
		echo"
		
		<div class='col-md-8 col-sm-8' style='text-align:center;'>
		<form class='navbar-form' method='POST' action='search_result.php'>
            <input type='text' class='form-control' placeholder='Search...' name='find'>
            <input type='submit' class='form-control btn btn-info' name='search' value='Search'>
         </form></div>";
         // display_content1();
       	}
	// require 'loginhome.php';
?>

<!-- <div class='col-md-2 col-sm-2'></div> -->