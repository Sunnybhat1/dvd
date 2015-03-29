<!DOCTYPE html>
<html lang="en">
<head>
	<title>Movies</title>
	<link rel="stylesheet" href="h1.css" />
	  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	
<div id="allcover">
	

<div id="coverMusic">
	
<?php


	mysql_connect("localhost","root","root");
	mysql_select_db("DVD");

       $res=mysql_query("select * from Movies");
	
	echo"<table border=1> 
	<tr><th><font color='blue'><font size= '4'>Moive Id</font></strong></font></th><th><font color='blue'><font size= '4'>title</font></font></th><th><font color='blue'><font size= '4'>Genre</font></font></th><th><font color='blue'><font size= '4'>Year</font></font></th><th><font color='blue'></th></tr>";
	while($row=mysql_fetch_array($res))
	{
	echo "<tr>";


	echo "<td><font color='red'><center>"; echo $row["movieId"]; echo "</td>";
	echo "<td><font color='red'><center>"; echo $row["title"]; echo "</td>";
	echo "<td><font color='#990099'><center>"; echo $row["genre"]; echo "</td>";
	echo "<td><font color='#993300'><center>"; echo $row["yearReleased"]; echo "</td>";
	

	
	echo "</tr>";
}
echo "</table>";
?>


<br>
 
</div>

</div>
</body>
</html>