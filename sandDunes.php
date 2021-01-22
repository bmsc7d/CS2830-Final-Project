<?php
  if(!session_start()) {
      header("Location: error.php");
      exit;
  }  
    
    $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];

    if (!$loggedIn){
        header("Location: login.php");
        exit;
    }




?>


<!DOCTYPE html>
<!-- 
    Name: Brendan Spinks
    Pawprint: bmsc7d
    Date:5/10/19
    Final Project 
-->


<html lang="en">
    <head>
    	<meta charset="utf-8">
        <title>Bmsc7dFinalProject</title>
        <link rel="stylesheet" type="text/css" href="app.css">
        <script src="Bmsc7d.js"></script> 
       
    </head>
    <body>
        
         <?php
            require_once('navbar.php');
        ?>
        <br>
        <h2> Sand Dunes </h2>
        
        <div class="inline">
	<div class="inline polaroid rotateLeft" ondblclick="doubleClickHTML()">
		<img src="Pictures/image7.jpg" alt="pic1">
        <h2>Sand Dunes</h2>
	</div>
            
	<div class="inline polaroid rotateRight" ondblclick="doubleClickHTML()">
		<img src="Pictures/image8.jpg" alt="pic2">
        <h2>Sand Dunes</h2>
	</div>
            
    
            
    <div class="inline polaroid rotateRight" ondblclick="doubleClickHTML()">
		<img src="Pictures/image9.JPG" alt="pic3">
        <h2>Zapata Falls(near Sand Dunes)</h2>
	</div>
    
    <div class="inline polaroid rotateRight" ondblclick="doubleClickHTML()">
		<img src="Pictures/image16.jpg" alt="pic4" id="rotation">
        <h2>Zapata Falls(near Sand Dunes)</h2>
	</div>
    
<!--
    <div id="polaroidSpin" class="inline polaroid rotateLeft">
		<img src="images/missouri.jpg" alt="pic4">
        <h2>Fall In Missouri</h2>
-->
<!--	</div>-->
    </div>
        
    </body>
</html>