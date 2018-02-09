<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

define('DB_SERVER', '10.158.33.164');
define('DB_USERNAME', 'tiltcrew');
define('DB_PASSWORD', 'P64kBpsdA8SgLmd4');
define('DB_DATABASE', 'user');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $confirmEmail = mysqli_real_escape_string($db, $_POST['confirmEmail']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);

    // form validation: ensure that the form is correctly filled
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if ($email != $confirmEmail) { array_push($errors, "Emails does not match"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if ($password != $confirmPassword) {
    array_push($errors, "The two passwords does not match");
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $encPassword = md5($password);//encrypt the password before saving in the database
        $query = "INSERT INTO user (username, email, password) VALUES('$username', '$email', '$encPassword')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}
