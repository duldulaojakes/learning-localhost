<?php
session_start(); 
?>
<HTML>
<HEAD>
<TITLE>homewelcome</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">


<link rel="stylesheet" href="jsjqueryDatepicker/public/css/default.css" type="text/css" />
        <link type="text/css" rel="stylesheet" href="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/css/shCoreDefault.css" />
        <script type="text/javascript" src="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
        <script type="text/javascript" src="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
        <script type="text/javascript" src="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
        <script type="text/javascript" src="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
        <script type="text/javascript" src="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>
		
		<script src="adminjs/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script type="text/javascript">
            SyntaxHighlighter.defaults['toolbar'] = false;
            SyntaxHighlighter.all();
        </script>
		
<link rel="stylesheet" href="admincss/validationEngine.jquery.css" type="text/css"/>
	<script src="adminjs/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="adminjs/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<script>
	    jQuery(document).ready(function () {
	        // binds form submission and fields to the validation engine
	        jQuery("#vrmainfrm").validationEngine();
	    });

	</script>

<script type="text/javascript" src="jsjqueryDatepicker/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="jsjqueryDatepicker/configurations/public/javascript/core.js"></script>
<script>
			function IsValue_Register(){
			
				var  lastname = document.vrmainfrm.lastname.value;
				var  firstname = document.vrmainfrm.firstname.value;
				var  middlename = document.vrmainfrm.middlename.value;
				
				var  address = document.vrmainfrm.address.value;
				var  contact = document.vrmainfrm.contact.value;
				var  age = document.vrmainfrm.age.value;
				var  birth = document.vrmainfrm.birth.value;
				var studentnumber = document.vrmainfrm.studentnumber.value;
				
				var  username = document.vrmainfrm.username.value;
				var password = document.vrmainfrm.password.value;
				
				window.location = "registerdata.php?"+"lastname=" + lastname + "&firstname=" + firstname 
				+ "&middlename="+middlename+"&address="+address+"&contact="+contact+"&age="+age+"&birth="+birth+"&studentnumber="+studentnumber+"&username="+username+"&password="+password;
			}
</script>
<style title="cssmenu"> accouts
import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
@charset 'UTF-8';
/* Base Styles */
#cssmenu > ul,
#cssmenu > ul li,
#cssmenu > ul ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
#cssmenu > ul {
  position: relative;
  z-index: 597;
  float: left;
}
#cssmenu > ul li {
  float: left;
  min-height: 1px;
  line-height: 1.3em;
  vertical-align: middle;
  padding: 10px;
}
#cssmenu > ul li.hover,
#cssmenu > ul li:hover {
  z-index: 599;
  cursor: default;
}
#cssmenu > ul ul {
  visibility: hidden;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 598;
}
#cssmenu > ul ul li {
  float: none;
}
#cssmenu > ul li:hover > ul {
  visibility: visible;
}
/* Align last drop down RTL */
/* Theme Styles */
#cssmenu > ul a:link {
  text-decoration: none;
}
#cssmenu > ul a:active {
  color:#FFFF99;
}
#cssmenu li {
  padding: 0;
  color:#CCFFCC;
}
#cssmenu {
  font-family:"comic sans ms",bold;
  color:#0000FF;
  width:auto;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  background:#FF00CC;
  font-size: 20px;
  -moz-box-shadow: inset 0 2px 2px rgba(255, 255, 255, 0.3);
  -webkit-box-shadow: inset 0 2px 2px rgba(255, 255, 255, 0.3);
  box-shadow: inset 0 2px 2px rgba(255, 255, 255, 0.3);
}
#cssmenu > ul {
  padding: 0 5px;
  -moz-box-shadow: inset 0 -2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: inset 0 -2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 -2px 2px rgba(0, 0, 0, 0.3);
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  display: block;
  float: none;
  zoom: 1;
  font-size:24px;
}
#cssmenu > ul:before {
  content: '';
  display: block;
}
#cssmenu > ul:after {
  content: '';
  display: table;
  clear: both;
}
#cssmenu > ul > li {
  padding: 8px 5px;
}
#cssmenu > ul > li > a,
#cssmenu > ul > li > a:link,
#cssmenu > ul > li > a:visited {
  text-shadow: 0 -1px 1px #004881;
  color:#FFFF99;
  padding: 7px 20px;
  display: block;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
}
#cssmenu > ul > li > a:hover,
#cssmenu > ul > li:hover > a {
  background-color: #0082e7;
}
#cssmenu li li a {
  color:#0000FF;
  font-size: 18px;
 
}
#cssmenu li li a:hover {
  color:#FF00FF;
  border-color: #5c5c5c;
}
#cssmenu ul ul {
  margin: 0 10px;
  padding: 0 10px;
  float: none;
  background:#00CC00;
  border: 2px solid #1b9bff;
  border-top: none;
  right: 0;
  left: 0;
  -webkit-border-radius: 0 0 3px 3px;
  -moz-border-radius: 0 0 3px 3px;
  -ms-border-radius: 0 0 3px 3px;
  -o-border-radius: 0 0 3px 3px;
  border-radius: 0 0 3px 3px;
  -moz-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
}
#cssmenu ul > li > ul > li {
  margin: 0 10px 0 0;
  position: relative;
  padding: 0;
  float: left;
}
#cssmenu ul > li > ul > li > a {
  padding: 10px 20px 10px 10px;
  display: block;
}
#cssmenu ul > li > ul > li.has-sub > a:before {
  content: '';
  position: absolute;
  top: 18px;
  right: 6px;
  border: 5px solid transparent;
  border-top: 5px solid #8b8b8b;
}
#cssmenu ul > li > ul > li.has-sub > a:hover:before {
  border-top: 5px solid #5c5c5c;
}
#cssmenu ul ul ul {
  width: 200px;
  top: 100%;
  border: 2px solid #1b9bff;
}
#cssmenu ul ul ul li {
  float: none;
}
</style>
</HEAD>
<center><BODY background="back copy.jpg" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>

