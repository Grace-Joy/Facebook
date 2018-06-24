<?php

include_once('config.php');

$comment_text = $_POST['comment'];
$post_id = $_POST['post-id'];
$user_id = $_SESSION["us_id"];


$sql = "INSERT INTO comments (text, post_id, user_id) VALUES('$comment_text', '$post_id', 7)";

if ($conn->query($sql)) {

    $response = array('comment_text' => $comment_text, 'user_name' => 'gracejoy');
    echo json_encode($response);
} else {
    echo 'could not post comment.';
}
?>