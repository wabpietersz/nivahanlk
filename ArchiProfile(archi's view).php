<!doctype html>
<html lang = "en">

<head>
	<title>2nd year group project</title>
	<meta charset = "utf-8">
	<metaname="viewport" content="width=device-width, initial-scale=1">

	<!--this is for link css file-->
	<link rel="stylesheet" type="text/css" href="css/ArchiProfile.css">
	
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
			      <a class="navbar-brand" href="#" id="NavFontLogo">Nivahan.lk</a>
			    </div>
			    <ul class="nav navbar-nav" >
			      <li><a href="#" id="NavFont">Find a Proffesional</a></li>
			      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" id="NavFont">Modern trends<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Roofing Trends</a></li>
			          <li><a href="#">Door Trends</a></li>
			          <li><a href="#">Floor Trends</a></li>
			          <li><a href="#">Interior Trends</a></li>
			        </ul>
			      </li>
			      <li><a href="#" id="NavFont">Forum</a></li>
			      <li><a href="#" id="NavFont">About Us</a></li>  
			    </ul>
			    
				<ul class="nav navbar-nav navbar-right" id="NavFont">
					<li><a href="#" id="NavFont"><i class="fa fa-comment" aria-hidden="true"></i>  Messages</a></li>
					<li><a href="ArchiProfile(archi's view).html" id="NavFont"><i class="fa fa-user-circle" aria-hidden="true"></i>  Name</a></li>	
			        <li><a href="index.html" id="NavFont"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			    </ul>	

			    <form class="navbar-form navbar-right" id="NavFont">
			      <div class="form-group" id="SearchBarButton">
			        <input type="text" class="form-control" placeholder="Search">
			      </div>
			      <button type="submit" class="btn btn-default" id="SearchBarButton"><i class="fa fa-search " aria-hidden="true"></i></button>
			    </form>

			  </div>
			</nav>
		</div>

		<div class="row" id="content">
			<div class="row">
				<div class="container-fluid">
					<div class="coverImage">
						<img src="Images/cover.png">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2">
					<div class="profile">
						<img class="img-circle center-block" src="Images/profilePic.png">
					</div>

	
				</div>
				
				<div class="col-md-8">
					<div class="container">
					  <ul class="nav nav-tabs">
					    <li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
					    <li><a data-toggle="tab" href="#menu1">Projects</a></li>
					    <li><a data-toggle="tab" href="#menu2">Reviews</a></li>
					  </ul>

					  <div class="tab-content">
					    <div id="home" class="tab-pane fade in active">
					      
					    </div>
					    <div id="menu1" class="tab-pane fade">
					      
					    </div>
					    <div id="menu2" class="tab-pane fade">
					      
					    </div>
					    <div id="menu3" class="tab-pane fade">
					      
					    </div>
					  </div>
					</div>
				</div>
			

				<div class="col-md-2 col-centered">
					<button type="button" class="btn btn-default"><i class="fa fa-envelope" aria-hidden="true"></i>  Message</button>
					<h3><i class="fa fa-phone" aria-hidden="true"></i> 012 3456789</h3>
				</div>	
				
			</div>
			

		<!--google map-->
		<div class="row">
			<div id="map" style="width:auto;height:400px;background:yellow"></div>

			<script>
			function myMap() {
			  var mapCanvas = document.getElementById("map");
			  var mapOptions = {
			    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
			  };
			  var map = new google.maps.Map(mapCanvas, mapOptions);
			}
			</script>

			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB87iA2NJnNH2DvDaQkFuIq0DaZ1Ghie1I&callback=myMap"></script>
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