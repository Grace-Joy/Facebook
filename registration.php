<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/19/18
 * Time: 12:33 PM
 */
include_once('config.php');

$username = $_POST['username'];
$names = $_POST['names'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if($username == ''){
    echo 'please insert username';
    echo '<br>';
    echo '<a href="index.php">Go back</a>';
    die;
}

if ($confirm_password != $password) {
    echo 'password didn\'t match confirmation';
    echo '<br>';
    echo '<a href="index.php">Go back</a>';
    die;
}

$sql = "INSERT INTO users (username, names, email, password) VALUES('$username', '$names', '$email', '$password')";

if ($conn->query($sql)) {
    echo 'thank you ' . $username . ' for registering';

    echo "<br>";
    echo "<a href='login.php'>Continue to login</a>";
} else {
    echo 'There was an error with your registration please try again.';
}
//$conn->close();
