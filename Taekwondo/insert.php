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
      if (!$result->num_rows > 0) {
         $sql = "INSERT INTO users (first_name, last_name, birthday, gender, email, phone, Level, registration_number, password )
             VALUES ('$first_name', '$lname', '$last_name', '$DOB', '$gender', '$email', '$phone', '$level', '$registration', 'password')";
         $result = mysqli_query($conn, $sql);
         if ($result) {
            echo '<script>alert("Successful Registered")</script>'
         }
      }
   }else {
      echo '<script>alert("Successful Registered")</script>'
   }