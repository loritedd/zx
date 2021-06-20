<?php
session_start();

// initializing variables
$username = "";
$phone    = "";
$servies = "";
$master = "";
$date = "";
$time = "";
$preference = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'book');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $servies = mysqli_real_escape_string($db, $_POST['servies']);
  $master = mysqli_real_escape_string($db, $_POST['master']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $time = mysqli_real_escape_string($db, $_POST['time']);
  $preference = mysqli_real_escape_string($db, $_POST['preference']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$phone' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, phone, servies, master, date, time, preference)
  			  VALUES('$username', '$phone', '$servies', '$master', '$date', '$time', '$preference')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now booked time";
  	header('location: index.php');
  }
}

  ?>
