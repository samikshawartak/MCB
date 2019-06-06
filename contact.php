<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <style type="text/css">
  	body{
  		background-image: linear-gradient(to bottom right, #0066CC, #99CCFF);
  	}
  </style>
</head>
<body>
	<nav class="navbar">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">InternTheory</a>
	    </div>
	 </div>
	</nav>
	<h1>Contact Us</h1>
	<form class="form-horizontal" action="add.php" method="post">
		<div class="container">
			<div class="row">
			<div class="col-lg-2"></div>
    	<div class="col-lg-4"> Name:</div>
    	<div class="col-lg-4"> <input type="text" name="nam"></div></div>
    	<br><br>
    	<div class="row">
			<div class="col-lg-2"></div>
    	<div class="col-lg-4"> Email:</div>
    	<div class="col-lg-4"> <input type="email" name="email"></div></div>
    	<br><br>
    	<div class="row">
			<div class="col-lg-2"></div>
    	<div class="col-lg-4"> Phone:</div>
    	<div class="col-lg-4"> <input type="text" name="phone"></div></div>
    	<br><br>
    	<div class="row">
			<div class="col-lg-2"></div>
    	<div class="col-lg-4"> Query:</div>
    	<div class="col-lg-4"> <input type="text" name="query"></div></div>
    	<br><br>
    	<div class="row">
			<div class="col-lg-5"></div>
    	<div class="col-lg-2"> <input type="submit" name=""></div>
    	<div class="col-lg-5"> </div></div>

    	</div>
  </form>
</body>
</html>