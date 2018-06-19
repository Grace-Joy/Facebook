<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="navigation_bar.css"/>
</head>
<body>
<div class="navbar">
    <a href="welcome.php">Home</a>
    <a href="login.php">Login</a>
</div>
<div class="content">
    <form action="" method="POST">
        <ul style="list-style: none;">
            <li>
                <label>Username: </label>
                <input class="simple-input" name="name" type="text" size="30"/>
            </li>
            <li>
                <label>Names: </label>
                <input class="simple-input" name="name" type="text" size="30"/>
            </li>
            <li>
                <label>Email: </label>
                <input class="simple-input" name="email" type="text" size="30"/>
            </li>
            <li>
                <label>Password: </label>
                <input class="simple-input" name="password" type="text" size="30"/>
            </li>
            <li>
                <label>Confirm Password: </label>
                <input class="simple-input" name="confirm_password" type="text" size="30"/>
            </li>
        </ul>
        <input name="mySubmit" type="submit" value="Submit!"/>
    </form>
</div>
</body>
</html>
