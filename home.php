<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
  <link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
  <body style="background-color:#696969">

  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Best Search Application</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


	<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">
			<div class="row" style="margin-top: 100px">
				<div class="col-md-4" id="c1">
				<a href="product.html">
  				<img src="web.jpg" class="img-rounded" alt="Web development" style="width:400px;height:200px;">
				</a>

				</div>

				<div class="col-md-4"  id="c" style="padding-left: 70px">
				<a href="product.html">
  				<img src="python.jpg" class="img-rounded" alt="Python" style="width:400px;height:200px;">
				</a>
				</div>

				<div class="col-md-4" id="c" style="padding-left: 100px">

				<a href="product.html">
  				<img src="android.jpg" class="img-rounded" alt="Android Development" style="width:400px;height:200px;">
				</a>
				</div>

			</div>
			<div class="row" style="margin-top: 100px">

				<div class="col-md-4" id="c4">
				<a href="product.html">
  				<img src="java.jpg" class="img-rounded" alt="Web development" style="width:400px;height:200px;">
				</a>
				</div>

				<div class="col-md-4" id="c" style="padding-left: 70px">
				<a href="product.html">
  				<img src="dsa.gif" class="img-rounded" alt="Data structure Algorithm" style="width:400px;height:200px;">
				</a>
				</div>

				<div class="col-md-4" id="c" style="padding-left: 100px">
				<a href="product.html">
  				<img src="machine.png" class="img-rounded" alt="Web development" style="width:400px;height:200px;">
				</a>
				</div>
			</div>
  		
	</div>
	</div>
</div>
</body>
</html>