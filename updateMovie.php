<!DOCTYPE html>
<html>
<head>
<title> UPDATE Movies Database</title> 
<link rel="stylesheet" type="text/css" href="style.css"/>   
</head>
<body>
<div>
<h3> UPDATING DIRECTOR NAME in the Movies database</h3>
<h4> Programmed by Amardeep Kaur</h4> <br />
<?php 
    require_once('connectvars.php');
    
$TitleIN = trim($_POST['TitleIN']);
$DirectorIN = trim($_POST['DirectorIN']);
    
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "UPDATE Movies SET Director = '$DirectorIN' WHERE Title = '$TitleIN'";

print("The query is: <b>$query</b><br /> <br />");
    
if(mysqli_query ($dbc,$query)) {
    echo "The UPDATE query was successful.";
	print("<a href='displayMovies.php'>View Movies</a>");
} else
{
    echo "The UPDATE query FAILED!".mysqli_error();
}
mysqli_close($dbc) ;
?>
</div>
</body>
</html>
