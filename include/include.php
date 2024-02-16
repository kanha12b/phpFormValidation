<?php

$connection=mysqli_connect("localhost","root","","firstDB");

if($connection){
    echo "Connected to Database";
}else
{
    echo "Coneection falied";
}


?>