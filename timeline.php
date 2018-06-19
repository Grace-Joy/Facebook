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
    <div class="post-edit-layout">
        <textarea placeholder="Hello Grace What's on your mind?"></textarea>
        <button type="button">Post</button>
    </div>
    <hr>
    <?php $sql = "SELECT id, text, time_created FROM posts";
    if ($res = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_array($res)) {
                ?>
                <div class="post-layout">
                    <span><?php echo $row['id']; ?></span><br>
                    <div><?php echo $row['text']; ?></div>
                    <p>comments count</p> <a href="#">like</a> <a href="#">dislike</a>
                    <br>
                    <p>time: <?php echo $row['time_created']; ?></p>
                </div>
                <div class="comment-layout">
                    <span>username: text</span><br>
                </div>
                <div class="comments-edit-layout">
                    <input class="simple-input" type="text" name="comment"/>
                    <button type="button">comment</button>
                </div>
                <?php
            }
            $res->free();
        } else {
            echo "No matching records are found.";
        }
    } else {
        /*echo password_hash("GEEJAY", PASSWORD_DEFAULT);
        echo "<br>";
        $password_match = password_verify ( "GEEJAY", "$2y$10\$x6xD3fPwp9hSXVimMAcRxOwXpU7ZO89HqxDyNqBAdLdE1z3eQ/aE.");
        echo $password_match;
        echo "<br>";*/
        echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
    }
    ?>

</div>
</body>
</html>

</head>

<body>

</body>