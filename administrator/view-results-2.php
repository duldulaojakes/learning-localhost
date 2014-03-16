<!DOCTYPE html>
<html lang="en">
<head>
<title>Results</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
 $(function() {
		/* For zebra striping */
        $("table tr:nth-child(odd)").addClass("odd-row");
		/* For cell text alignment */
		$("table td:first-child, table th:first-child").addClass("first");
		/* For removing the last border */
		$("table td:last-child, table th:last-child").addClass("last");
});
</script>

<style type="text/css">

	html, body, div, span, object, iframe,
	h1, h2, h3, h4, h5, h6, p, blockquote, pre,
	abbr, address, cite, code,
	del, dfn, em, img, ins, kbd, q, samp,
	small, strong, sub, sup, var,
	b, i,
	dl, dt, dd, ol, ul, li,
	fieldset, form, label, legend,
	table, caption, tbody, tfoot, thead, tr, th, td {
		margin:0;
		padding:0;
		border:0;
		outline:0;
		font-size:100%;
		vertical-align:baseline;
		background:transparent;
	}
	
	body {
		margin:0;
		padding:0;
		font:12px/15px "Helvetica Neue",Arial, Helvetica, sans-serif;
		color: #555;
		background:#f5f5f5 url(bg.jpg);
		
	}
	
	a {color:#666;}
	
	#content {auto 0;}
	
	/*
	Pretty Table Styling
	CSS Tricks also has a nice writeup: http://css-tricks.com/feature-table-design/
	*/
	
	table {
		overflow:hidden;
		border:1px solid #d3d3d3;
		background:#fefefe;
		width:90%;
		margin:5% auto 0;
		-moz-border-radius:5px; /* FF1+ */
		-webkit-border-radius:5px; /* Saf3-4 */
		border-radius:5px;
		-moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
	}
	
	th, td {padding:18px 28px 18px; text-align:center; }
	
	th {padding-top:22px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
	
	td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
	
	tr.odd-row td {background:#f6f6f6;}
	
	td.first, th.first {text-align:left}
	
	td.last {border-right:none;}
	
	/*
	Background gradients are completely unnecessary but a neat effect.
	*/
	
	td {
		background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
	}
	
	tr.odd-row td {
		background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
	}
	
	th {
		background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
		background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
	}
	
	/*
	I know this is annoying, but we need additional styling so webkit will recognize rounded corners on background elements.
	Nice write up of this issue: http://www.onenaught.com/posts/266/css-inner-elements-breaking-border-radius
	
	And, since we've applied the background colors to td/th element because of IE, Gecko browsers also need it.
	*/
	
	tr:first-child th.first {
		-moz-border-radius-topleft:5px;
		-webkit-border-top-left-radius:5px; /* Saf3-4 */
	}
	
	tr:first-child th.last {
		-moz-border-radius-topright:5px;
		-webkit-border-top-right-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.first {
		-moz-border-radius-bottomleft:5px;
		-webkit-border-bottom-left-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.last {
		-moz-border-radius-bottomright:5px;
		-webkit-border-bottom-right-radius:5px; /* Saf3-4 */
	}

</style>

</head>

<?php

if(isset($_GET['studentid'])){

$studid = $_GET['studentid'];

$dbhost = 'oakland';
			$dbuser = 'iuptutor_data';
			$dbpass = 'f8}eSK=#UGbR';
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
			if(! $conn ) {
			  die('Could not connect: ' . mysql_error());
			}
			$sql = "SELECT * FROM results where studentid=$studid ORDER BY resultid DESC";

			mysql_select_db('iuptutor_data');
			$retval = mysql_query( $sql, $conn );
			if(! $retval ){
			  die('Could not get data: ' . mysql_error());
			}
			
		echo '<p style=" background-color: rgb(128, 72, 0); color: white; padding: 10px; "><a href="index.php" style="color: white; ">Back To Previous Page</a></p>';
		
		if(isset($_GET['status'])){
			echo '<p style="background-color: rgb(199, 24, 0); color: white;font-size: 15px;padding: 10px; font-weight: bold;"><span>Are you sure you want to delete this Item?</span><span><a style="color: white;" href="validate-yes-1.php?id='.$_GET['id'].'&studentid='.$studid.'"> &gt;&gt;&gt;&gt;&gt;YES </a> | <a style="color: white;" href="validate-no-1.php?id='.$studid.'">&gt;&gt;&gt;&gt;&gt;&gt;NO</a></span></p>';
		}
	echo '<body><div align="center" id="content">';
	
	echo '<form id="vrmainfrm" action="saveresults-2.php" name="vrmainfrm" method="POST"><div align="center"><table cellspacing="0" style="margin: 0%;" style="font-family: arial; font-size: 15px;" border=1>';		
		echo '<tr><th>Date</th><th>Colors</th><th>Shapes</th><th>Sizes</th><th>Positions</th><th>Numbers</th><th>Alphabets</th><th>BodyPart</th><th>Plant</th><th>Animal</th><th>Object</th><th>Delete</th></tr>';
		
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
				echo '<tr>';
				echo '<td style="text-align: center;color: green;font-weight: bold;">'.$row['date'].'</td>';
				echo '<td style="text-align: center;"><span style="color: red; font-weight: bold;">'.$row['color'].'</span> / <span style="color: green; font-weight: bold;"> 2 </span> </td>';
				echo '<td style="text-align: center;"><span style="color: red; font-weight: bold;">'.$row['shape'].'</span> / <span style="color: green; font-weight: bold;"> 2 </span> </td>';
				echo '<td style="text-align: center;"><span style="color: red; font-weight: bold;">'.$row['size'].'</span> / <span style="color: green; font-weight: bold;"> 2 </span> </td>';
				echo '<td style="text-align: center;"><span style="color: red; font-weight: bold;">'.$row['position'].'</span> / <span style="color: green; font-weight: bold;"> 4 </span></td>';
				echo '<td style="text-align: center;"><span style="color: red; font-weight: bold;">'.$row['number'].'</span> / <span style="color: green; font-weight: bold;"> 5 </span></td>';
				echo '<td style="text-align: center;"><span style="color: red; font-weight: bold;">'.$row['alphabet'].'</span> / <span style="color: green; font-weight: bold;"> 26 </span> </td>';
				echo '<td style="text-align: center;"><span style="color: red; font-weight: bold;">'.$row['bodypart'].'</span> / <span style="color: green; font-weight: bold;"> 5 </span> </td>';
				echo '<td style="text-align: center;"><span style="color: red; font-weight: bold;">'.$row['plant'].'</span> / <span style="color: green; font-weight: bold;"> 5 </span> </td>';
				echo '<td style="text-align: center;"><span style="color: red; font-weight: bold;">'.$row['animal'].'</span> / <span style="color: green; font-weight: bold;"> 3 </span> </td>';
				echo '<td style="text-align: center;"><span style="color: red; font-weight: bold;">'.$row['object'].'</span> / <span style="color: green; font-weight: bold;"> 3 </span> </td>';
				echo '<td style="text-align: center;background-color: rgb(255, 204, 0);"><a href="admindeleteresult.php?id='.$row['resultid'].'&studentid='.$studid.'"><img src="../images/delete.png"></a></td>';
				echo '</tr>';
			} 	
	echo '</table>';
	echo '</div></form>';
	
	echo '</div></body>';
	
	mysql_close($conn);
	
	}
	
?>

</html>