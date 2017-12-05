<?php 
	require ('dbcon.php');
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
			      <li><a href="signup.php" id="NavFont">Find Proffesional</a></li>
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
<!--			      <li><a href="login.php" id="NavFont"><i class="fa fa-sign-in " aria-hidden="true"></i> Login</a></li>-->
<!--			    </ul>	-->

			    

			  </div>
			</nav>
		</div>

		<div class="row" id="content">
			<div class="col-md-3">
			</div>
			
			<div class="col-md-6">
				<div class="container-fluid">
				  <h2>SignUp</h2>
				  <ul class="nav nav-tabs">
				    <li class="active"><a href="#NormalUser">Normal User</a></li>
				    <li><a href="#Architect">Architect</a></li>
				    <li><a href="#Resercher">Researcher</a></li>
				  </ul>


				  <div class="tab-content">
				    <div id="NormalUser" class="tab-pane fade in active">
				    	<div class="row">
				    		<!--<h2>SignUp For Normal User</h2>-->
				    	<form method="POST" action="reg.php">
							    <div class="form-group">
							      <label for="usr">First Name</label>
							      <input type="text" name="fname" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">Last Name</label>
							      <input type="text" name="lname"class="form-control">
							    </div>
                                
                                <div class="form-group">
							      <label for="usr">User Name</label>
							      <input type="text" name="uname" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">Email</label>
							      <input type="text" name="em"class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">NIC Number</label>
							      <input type="text" name="nic"class="form-control">
							    </div>
                                
							    <div class="form-group">
							      <label for="usr">Current city</label>
							      <input type="text" name="city"class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="pwd">Password</label>
							      <input type="password" name="pw"class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="pwd">Confirm Password</label>
							      <input type="password" name="cpw"class="form-control">
							    </div>
                                <?php
                                    $form_track = 1 ;
                                ?>
                                <button type="submit" class="btn btn-success">Sign Up</button>
                                <button type="reset" class="btn btn-info">Reset</button>
						    </form>
                            
						</div>  	
				    </div>
				    <div id="Architect" class="tab-pane fade">
				      <!--<h2>SignUp For Architect</h2>-->
				      	<form method="POST" action="reg1.php">
				      		<form>
							    <div class="form-group">
							      <label for="usr">First Name</label>
							      <input type="text" name="fname"class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">Last Name</label>
							      <input type="text" name="lname" class="form-control">
							    </div>

                                <div class="form-group">
							      <label for="usr">User Name</label>
							      <input type="text" name="uname" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">Email</label>
							      <input type="text" name="em" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">Architect Membership ID</label>
							      <input type="text" name="mid" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">NIC Number</label>
							      <input type="text" name="nic" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">Current city</label>
							      <input type="text" name="city" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="pwd">Password</label>
							      <input type="password" name="pw" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="pwd">Confirm Password</label>
							      <input type="password" name="cpw" class="form-control">
							    </div>
                                <?php
                                $form_track = 2 ;
                                ?>
							    <button type="submit" class="btn btn-success">Sign Up</button>
                                <button type="reset" class="btn btn-info">Reset</button>
						    </form>
				    </div>
				    <div id="Resercher" class="tab-pane fade">
				      <!--<h2>SignUp For Researcher</h2>-->
				      		<form method="POST" action="reg2.php">
				      		<form>
							    <div class="form-group">
							      <label for="usr">First Name</label>
							      <input type="text" name="fname" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">Last Name</label>
							      <input type="text" name="lname" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">User Name</label>
							      <input type="text" name="uname" class="form-control">
							    </div>							  

							    <div class="form-group">
							      <label for="usr">Email</label>
							      <input type="text" name="em" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">Research Area</label>
							      <input type="text" name="rarea" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">University ID</label>
							      <input type="text" name="uid" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">University/School/Organization</label>
							      <input type="text" name="uni" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">NIC Number</label>
							      <input type="text" name="nic" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="usr">Current city</label>
							      <input type="text" name="city" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="pwd">Password</label>
							      <input type="password" name="pw" class="form-control">
							    </div>

							    <div class="form-group">
							      <label for="pwd">Confirm Password</label>
							      <input type="password" name="cpw" class="form-control">
							    </div>
                                <?php
                                $form_track = 3 ;
                                ?>
							    <button type="submit" class="btn btn-success">Sign Up</button>
                                <button type="reset" class="btn btn-info">Reset</button>
						    </form>
				    </div>
				  </div>
				</div>

				<script>
				$(document).ready(function(){
				    $(".nav-tabs a").click(function(){
				        $(this).tab('show');
				    });
				});
				</script>
			</div>

			<div class="col-md-3">
			</div>	

		</div>
        <?php
            $errors = array();
            $form_track = 0;
            //start validation


            if($form_track == 1){
                if (empty($_POST['fname'])){
                    $errors['fname1'] = "your first name cannot be empty";
                }
                if (empty($_POST['lname'])){
                    $errors['lname1'] = "your last name cannot be empty";
                }
                if (empty($_POST['uname'])){
                    $errors['uname1'] = "your user name cannot be empty";
                }
                if (empty($_POST['em'])){
                    $errors['em1'] = "your email cannot be empty";
                }
                if (empty($_POST['nic'])){
                    $errors['nic1'] = "your nic number cannot be empty";
                }
                if (empty($_POST['city'])){
                    $errors['city1'] = "your city cannot be empty";
                }
                if (empty($_POST['pw'])){
                    $errors['pw1'] = "your password cannot be empty";
                }
                if (empty($_POST['cpw'])){
                    $errors['cpw1'] = "your confirm password cannot be empty";
                }
                echo(count($errors));
                if (count($errors) == 0){
                    header("Location: reg.php");
                }

            }elseif($form_track == 2){
                header("Location: reg1.php");

            }elseif($form_track == 3){
                header("Location: reg2.php ");

            }







        ?>

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
    				</ul

				</div>
		</div>

	</div>	
</body>

</html>