<?php
include_once 'config.php';
session_start();

   $first_name =  mysqli_real_escape_string($conn, $_REQUEST['first_name']);
   $last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
   $DOB =  mysqli_real_escape_string($conn, $_REQUEST['birthday']);
   $gender =  mysqli_real_escape_string($conn, $_REQUEST['gender']);
   $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
   $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
   $level = mysqli_real_escape_string($conn, $_REQUEST['Level']);
   $registration = mysqli_real_escape_string($conn, $_REQUEST['registration_number']);
   $password = md5(mysqli_real_escape_string($conn, $_REQUEST['password']));
   $cpassword = md5(mysqli_real_escape_string($conn, $_REQUEST['cpassword']));
   if ($password == $cpassword) {
      $sql = "SELECT * FROM users WHERE email='$email'";
      $result = mysqli_query($conn, $sql);
   }