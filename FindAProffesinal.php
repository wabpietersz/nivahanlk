<?php

require('dbcon.php');
session_start();
if (isset($_SESSION['log_count'])){
    $log_count = $_SESSION['log_count'];
}

$result = mysqli_query($conn,"SELECT * FROM architect");

?>
<!doctype html>
<html lang = "en">

<head>
    <title>2nd year group project</title>
    <meta charset = "utf-8">
    <metaname="viewport" content="width=device-width, initial-scale=1">

    <!--this is for link css file-->
    <link rel="stylesheet" type="text/css" href="css/FindAProffesionalSearch.css">

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

                <!--			      <li><a href="signup.php" id="NavFont"><i class="fa fa-user-plus " aria-hidden="true"></i> Sign Up</a></li>-->
                <!--			      <li><a href="login.php" id="NavFont"><i class="fa fa-sign-in " aria-hidden="true"></i> Login</a></li>-->
                <!--			    </ul>	-->



            </div>
        </nav>
    </div>

    <div class="row" ">

        <form action="loadProfiles.php" method="post" >
            <br/>
            <input type="text" name="country" id="country" class="form-control" placeholder="Enter district name" style="width:500px; margin:auto">
            <center><button type="submit" name="search" class="btn btn-default" id="SearchBarButton" >SEARCH</button></center>
            <br/><br/>
        </form>

    </div>
    <center>
    <div id="countryList"></div>
    </center>
    <script>
        $(document).ready(function(){
            $('#country').keyup(function(){
                var query = $(this).val();
                if(query!='')
                {
                    $.ajax({
                        url:"search.php",
                        method:"POST",
                        data:{query:query},
                        success:function(data)
                        {
                            $('#countryList').fadeIn();
                            $('#countryList').html(data);
                        }
                    });
                }
            });

            $(function(){
                $('#countryList').on('click','li',function(){
                    $('#country').val($(this).text());
                    $('#countryList').fadeOut();
                });
            });
        });
    </script>

    <div class="row" id="content">

        <div class="row">

            <div class="col-md-9">

                    <?php
                    if(isset($_POST['contact'])){
                        $result1 = mysqli_query($conn,"SELECT * FROM architect WHERE District='".$_POST['contact']."'");

                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                            ?>
                            <div class="col-md-6">
                                <div class="card">
                                    <img style="width:300px;height:300px" src="<?php echo $row['Image']; ?>" alt="John" style="width:100%">
                                    <h4><?php echo $row['firstName']." ".$row['lastName']; ?></h4>
                                    <p><?php echo $row['Practice_Name']; ?></p>
                                    <div style="margin: 24px 0;">
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <p>
                                        <button type="submit" name="contact">Contact</button>
                                    </p>
                                </div>
                            </div>
                            <?php
                        }}


                    else{

                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                    {
                    ?>
                        <div class="col-md-6">
                            <div class="card">
                                <img style="width:300px;height:300px" src="<?php echo $row['Image']; ?>" alt="John" style="width:100%">
                                <h4><?php echo $row['firstName']." ".$row['lastName']; ?></h4>
                                <p><?php echo $row['Practice_Name']; ?></p>
                                <div style="margin: 24px 0;">
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </div>
                                <p>
                                    <button type="submit" name="contact">Contact</button>
                                </p>
                            </div>
                        </div>
                        <?php
                    }}
                    ?>


            </div>

            <div class="col-md-3">
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