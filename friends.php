<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="navigation_bar.css"/>
</head>
<body>
<div class="content">
    <div class="navbar">
        <a href="timeline.php">Timeline</a>
        <a href="friends.php">My Friends</a>
        <a href="login.php">Logout</a>
    </div>

    <ul>
        <?php
//        $sql = "SELECT id, text, time_created FROM posts";
//        if ($res = mysqli_query($conn, $sql)) {
//            if (mysqli_num_rows($res) > 0) {
//                while ($row = mysqli_fetch_array($res)) {
                    ?>
                    <li>friend 1</li>
                    <li>friend 2</li>
                    <li>friend 3</li>
                    <?php
//                }
//                $res->free();
//            } else {
//                echo "No matching records are found.";
//            }
//        } else {
//            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//        }
        ?>
    </ul>
</div>
</body>
</html>

</head>

<body>

</body>