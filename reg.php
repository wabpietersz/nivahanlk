<?php
	require ('dbcon.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$em = $_POST['em'];
$nic = $_POST['nic'];
$city = $_POST['city'];
$pw = $_POST['pw'];
$cpw = $_POST['cpw'];
$utype = 1;


//if ( isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['uname']) and isset($_POST['em']) and isset($_POST['nic']) and isset($_POST['city']) and isset($_POST['pw']) and isset($_POST['cpw'])) {
    if ($pw == $cpw) {
        $pw = md5($pw);

        $query = "SELECT * FROM normaluser WHERE userName = '$uname'";

        $res = mysqli_query($conn, $query);


        if (mysqli_num_rows($res) > 0) {
            echo "<script type='text/javascript'>alert('user already exists')</script>";
            //header("location: signup.php");
        } else {

            $sql1 = "INSERT INTO normaluser (firstName,lastName,userName,email,nic,city) VALUES ('$fname','$lname','$uname','$em','$nic','$city')";

            $res1 = mysqli_query($conn, $sql1);

            $sql2 = "INSERT INTO user (userName,password,userType) VALUES ('$uname','$pw','$utype')";

            $res2 = mysqli_query($conn, $sql2);

//            echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
            header("location: login.php");
        }

//    } else {
//        echo "<script type='text/javascript'>alert('error! wrong password confirmation!')</script>";
    }
//}else{
//    echo "<script type='text/javascript'>alert('error! submit again!')</script>";
//}




?>