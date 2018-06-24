<?php

include_once('config.php');

$post_text = $_POST['post-text'];
$post_id = $_POST['post-id'];
$user_id = $_SESSION["us_id"];

// let's cook the user session for now
$sql = "INSERT INTO posts (text, user_id) VALUES('$post_text', 7)";

if ($conn->query($sql)) {

    $response = array('post_text' => $post_text, 'user_name' => 'gracejoy');
    echo json_encode($response);
} else {
    echo 'could not create new post.';
}

?>