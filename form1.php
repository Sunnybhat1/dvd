<!DOCTYPE html>
<html lang="en">
<head>
	<title>Movies</title>
	<link rel="stylesheet" href="h1.css" />
</head>

<body>

<?php

$link = new mysql_connect("localhost", "root", "root", "DVD");
 
// Check connection

if(!$link) {

 		die("connection failed:" . mysqli_connect_error());

		}


     //if($_POST('submit'))
     

     $res = mysql_query("INSERT INTO Customer (`custID`, `fName`, `lName`, `tel`, `email`, `password`) 
     VALUES (NULL, $fName,$lName, $tel, $email, NULL)");

		

if (mysqli_query($link, $res)) {
	echo "New record created successfully";

}	
	else { 
		echo "Error: " .$sql . "<br>" . mysqli_error($link);

	      }
mysqli_close ($link);

	$fName=$_POST['fName'];
	$lName=$_POST['lName'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	
$res = mysql_query("INSERT INTO Customer (`custID`, `fName`, `lName`, `tel`, `email`, `password`) 
     VALUES (NULL, $fName,$lName, $tel, $email, NULL)");

?>

<form action= "form1.php" method ="post">
	First Name:
	<input type="text" name="fName">
	
	<br>
	Last Name:
	<input type="text" name="lName">

	<br>

	Phone:
	<input type="text" name="tel">

	<br>

	Email: 
	<input type="text" name="email">

	<br>
	<br>
	<br>

	<input type ="submit" name="submit" value="Submit" >




</form>
<br>
 
</body>
</html>
