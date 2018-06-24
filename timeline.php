<?php include('config.php'); ?>
<?php


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="navigation_bar.css"/>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var request;
            $("#post-comment-form").submit(function (event) {

                // Prevent default posting of form - put here to work in case of errors
                event.preventDefault();

                // Abort any pending request
                if (request) {
                    request.abort();
                }
                // setup some local variables
                var $form = $(this);

                // Let's select and cache all the fields
                var $inputs = $form.find("input");

                // Serialize the data in the form
                var serializedData = $form.serialize();

                // Let's disable the inputs for the duration of the Ajax request.
                // Note: we disable elements AFTER the form data has been serialized.
                // Disabled form elements will not be serialized.
                $inputs.prop("disabled", true);

                // Fire off the request to /form.php
                request = $.ajax({
                    url: "post_comment.php",
                    type: "post",
                    data: serializedData
                });

                // Callback handler that will be called on success
                request.done(function (response, textStatus, jqXHR) {
                    // Log a message to the console
                    console.log("Hooray, it worked!");
                    console.log(response);
                    var resp = jQuery.parseJSON(response);
                    // console.log(resp.comment_text);
                    // console.log(resp.user_name);
                    // var listcontainer = $('.list-of-comments').appendChild();

                    $('#list-of-comments').append("<li class='list-group-item'>" + resp.user_name + " : "+ resp.comment_text + "</li>");

                });

                // Callback handler that will be called on failure
                request.fail(function (jqXHR, textStatus, errorThrown) {
                    // Log the error to the console
                    console.error(
                        "The following error occurred: " +
                        textStatus, errorThrown
                    );
                });

                // Callback handler that will be called regardless
                // if the request failed or succeeded
                request.always(function () {
                    // Reenable the inputs
                    $inputs.prop("disabled", false);
                });

            });
        })
    </script>
</head>
<body>
<div class="content">
    <?php require_once 'navbar.php' ?>

    <div class="post-edit-layout">
        <textarea placeholder="Hello Grace What's on your mind?"></textarea>
        <button type="button">Post</button>
    </div>
    <hr>
    <?php
    $post_id = 0;
    $sql = "SELECT id, text, time_created FROM posts";
    if ($res = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_array($res)) {
                $post_id = $row['id'];
                ?>
                <div class="post-layout">
                    <span><?php echo $row['id']; ?></span><br>
                    <div><?php echo $row['text']; ?></div>
                    <p>comments count</p> <a href="#">like</a> <a href="#">dislike</a>
                    <br>
                    <p>time: <?php echo $row['time_created']; ?></p>
                </div>
                <ul class="list-group" id="list-of-comments">
                    <?php
                    $comment_sql = "SELECT * FROM comments,users WHERE comments.post_id = 1 AND users.id = 7";
                    if ($comment_res = mysqli_query($conn, $comment_sql)) {
                        if (mysqli_num_rows($res) > 0) {
                            while ($comment_row = mysqli_fetch_array($comment_res)) {
                                ?>
                                <li class="list-group-item"><span class="text-secondary"><?php echo $comment_row['username']; ?>
                                    </span> : <?php echo $comment_row['text'] ?></li>
                                <?php
                            }
                        }
                    }
                    ?>
                </ul>
                <div class="comments-edit-layout">
                    <form id="post-comment-form">
                        <input class="input-group-lg" type="text" name="comment"/>
                        <input hidden name="post-id" value="<?php echo $row['id']; ?>"/>
                        <button type="submit" class="btn btn-primary">comment</button>
                    </form>
                </div>
                <?php
            }
            $res->free();
        } else {
            echo "No matching records are found.";
        }
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    ?>

</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>