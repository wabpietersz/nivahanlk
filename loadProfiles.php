<?php
    require('dbcon.php');
    if(isset($_POST["search"])){
        $query = "SELECT * FROM architect WHERE city = '".$_POST["country"]."'";
        $result = mysqli_query($conn,$query);

    }
?>