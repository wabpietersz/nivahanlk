<?php
include("dbcon.php");
session_start();
if (isset($_SESSION['log_count'])){
    $log_count = $_SESSION['log_count'];
}





	$result = mysqli_query($conn,"SELECT * FROM modern_trends;");

    $result1 = mysqli_query($conn,"SELECT * FROM history;");

    $result2 = mysqli_query($conn,"SELECT * FROM design;");

    $result3 = mysqli_query($conn,"SELECT * FROM roof;");




?>
<!doctype html>
<html lang = "en">

<head>
	<title>2nd year group project</title>
	<meta charset = "utf-8">
	<metaname="viewport" content="width=device-width, initial-scale=1">

	<!--this is for link css file-->
    <link rel="stylesheet" type="text/css" href="css/wiki.css">
	
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

        <!--start content-->
		<div class="row" id="content">
            <!--start container-->
            <div class="container">
<!--                modal for history-->
                <div id="dataModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body" id="detail">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--create tabs-->
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">History</a></li>
                    <li><a data-toggle="tab" href="#menu1">Design</a></li>
                    <li><a data-toggle="tab" href="#menu2">Modern Trends</a></li>
                </ul>
                <!--end create tab-->
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">

                        <div class="row">
                            <?php
                            while($row = mysqli_fetch_array($result1,MYSQLI_ASSOC))
                            {
                            ?>
                            <div class="col-md-4">
                                <div class="card">

                                    <img width="300px" height="300px"  src="<?php echo $row['image'];?> "/>
<!--                                    <div class="container">-->
                                        <h4><b><?php echo $row['name'];?> </b></h4>
                                        <p style="width:300px; align:justify"><?php echo $row['location'];?></p>
                                        <p style="width:300px; align:justify"><?php echo $row['completed'];?></p>
                                        <p style="width:300px; align:justify"><?php echo $row['dimension'];?></p>


                                        <input type="button" value="more" id="<?php echo $row['id'];?>" class="view_history" data-toggle="modal" data-target="#myModal">

<!--                                    </div>-->

                                </div>
                            </div>
                                <?php
                            }
                            ?>

                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <center><h2 style="color:SlateBlue;">House Designs</h2></center>

                        <div class="row">
                            <?php
                            while($row = mysqli_fetch_array($result2,MYSQLI_ASSOC))
                            {
                            ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <img width="300px" height="300px"  src="<?php echo $row['image'];?> "/>
<!--                                    <div class="container">-->
                                        <h4><b><?php echo $row['design'];?> </b></h4>
                                        <p style="width:300px; align:justify"><?php echo $row['description'];?></p>

                                        <input type="button" name="more" value="more" id="<?php echo $row['id'];?>" class="view_design" data-toggle="modal" data-target="#myModal">

<!--                                    </div>-->
                                </div>
                            </div>
                            <?php
                            }
                            ?>

                        </div>

                        <center><h2 style="color:SlateBlue;">Roof Designs</h2></center>

                        <div class="row">
                            <?php
                            while($row = mysqli_fetch_array($result3,MYSQLI_ASSOC))
                            {
                            ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <img width="300px" height="300px"  src="<?php echo $row['image'];?> "/>
<!--                                    <div class="container">-->
                                        <h4><b><?php echo $row['design'];?> </b></h4>
                                        <p style="width:300px; align:justify"><?php echo $row['description'];?></p>
                                        <input type="button" name="more" value="more" id="<?php echo $row['id'];?>" class="view_roof" data-toggle="modal" data-target="#myModal">
<!--                                    </div>-->
                                </div>
                            </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>

                    <div id="menu2" class="tab-pane fade">

                        <div class="row">
                            <?php
                            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                            {
                                ?>
                            <div class="col-md-4">
                                <div class="card">

                                    <img width="300px" height="300px"  src="<?php echo $row['image'];?> "/>
<!--                                    <div class="container">-->
                                        <h4><b><?php echo $row['Trend'];?> </b></h4>
                                        <p style="width:300px; align:justify"><?php echo $row['Description'];?></p>
                                    <input type="button" name="more" value="more" id="<?php echo $row['id'];?>" class="view_modernTrends" data-toggle="modal" data-target="#myModal">

<!--                                    </div>-->
                                </div>
                            </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
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
<!--this is for history modal-->
    <script>
        $(document).ready(function(){
            $('.view_history').click(function(){
                var detail_id = $(this).attr("id");
                $.ajax({
                    url:"getHistory.php",
                    method:"post",
                    data:{detail_id:detail_id},
                    success:function(data){
                        $('#detail').html(data);
                        $('#dataModal').modal("show");
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('.view_design').click(function(){
                var detail_id = $(this).attr("id");
                $.ajax({
                    url:"getDesign.php",
                    method:"post",
                    data:{detail_id:detail_id},
                    success:function(data){
                        $('#detail').html(data);
                        $('#dataModal').modal("show");
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('.view_roof').click(function(){
                var detail_id = $(this).attr("id");
                $.ajax({
                    url:"getRoof.php",
                    method:"post",
                    data:{detail_id:detail_id},
                    success:function(data){
                        $('#detail').html(data);
                        $('#dataModal').modal("show");
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.view_modernTrends').click(function(){
                var detail_id = $(this).attr("id");
                $.ajax({
                    url:"getModernTrends.php",
                    method:"post",
                    data:{detail_id:detail_id},
                    success:function(data){
                        $('#detail').html(data);
                        $('#dataModal').modal("show");
                    }
                });
            });
        });
    </script>
</body>

</html>