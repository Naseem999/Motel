<?php
$servername="db4free.net";
$dbUsername="naseem_dev";
$password="khanji123";
$dbName="motel_theme";
$port=3306;
$con=new mysqli($servername,$dbUsername,$password,$dbName,$port);

if($con->connect_error){
    die("Connection Failed".$con->connect_error);
}