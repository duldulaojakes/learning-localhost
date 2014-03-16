<?php

$host="oakland"; // Host name 
$username="iuptutor_data"; // Mysql username 
$password="f8}eSK=#UGbR"; // Mysql password 
$db_name="iuptutor_data"; // Database name 
$tbl_name="students"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
$id=$_GET['id'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl_name WHERE studentid='$id'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
session_start(); 
header("Location: index.php"); // Modify to go to the page you would like 
exit; 
}

// close connection 
mysql_close();

?> 

<?php

?>