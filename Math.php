<?php
session_start(); 
?>

<HTML>
<HEAD>
<TITLE>Math</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<style title="cssmenu">
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
<div align="center"><font color="#FF00FF" ><span id="spanDate"></span></font></div>
<script type="text/javascript">
           var months = ['January','February','March','April','May','June','July',
'August','September','October','November','December'];       
var tomorrow = new Date();
tomorrow.setTime(tomorrow.getTime() + (1000*3600*24));       
document.getElementById("spanDate").innerHTML = months[tomorrow.getMonth()] + " " + tomorrow.getDate()+ ", " + tomorrow.getFullYear();
              </script>
<!-- ImageReady Slices (Math.psd) -->
<TABLE WIDTH=1000 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD COLSPAN=5>
			<IMG SRC="images/head.jpg" WIDTH=1000 HEIGHT=178 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=5>
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
    <li class='last'><a href='scorecards.php'><span>Student Progress</span></a></li>
	    <li class='last'><a href='update-user.php?s=update'><span>Accounts</span></a></li>		<?php 					if(isset($_SESSION['logged'])){				if($_SESSION['logged']==TRUE){					echo "<li class='last'><a href='logout.php'><span>Logout</span></a></li>";				}else{					echo "<li class='last'><a href='login.php'><span>Login</span></a></li>";				}			}else{				if($_SESSION['logged']==TRUE){					echo "<li class='last'><a href='logout.php'><span>Logout</span></a></li>";				}else{					echo "<li class='last'><a href='login.php'><span>Login</span></a></li>";				}			}		?>
</ul>
</div>
			<IMG SRC="images/Math_02.jpg" WIDTH=1000 HEIGHT=18 ALT=""></TD>
	</TR>
	<TR>
		<TD ROWSPAN=6>
			<IMG SRC="images/Math_03.jpg" WIDTH=784 HEIGHT=804 ALT=""></TD>
		<TD COLSPAN=4>
			<a href="colors.php"><IMG SRC="images/Math_04.jpg" ALT="" WIDTH=216 HEIGHT=63 border="0"></a></TD>
	</TR>
	<TR>
		<TD>
			<a href="sizes.php"><IMG SRC="images/Math_05.jpg" ALT="" WIDTH=134 HEIGHT=44 border="0"></a></TD>
		<TD COLSPAN=3>
			<IMG SRC="images/Math_06.jpg" WIDTH=82 HEIGHT=44 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=2>
			<a href="position.php"><IMG SRC="images/Math_07.jpg" ALT="" WIDTH=156 HEIGHT=33 border="0"></a></TD>
		<TD COLSPAN=2>
			<IMG SRC="images/Math_08.jpg" WIDTH=60 HEIGHT=33 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=3>
			<a href="sets.php"><IMG SRC="images/Math_09.jpg" ALT="" WIDTH=168 HEIGHT=48 border="0"></a></TD>
		<TD ROWSPAN=3>
			<IMG SRC="images/Math_10.jpg" WIDTH=48 HEIGHT=664 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=3>
			<a href="numerals.php"><IMG SRC="images/Math_11.jpg" ALT="" WIDTH=168 HEIGHT=45 border="0"></a></TD>
	</TR>
	<TR>
		<TD COLSPAN=3>
			<IMG SRC="images/Math_12.jpg" WIDTH=168 HEIGHT=571 ALT=""></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=784 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=134 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=22 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=12 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=48 HEIGHT=1 ALT=""></TD>
	</TR>
</TABLE>
<!-- End ImageReady Slices -->
</BODY></center>
</HTML>