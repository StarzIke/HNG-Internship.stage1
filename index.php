<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Time Checker</title>
    
	<link rel="stylesheet" type="text/css" href="style.css">
	
    </head>
    <body>

     <div class="wrapper">
     	

     	<div class ="sidebutton">
            <h1 class="logo"><font size ="40px" face="Rockwell">Simple Time</font></h1>
     		<a href=""><button class ="side1">Login</button></a>
     		<a href=""><button class ="side1">Sign Up</button></a>
     	</div>

     	<div class="date_time">
     		<?php
            echo "<div class='d'>";
     		echo "date: " .date("Y-m-d") . "<br> <p>";

     		echo "<p> time: " .date("h:i:s a");
            echo "</div>";


     		?>
     	</div>
    
        <footer>
            <p>Simple Time, Copyright &copy; 2018
            </p>
        </footer>
    </div>
    
    </body>
</html>
