<?php 
	require ('dbcon.php')
?>
<!doctype html>
<html lang = "en">

<head>
	<title>2nd year group project</title>
	<meta charset = "utf-8">
	<metaname="viewport" content="width=device-width, initial-scale=1">

	<!--this is for link css file-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	
	<!--//this is for link icons for site-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!--//this is for link bootstrap to site-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="row" id="logo">
			<div class="col-md-6" >
				<center>
					<h6 id="HeaderLogo" >NIVAHAN.LK</h6>
				</center>
			</div>


			<div class="col-md-6">
				<center>
					<!--add social media links to site-->
					<i id="SocialMediaTop1" class="fa fa-facebook fa-2x" aria-hidden="true"></i>
					<i id="SocialMediaTop2" class="fa fa-twitter fa-2x" aria-hidden="true"></i>
					<i id="SocialMediaTop3" class="fa fa-instagram fa-2x" aria-hidden="true"></i>
					<i id="SocialMediaTop4" class="fa fa-youtube fa-2x" aria-hidden="true"></i>
				</center>	
			</div>	
		</div>

		<div class="row" id="Header">
			<!--add navgation bar to site-->
			<nav class="navbar navbar-inverse" id="NavBar">
			  <div class="container-fluid" >
			    <div class="navbar-header"> 
			      <a class="navbar-brand" href="index.php" id="NavFontLogo">Nivahan.lk</a>
			    </div>
			    <ul class="nav navbar-nav" >
			      <li><a href="#" id="NavFont">Guide Me</a></li>
			      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" id="NavFont">Modern trends<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Roofing Trends</a></li>
			          <li><a href="#">Door Trends</a></li>
			          <li><a href="#">Floor Trends</a></li>
			          <li><a href="#">Interior Trends</a></li>
			        </ul>
			      </li>
			      <li><a href="#" id="NavFont">WIKI</a></li>
			      <li><a href="#" id="NavFont">About Us</a></li>  
			    </ul>
			    <form class="navbar-form navbar-right" id="NavFont">
			      <div class="form-group" id="SearchBarButton">
			        <input type="text" class="form-control" placeholder="Search">
			      </div>
			      <button type="submit" class="btn btn-default" id="SearchBarButton"><i class="fa fa-search " aria-hidden="true"></i></button>
			    </form>
			    
				<ul class="nav navbar-nav navbar-right" id="NavFont">
					<li><a href="signup.php" id="NavFont"><i class="fa fa-user-plus " aria-hidden="true"></i> Sign Up</a></li>
			    </ul>	

			    

			  </div>
			</nav>
		</div>

		<div class="row" id="content">
			<div class="col-md-3">
			</div>	

			<div class="col-md-6">
				<div class="jumbotron">
				<form method="POST" action="log.php">
					<form>
						<div class="form-group">
						    <label for="uname">User Name</label>
						    <input type="text" name="uname"class="form-control">
						</div>

						<div class="form-group">
						    <label for="pwd">Password</label>
					        <input type="password" name="pw" class="form-control">
						</div>
						<button type="submit" class="btn btn-success">Login</button>
						<button type="reset" class="btn btn-danger">Forgot my Password</button>
					</form>
				</div>	
			</div>	

			<div class="col-md-3">
			</div>	
		</div>	

		<div class="row" id="Footer">
				<div class = "col-md-3 col-xs-6">
					<h2>latest designs</h2>
					<ul>
    				<li>Spring</li>   					
    				<li>Summer</li>
   					<li>Autumn</li>
    				<li>Winter</li>
    				</ul>

				</div>

				<div class = "col-md-3 col-xs-6">
					<h2>profiles</h2>
					<ul>
    				<li>Augest 2010</li>   					
    				</ul>

				</div>

				<div class = "col-md-3 col-xs-6">
					<h2>house categories</h2>
					<ul>
    				<li>Spring</li>   					
    				<li>Summer</li>
   					<li>Autumn</li>
    				<li>Winter</li>
    				<li>design</li>
    				</ul>

				</div>

				<div class = "col-md-3 col-xs-6">
					<h2>Contact US</h2>
					<ul>
    				<li>MOBILE</li>   					
    				<li>EMAIL</li>
   					<li>OFFICE</li>
    				</ul>

				</div>
		</div>

	</div>	
</body>

</html>