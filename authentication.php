<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/20/18
 * Time: 8:59 PM
 */

$username = $_POST['username'];
$pass = $_POST['password'];

//$pass = password_hash($pass, PASSWORD_DEFAULT);

$sql = "select * from users where username = '$username'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $n = null;
    $u = null;
    $p = null;
    $e = null;
    while ($row = $result->fetch_assoc()) {
        $u = $row['username'];
        $n = $row['names'];
        $e = $row['email'];
        $p = $row['password'];
    }

    if ($p == $pass) {
        session_start();
        $_SESSION["username"] = $row['username'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["names"] = $row['names'];
        echo "Session started";
        header("Location: http://localhost/Facebook/timeline.php");
    } else {
        echo '<h3>password was incorrect</h3>';
        echo "<br>";
        echo "<a href='login.php'>Go back</a>";
    }
} else {
    echo "<h3>user $username is not found</h3>";
    echo "<br>";
    echo "<a href='login.php'>Go back</a>";
}

