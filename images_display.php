<!DOCTYPE html>
<html lang="en">
<head>
	<title>Movies</title>
	<link rel="stylesheet" href="h1.css" />
</head>

<body>

<?php

mysql_connect("localhost", "root" , "root");
mysql_select_db("DVD");
$res=mysql_query("select * FROM display_images");


echo "<table>";
while($row=mysql_fetch_array($res))

{

echo "<tr>";

echo "<td>"; ?> <img src="<?php echo $row["action image];" ?>" height="100" width="300"> <?php echo "</td>";
echo "<td>"; echo $row["ameican sniper"] echo "</td>";


echo "</tr>";


}
echo "</table>";

?>
</body>
</html>

