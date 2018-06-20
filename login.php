<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="navigation_bar.css"/>
</head>
<body>
<div class="navbar">
    <a href="#">Welcome</a>
    <a href="index.php">Register</a>
</div>
<div class="content">
    <form action="timeline.php" method="POST">
        <ul style="list-style: none;">
            <li>
                <label>Username: </label>
                <input class="simple-input" name="name" type="text" size="30"/>
            </li>

                <label>Password: </label>
                <input class="simple-input" name="password" type="password" size="30"/>
            </li>

        </ul>
        <input name="mySubmit" type="submit" value="Login"/>
    </form>
</div>
</body>
</html>
