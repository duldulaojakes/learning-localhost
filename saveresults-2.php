<?php
session_start(); 
?>
<?php 

	
if(isset($_POST['submit'])){ 

	$color = $_POST['color']; 
    $shapes = $_POST['shapes']; 
	$sizes = $_POST['sizes']; 
    $positions = $_POST['positions']; 
	$numbers = $_POST['numbers']; 
    $alphabets = $_POST['alphabets']; 
	$bodyparts = $_POST['bodyparts']; 
    $plants = $_POST['plants']; 
	$animals = $_POST['animals']; 
    $objects = $_POST['objects']; 
	
	$_SESSION['session_color'] = $color;
	$_SESSION['session_shapes'] = $shapes;
	$_SESSION['session_sizes'] = $sizes;
	$_SESSION['session_positions'] = $positions;
	$_SESSION['session_numbers'] = $numbers;
	$_SESSION['session_alphabets'] = $alphabets;
	$_SESSION['session_bodyparts'] = $bodyparts;
	$_SESSION['session_plants'] = $plants;
	$_SESSION['asession_nimals'] = $animals;
	$_SESSION['session_objects'] = $objects;
	
  	header("Location: save-results-2.php?s=1"); 
        exit; 	

}else{    //If the form button wasn't submitted go to the index page, or login page 
		header("Location: view-results-2.php?s=1"); 
        exit; 
} 
?>