<?php
require('dbcon.php');
if(isset($_POST["query"]))
{
    $output='';
    $query ="SELECT DISTINCT District FROM architect WHERE District LIKE '%".$_POST["query"]."%'";
    $result = mysqli_query($conn,$query);
    $output = '<ul class="list-unstyled">';
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output .='<li>'.$row["District"].'</li>';
        }
    }
    else
    {
        $output .='<li>City not Found</li>';
    }
    $output .='</ul>';
    echo $output;

}
?>