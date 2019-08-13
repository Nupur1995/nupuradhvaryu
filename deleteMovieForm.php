<!DOCTYPE html>
<html>
<head>
<title>HTML form for Movie Delete</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
<h2>Movie DELETE form - programmed by Amardeep Kaur</h2>
<?php
//Set the variables for the databse access:
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query ="SELECT title from Movies";
$result = mysqli_query ($dbc, $query);
$result2 = mysqli_query ($dbc, $query);
while ($Row = mysqli_fetch_array ($result)) {
	echo "<li>$Row[title]</li>";
}
echo "</ul>";
echo "<datalist id='movies'>";

echo "</datalist>";
?>
<form action="deleteMovie.php" method="post">
Movie Title to be deleted from database:<input type="text" name="TitleIN" size="20" /><br />    
<input type="submit" name="SUBMIT" value="Delete Record!" />
</form>
</div>
</body>
</html>