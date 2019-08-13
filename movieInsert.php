<!DOCTYPE html>
<html>
<head><title></title>

<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div>
<?php 
$Title = trim( $_POST["Title"]) ; 
$ProductionCompany = trim( $_POST["ProductionCompany"]) ;
$YearReleased =  trim( $_POST["YearReleased"]) ; 
$Director = trim( $_POST["Director"]) ; 
  require_once('connectvars.php'); 
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$table_exists_query = "INSERT into Movies values ('0', '$Title', '$ProductionCompany', '$YearReleased', '$Director')"; 
print ("The query is:<br />$table_exists_query<br /><br />"); 
if (mysqli_query ($dbc, $table_exists_query)) {       
    print ("The query was successfully executed!<br />"); 
	print("<a href='displayMovies.php'>View Movies</a>");	
} 
else {       
    print ("The query could not be executed!<br />");
}  mysqli_close ($dbc);
?>
</div>
</body>
</html>