<?php
header("Cache-Control: no-store, no-cache, must-revalidate, pre-check=0, post-check=0, max-age=0, s-maxage=0");
header("Pragma:no-cache");
header("Expires: 0");
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
        <br>
        <h2>Spring Break 2019</h2>
        <p>The purpose of this Final Project is to show off some pictures and videos from Spring Break 2019. During Spring Break, 4 of my friends and I went and explored 3 national parks. The national parks that we explored was Rocky Mountain National Park, Arches National Park, and Sand Dunes National Park.</p>
        <br>
        <p>Some example photos that you can see if you are below. Click the Login tab at the top and Login/CreateUser to view other photos/videos.</p>
        
        <p id="center"> Click on a picture to show where all pictures are from<br>Double click on a picture to change the background</p>
        
        <div class="inline">
	<div class="inline polaroid rotateLeft" ondblclick="doubleClickHTML()"  onclick="getPictures()">
		<img src="Pictures/image4.jpeg" alt="pic1" id="rotation">
        <h2 id="RockyMountainObj"></h2>
	</div>
            
        <div class="inline polaroid rotateLeft" ondblclick="doubleClickHTML()"  onclick="getPictures() ">
		<img src="Pictures/image1.jpeg" alt="pic1" id="rotation">
        <h2 id="ArchesObj"></h2>
	</div>
            
        <div class="inline polaroid rotateLeft" ondblclick="doubleClickHTML()" onclick="getPictures()">
		<img src="Pictures/image7.jpg" alt="pic1">
        <h2 id="SandDunesObj"></h2>
	</div>
            
    </div>
        
    </body>
</html>