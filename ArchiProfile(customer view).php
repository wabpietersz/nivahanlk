<!doctype html>
<html lang = "en">

<head>
	<title>2nd year group project</title>
	<meta charset = "utf-8">
	<metaname="viewport" content="width=device-width, initial-scale=1">

	<!--this is for link css file-->
	<link rel="stylesheet" type="text/css" href="css/ArchiProfile(customer view).css">
	
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
			      <li><a href="FindAProffesinal.html" id="NavFont">Find Proffesional</a></li>
			      <li><a href="#" id="NavFont">Forum</a></li>
			      <li><a href="Wiki.html" id="NavFont">Wiki</a></li>
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
				<div class="col-md-3">
					<div class="row">
						<div class="profile">
							<img class="img-circle center-block" src="Images/profilePic.png">
						</div>

					</div>	
					

					<div class="row">
						<center>
						<br>
						<br>	
							<a><i id="userSocial" class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
							<a><i id="userSocial" class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
							<a><i id="userSocial" class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
							<a><i id="userSocial" class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
							<a><i id="userSocial" class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
						</center>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="row" id="userName">
						<h3>User Name</h3>
						<br>
						<br>
						<br>

					</div>

					<div class="container-fluid">
					  <ul class="nav nav-tabs">
					    <li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
					    <li><a data-toggle="tab" href="#menu1">Projects</a></li>
					    <li><a data-toggle="tab" href="#menu2">Reviews</a></li>
					  </ul>

					  <div class="tab-content">
					    <div id="home" class="tab-pane fade in active">
					    	<p>Your home is distinctly yours. Its design style, architectural elements and floor plan speak volumes about who you are, your dreams and what is important to you.<br>

							At Weber Design Group, Inc., we’re in the business of designing your dream and working with you to bring it to fruition. We've been doing exactly that for luxury home clients throughout Southwest Florida, the United States and around the world for over 25 years.</p>
							<div class="row">
								<h3>My Stories</h3>

								<img src="Images/11.jpg" height="200px" width="300px">

								<h4>Pro Spotlight: How Foresight Can Help You Envision Your New Home</h4>
								<p>Building with the future in mind can increase your home’s value, a...</p>
								<a href="#">more</a>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="card">
									  <img src="Images/10.jpg" style="width:100%" height="250px">
									  <div class="container">
									    <h4><b>America</b></h4> 
									    <p>Interior Designer</p> 
									    <a href="#">more</a>
									  </div>
									</div>
								</div>	

								<div class="col-md-6">
									<div class="card">
									  <img src="Images/12.jpg" style="width:100%" height="250px">
									  <div class="container">
									    <h4><b>brazil</b></h4> 
									    <p>house design</p> 
									    <a href="#">more</a>
									  </div>
									</div>	
								</div>
					      	</div>
					      	
					      	<div class="row">
								<div class="col-md-6">
									<div class="card">
									  <img src="Images/13.jpg" style="width:100%" height="250px">
									  <div class="container">
									    <h4><b>America</b></h4> 
									    <p>Interior Designer</p> 
									    <a href="#">more</a>
									  </div>
									</div>
								</div>	

								<div class="col-md-6">
									<div class="card">
									  <img src="Images/16.jpg" style="width:100%" height="250px">
									  <div class="container">
									    <h4><b>brazil</b></h4> 
									    <p>house design</p> 
									    <a href="#">more</a>
									  </div>
									</div>	
								</div>
					      	</div>

					    </div>
					    <div id="menu1" class="tab-pane fade">
					      
					    </div>
					    <div id="menu2" class="tab-pane fade">
					      
					    </div>
					  </div>
					</div>
							
				</div>
			

				<div class="col-md-3">
					<button type="button" class="btn btn-default"><i class="fa fa-envelope" aria-hidden="true"></i>  Message</button>
					<h3><i class="fa fa-phone" aria-hidden="true"></i> 012 3456789</h3>

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

					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCN02p7ickvajWBJ86FzA3yXZwtDwM61A8&callback=myMap"></script>
				</div>	
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