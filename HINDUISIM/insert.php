<?php
 $username = $_POST['username'];
 $password = $_POST['password'];
 $gender = $_POST['gender'];
 $email = $_POST['email'];
 $phoneCode = $_POST['phoneCode'];
 $phone = $_POST['phone'];

 if(!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phonecode) || !empty($phone)){
     $host = "local host ";
     $dbUsername = "root";
     $dbPassword = "";
     $dbname = "rudra";
     //create connection
     $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname)
     if(mysqli_connect_error()){
         die('connect error'('. mysqli_connect_errno().') '. mysqli_connect_error()'
     }
  } else{
      echo "all field are required";
      die();
  }
  ?>