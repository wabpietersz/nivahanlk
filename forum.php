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

			      <li><a href="FindAProffesinal.php" id="NavFont">Find Proffesional</a></li>
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
			<center>
				<div class="row">
					<form class="navbar-form ">
				      <div class="form-group">
				        <input type="text" class="form-control" placeholder="Search">
				      </div>
				      <button type="submit" class="btn btn-default" >SEARCH</button>
				    </form>
				</div>
			</center>

			<div class="row">
				<div class="container">
				  <div class="panel-group">
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="#collapse1">What is Lorem Ipsum?</a>
				        </h4>
				      </div>
				      <div id="collapse1" class="panel-collapse collapse">
				        <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 2 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 3 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 4 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 5 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="container">
				  <div class="panel-group">
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="#collapse2">Where does it come from?</a>
				        </h4>
				      </div>
				      <div id="collapse2" class="panel-collapse collapse">
				        <div class="panel-body">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 2 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 3 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 4 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 5 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="container">
				  <div class="panel-group">
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="#collapse3">Where can I get some?</a>
				        </h4>
				      </div>
				      <div id="collapse3" class="panel-collapse collapse">
				        <div class="panel-body">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 2 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 3 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 4 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				        <div class="panel-body">ans 5 <a><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a> <a><i class="fa fa-trash pull-right" aria-hidden="true"></i></a></div>
				      </div>
				    </div>
				  </div>
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