<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'ags';

$conn = mysqli_connect($server,$username,$password,$db);
//var_dump($conn);
if (!$conn) {
    echo 'fail';
} 
?>