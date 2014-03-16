<?php
session_start(); 
?>
<?php


	$dbHost = "oakland";        //Location Of Database usually its localhost 
    $dbUser = "iuptutor_data";            //Database User Name 
    $dbPass = "f8}eSK=#UGbR";            //Database Password 
    $dbDatabase = "iuptutor_data";    //Database Name 
     
    $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 
    //Connect to the databasse 
    mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
    //Selects the database 
	

	
	$color = $_SESSION['session_color'];
	$shapes =  $_SESSION['session_shapes'];
	$sizes =  $_SESSION['session_sizes'];
	$positions =  $_SESSION['session_positions'];
	$numbers =  $_SESSION['session_numbers'];
	$alphabets =  $_SESSION['session_alphabets'];
	$bodyparts =  $_SESSION['session_bodyparts'];
	$plants =  $_SESSION['session_plants'];
	$animals =  $_SESSION['asession_nimals'];
	$objects =  $_SESSION['session_objects'];
	$studentid =  $_SESSION['studentid'];
	$date = date("Y/m/d H:i:s");
	
	/*echo  '<p>' . $color . '</p>';
	echo  '<p>' . $shapes . '</p>';
	echo  '<p>' . $sizes . '</p>';
	echo  '<p>' . $positions . '</p>';
	echo  '<p>' . $numbers . '</p>';
	echo  '<p>' . $alphabets . '</p>';
	echo  '<p>' . $bodyparts . '</p>';
	echo  '<p>' . $plants . '</p>';
	echo  '<p>' . $animals . '</p>';
	echo  '<p>' . $objects . '</p>';*/
	
	if(($studentid != '0')&&($studentid != '')){ 
        mysql_query("INSERT IGNORE INTO results (color,shape,size,position,number,alphabet,bodypart,plant,animal,object,studentid,date)"
	     ." VALUES('$color','$shapes','$sizes','$positions','$numbers','$alphabets','$bodyparts','$plants','$animals','$objects','$studentid','$date') ")
		or die(mysql_error()); 
        header("Location: save-results.php?status=1"); // Modify to go to the page you would like 
        //exit; 
    }else{
		echo '<p style=" background-color: green; color: white; padding: 10px; "><a style="color: white;" href="save-results.php">Back to Previous page</a></p>';
		echo '<p style=" background-color: red; color: white; padding: 10px; ">Invalid Account, you need to login First before submitting your score. <a style="color: white;" href="login.php">Click here to login</a></p>';
	}
	
?>