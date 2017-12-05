<?php
	require ('dbcon.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$em = $_POST['em'];
$rarea = $_POST['rarea'];
$uid = $_POST['uid'];
$uni = $_POST['uni'];
$nic = $_POST['nic'];
$city = $_POST['city'];
$pw = $_POST['pw'];
$cpw = $_POST['cpw'];
$utype = 3;

if ($pw == $cpw) {
	$pw = md5($pw);

	$query = "SELECT * FROM researcher WHERE userName = '$uname'";

	$res = mysqli_query($conn,$query);

	if (mysqli_num_rows($res)>0) {
        echo "<script type='text/javascript'>alert('user already exists')</script>";
	} else {

	$sql1 = "INSERT INTO researcher (firstName,lastName,userName,email,researchArea,uni_id,university,nic,city) VALUES ('$fname','$lname','$uname','$em','$rarea','$uid','uni','$nic','$city')";

	$res1 = mysqli_query($conn,$sql1);

	$sql2 = "INSERT INTO user (userName,password,userType) VALUES ('$uname','$pw','$utype')";

	$res2 = mysqli_query($conn,$sql2);

	echo "Inserted!";
	header("location: login.php");

}
}





?>