<?php

$connect = mysqli_connect("localhost","root","","socialservices_db");

if(!$connect){
    die('Connection Failed'. mysqli_connect_error());
}

?>