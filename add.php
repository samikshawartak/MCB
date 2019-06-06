<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
		<nav class="navbar">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">InternTheory</a>
	    </div>
	 </div>
	</nav><br><br><br><br><br>
	<?php
$mach = "localhost";
$name = "root";
$pass = "";

$conn = mysqli_connect($mach,$name,$pass,"mcb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (name, email, phone, query)
VALUES ('$_POST[nam]', '$_POST[email]', '$_POST[phone]','$_POST[query]')";

if ($conn->query($sql) === TRUE) {
    echo "Query submitted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?><br><br>
<a href="index.php">Return to home page</a>
</body>
</html>