<form id="vrmainfrm" action="registerdata-2.php" name="vrmainfrm" method="POST">
<div align="center"><font color="#FF00FF" ><span id="spanDate"></span></font></div>

<!-- ImageReady Slices (homewelcome.psd) -->

<TABLE WIDTH=1000 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD COLSPAN=9>
			<IMG SRC="images/head.jpg" WIDTH=1000 HEIGHT=178 ALT=""></TD>
			
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=178 ALT=""></TD>
			
	</TR>
	<TR>
		<TD COLSPAN=9>
		<div id='cssmenu'>
			<ul>
			   <li class='active'><a href='homewelcome.php'><span>Home</span></a></li>
			   <li class='has-sub'><a href='subjects.php'><span>Subject</span></a>
				  <ul>
					 <li class='last'><a href='Math.php'><span>Math</span></a></li>
					 <li class='last'><a href='English.php'><span>English</span></a></li>
					  <li class='last'><a href='sciencehome.php'><span>Science</span></a></li>
				  </ul>
			   </li>
			   <li style="display: none;" class="has-sub"><a href='#'><span>Exercises</span></a>
				<ul>
					 <li class='last'><a href='#'><span>Math Exercises</span></a></li>
					 <li class='last'><a href='#'><span>English Exercises</span></a></li>
					  <li class='last'><a href='#'><span>Science Exercises</span></a></li>
				  </ul>
			   </li>
			   
			  <li class='last'><a href='contact-us.php'><span>Contact us</span></a></li>
				<li class='last'><a href='#'><span>Student Progress</span></a></li>
				<li class='last'><a href='update-user.php'><span>Accounts</span></a></li>
				<?php 
				
				//session_start();
				
			if(isset($_SESSION['logged'])){
				if($_SESSION['logged']==TRUE){
					echo "<li class='last'><a href='logout.php'><span>Logout</span></a></li>";
				}else{
					echo "<li class='last'><a href='login.php'><span>Login</span></a></li>";
				}
			}else{
				if($_SESSION['logged']==TRUE){
					echo "<li class='last'><a href='logout.php'><span>Logout</span></a></li>";
				}else{
					echo "<li class='last'><a href='login.php'><span>Login</span></a></li>";
				}
			}
		?>
			</ul>
         </div>
</TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=50 ALT=""></TD>
	</TR>
	

<tr>
<td>
<table border=1 style="padding-left: 30px; padding-top: 85px;">
<tr>
<td style="background-color: green; color: white;"></td><td style="background-color: green; color: white;"><h2>
<?php
$s = (isset($_GET['s']));
if($s == '1'){
echo "You are successfully registered. Thank you! Click <a href='login.php'>here<a> to Login";
}else if($s == '2'){
echo "StudentNumber is already taken. please try other StudentNumber";
}
else if($s == '3'){
echo "Username is already taken. please try again other username";
}else{
echo "View Score Cards";
}
?>
</h2></td>
</tr>
<tr>
	<td style="background-color: green; color: white;">Score for Colors: </td><td><a href="score-for-colors.php" target="_blank">Click here to view your score</a></td>
</tr>
<tr>
	<td style="background-color: green; color: white;">Score for Shapes: </td><td><a href="score-for-shapes.php" target="_blank">Click here to view your score</a></td>
</tr>
<tr>
	<td style="background-color: green; color: white;">Score for Sizes: </td><td><a href="score-for-sizes.php" target="_blank">Click here to view your score</a></td>
</tr>
<tr>
	<td style="background-color: green; color: white;">Score for Positions: </td><td><a href="score-for-positions.php" target="_blank">Click here to view your score</a></td>
</tr>
<tr>
	<td style="background-color: green; color: white;">Score for Numbers(Numerals): </td><td><a href="score-for-numbers.php" target="_blank">Click here to view your score</a></td>
</tr>
<tr>
	<td style="background-color: green; color: white;">Score for Alphabets: </td><td><a href="score-for-letters.php" target="_blank">Click here to view your score</a></td>
</tr>
<tr>
	<td style="background-color: green; color: white;">Score for Body Parts: </td><td><a href="score-for-body-parts.php" target="_blank">Click here to view your score</a></td>
</tr>
<tr>
	<td style="background-color: green; color: white;">Score for Plants: </td><td><a href="score-for-plants.php" target="_blank">Click here to view your score</a></td>
</tr>
<tr>
	<td style="background-color: green; color: white;">Score for Animals: </td><td><a href="score-for-animals.php" target="_blank">Click here to view your score</a></td>
</tr>
<tr>
	<td style="background-color: green; color: white;">Score for Objects: </td><td><a href="score-for-things-around-us.php" target="_blank">Click here to view your score</a></td>
</tr>
<tr>
	<td></td><td><a href="clear-results.php">Clear Results and Start new Exercise/s</a></td>
</tr>
<tr>
	<td></td><td><a href="save-results.php" target="_blank">Save/View Results of All exercise</a></td>
</tr>
</table>
</td>
</tr>



</TABLE>
<!-- End ImageReady Slices -->
</form></BODY></center>
</HTML>