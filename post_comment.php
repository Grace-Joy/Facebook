<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/24/18
 * Time: 11:02 PM
 */
include_once('config.php');

$comment_text = $_POST['comment'];
$post_id = $_POST['post-id'];
$user_id = $_SESSION['us_id'];

echo $comment_text;
echo "<br>";
echo $post_id;
echo "<br>";
echo $user_id;

$sql = "INSERT INTO comments (text, post_id, user_id) VALUES('$username', '$names', '$email', '$password')";