<!DOCTYPE html>
<html>
<head>
<title>HTML from for Movie UPDATE</title> 
<link rel="stylesheet" type="text/css" href="style.css" />   
</head>
<body>
<div>
<h3>Enter the movie Director's Name for the movie thet you wish to UPDATE in the database<br/>
programmed by Amardeep Kaur</h3>
<?php 
    require_once('connectvars.php');
    
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT title from Movies";
$result = mysqli_query ($dbc, $query);
echo "<datalist id='movies'>";
while ($row = mysqli_fetch_array ($result)) {
	 echo "<option value='$row[title]'></option>";
}
echo "</datalist>";
?>
<form action="updateMovie.php" method="post">
<fieldset>
<legend>Update Director Name</legend>
<label for="title">Movie Title (existing);</label>
<input list="movies" id="title" name="TitleIN" size="20" /><br/>

<label for="director">New Director Name:</label>
<input type="text" id="director" name="DirectorIN" size="14" /><br/>
<br/>
</fieldset>
<input type="submit" name="SUBMIT" value="submit Information!" />
</form>
</div>
</body>
</html>
