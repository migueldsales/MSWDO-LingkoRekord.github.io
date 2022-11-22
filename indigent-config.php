<?php

$connect = mysqli_connect("localhost","root","","indigent_db");

if(!$connect){
    die('Connection Failed'. mysqli_connect_error());
}

?>