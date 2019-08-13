<!DOCTYPE html>
<html>
<head>
<title>Create MOVIES Table></title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div>
<?php
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$table_exists_query = "SELECT * FROM Movies";
if (mysqli_query ($dbc, $table_exists_query)) 
{
echo "The table with name Movie already exits.<br/>Go to <a href='movieForm.php'>Movie Insert</a>to add movies";
}else
{

$query = "CREATE TABLE IF NOT EXISTS Movies (id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, Title TEXT, ProductionCompany TEXT, YearReleased TEXT, Director TEXT)";

if(mysqli_query($dbc, $query))
	
	{
		echo "The query was successfully executed! You created the Movies table<br/>Go to <a href='movieForm.php'>Movie Insert</a>to add movies";
	}else
	{
		 echo "The query could not be executed! Error: " . mysqli_error($dbc);
}}
 
mysqli_close($dbc);
?>

</div>
</body>
</html>