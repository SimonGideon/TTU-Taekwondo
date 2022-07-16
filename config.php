<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'ttu_taekwondo';

$conn = mysqli_connect($server, $user, $password, "$database" );

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>