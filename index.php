<?php
session_start();
if (isset($_SESSION['log_count'])){
	$log_count = $_SESSION['log_count'];
}
 ?>
<!doctype html>
<html lang = "en">

<head>
	<title>2nd year group project</title>
	<meta charset = "utf-8">
	<metaname ="viewport" content="width=device-width, initial-scale=1">

	<!--this is for link css file-->
	<link rel="stylesheet" type="text/css" href="css/index.css">

	<!--//this is for link icons for site-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!--//this is for link bootstrap to site-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<?php
	if (isset($_SESSION['log_count'])){
		if($log_count == 1){
			echo"
			<script type='text/javascript'>
    		$(window).on('load',function(){
        		$('#myModal').modal('show');
		    });
			</script>";
		}
	}
	?>
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

			      <li><a href=<?php if (isset($_SESSION['uname'])){echo 'FindAProffesinal.php';}else{echo 'signup.php';}?> id="NavFont">Find Proffesional</a></li>
			      <li><a href="forum.php" id="NavFont">Forum</a></li>
			      <li><a href="Wiki.php" id="NavFont">Wiki</a></li>
			      <li><a href="#" id="NavFont">About Us</a></li>
			    </ul>

				<form class="navbar-form navbar-right" id="NavFont">
			      <div class="form-group" id="SearchBarButton">
			        <input type="text" class="form-control" placeholder="Search">
			      </div>
			      <button type="submit" class="btn btn-default" id="SearchBarButton"><i class="fa fa-search " aria-hidden="true"></i></button>
			    </form>

				<ul class="nav navbar-nav navbar-right" id="NavFont">
				<?php
					if (isset($_SESSION['uname'])){
				?>
						<li><a href="<?php echo('ArchiProfile(archi view).php');?>" id="NavFont"><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo($_SESSION['uname']) ?> </a></li>
						<li><a href="logout.php" id="NavFont"><i class="fa fa-sign-in " aria-hidden="true"></i> LogOut</a></li>
				<?php
					}else{
				?>
			      <li><a href="signup.php" id="NavFont"><i class="fa fa-user-plus " aria-hidden="true"></i> Sign Up</a></li>
			      <li><a href="login.php" id="NavFont"><i class="fa fa-sign-in " aria-hidden="true"></i> Login</a></li>
			    </ul>
			    <?php
			    }
			     ?>

			  </div>
            </nav>
		</div>

		<div class="row">
			<div class = "col-md-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active" >
							<img class="img-rounded" id="ContentImage" src="images/location-villa-au-cap-afrique-du-sud.jpg" alt="Chania">
							<div class="carousel-caption">

							</div>
						</div>

						<div class="item">
							<img class="img-rounded" id="ContentImage" src="images/Armada-Pic-2.jpg" alt="Chania">
							<div class="carousel-caption">

							</div>
						</div>

						<div class="item">
							<img class="img-rounded" id="ContentImage" src="images/10.jpg" alt="Flower">
							<div class="carousel-caption">

							</div>
						</div>

						<div class="item">
							<img class="img-rounded" id="ContentImage" src="images/11.jpg" alt="Chania">
							<div class="carousel-caption">

							</div>
						</div>

						<div class="item">
							<img class="img-rounded" id="ContentImage" src="images/12.jpg" alt="Chania">
							<div class="carousel-caption">

							</div>
						</div>
					</div>


						<!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>

		<div class="row" id="NewsFeed">
			<div>
			<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Modal Header</h4>
				      </div>
				      <div class="modal-body">
				        <p>Some text in the modal.</p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-success">Submit</button>
				      </div>
				    </div>

				  </div>
				</div>
			</div>
			<div class="col-md-12">
				<h1 id ="NewsFeedHeading">Latest Updates</h1>

				<div class = "col-md-4" id="NewsFeedImages">
					<img src = "images/buddhist-architecture.jpg" class="img-rounded center-block" alt="Cinque Terre" width="304" height="236">
					<center>
					<h3>Historical Architectural designs</h3>
					<h5>History</h5>
					</center>
					<hr/>
					<p>You can view the history of Architectural Designs and the eras those designs were used. From here you can get a clear idea about the evolution of Architecture.</p>
					<a href="#">more..</a>
				</div>
				<div class = "col-md-4" id="NewsFeedImages">
					<img  src = "images/5.jpg" class="img-circle center-block" alt="Cinque Terre" width="304" height="236">
					<center>
					<h3>Architects</h3>
	            	<h5>PROFILE</h5>
	            	</center>
	            	<hr/>
	            	<p>You can view the  profiles of Architects who are spread all over Sri Lanka. All Architects are registered under Sri Lanka Institute of Architects (SLIA)</p>
	            	<a href="#">more..</a>
				</div>
				<div class = "col-md-4" id="NewsFeedImages">
					<img  src = "images/6.jpg" class="img-rounded center-block" alt="Cinque Terre" width="304" height="236">
					<center>
					<h3>Latest house designs</h3>
					<h5>Modern Trends</h5>
					</center>
					<hr/>
					<p>You can get all the information you require about Architecture with all the modern trends and the latest house designs. These will help you to build your dream house according to the modern trends.</p>
					<a href="#">more..</a>
				</div>

			</div>
		</div>

		<div class="row" id="Footer">
				<div class = "col-md-3 col-xs-6">
				<center>
					<h2>Latest designs</h2>
					<ul>
    				<li>Spring</li>
    				<li>Summer</li>
   					<li>Autumn</li>
    				<li>Winter</li>
    				</ul>
    			</center>

				</div>

				<div class = "col-md-3 col-xs-6">
				<center>
					<h2>Profiles</h2>
					<ul>
    				<li>Augest 2010</li>
    				</ul>
    			</center>

				</div>

				<div class = "col-md-3 col-xs-6">
				<center>
					<h2>House Categories</h2>
					<ul>
    				<li>Spring</li>
    				<li>Summer</li>
   					<li>Autumn</li>
    				<li>Winter</li>
    				<li>design</li>
    				</ul>
    			</center>

				</div>

				<div class = "col-md-3 col-xs-6">
				<center>
					<h2>Contact US</h2>
					<ul>
    				<li>Mobile</li>
    				<li>E-Mail</li>
   					<li>Office</li>
    				</ul>
    			</center>
				</div>
		</div>

	</div>
</body>

</html>
