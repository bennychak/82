<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>书目</title>
<link type="text/css" rel="stylesheet" media="screen" href="../../css/weishi/Sub/style.global.css" />
<style>
html,body{ _height:100%}
.demo_subtitle{ padding-top:42px; font-size:48px}
.gmod{ padding-top:42px;}

.gtable{ background:#fff; width:100%; table-layout:fixed; margin-bottom:10px;}
.gtable th,
.gtable td{ padding:10px; border:#999 1px solid;}
.gtable th{ background:#eee;}
.gtable thead th{ width:auto;}

.demo_block{ width:98px; height:98px; border-width:1px; border-style:solid; line-height:98px; text-align:center;}

.topnav .topNavSub{ display:none}
.topnav .item:hover .topNavSub{ display:block}

.D_lay{ display:none}
</style>
</head>
<body>

<table class="gtable">
	<thead>
	<tr>
		<th>id</th>
		<th>book_name</th>
		<th>book_press</th>
		<th>book_author</th>
		<th>book_gettime</th>
		<th>book_class</th>
		<th>book_presstime</th>
		<th>book_price</th>
		<th>book_count</th>
		<th>book_note</th>
	</tr>
	</thead>

	<?php
	$con = mysql_connect("localhost","root","root");
	 mysql_query('set names utf8', $con);
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("bien", $con);

	$result = mysql_query("SELECT * FROM book ORDER BY id DESC");

	while($row = mysql_fetch_array($result))
	  {
	  	echo "<tr>";
	  	echo "<td>" . $row['id'] . "</td>";
	  	echo "<td>" . $row['book_name'] . "</td>";
	  	echo "<td>" . $row['book_press'] . "</td>";
	  	echo "<td>" . $row['book_author'] . "</td>";
	  	echo "<td>" . $row['book_gettime'] . "</td>";
	  	echo "<td>" . $row['book_class'] . "</td>";
	  	echo "<td>" . $row['book_presstime'] . "</td>";
	  	echo "<td>" . $row['book_price'] . "</td>";
	  	echo "<td>" . $row['book_count'] . "</td>";
	  	echo "<td>" . $row['book_note'] . "</td>";
	  	echo "</tr>";
	  }
	mysql_close($con);
	?>

</table>

</body>
</html>