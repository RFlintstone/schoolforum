<?php
include "includes/dbconnection.php";

$posts = $conn->prepare("SELECT post_id, post_title, post_desc, post_text, date_created FROM posts");
$allposts = $posts;
if ($allposts->execute()) {
    echo '<h1>'."Posts loaded!".'</h1>';
}

foreach ($allposts as $list){
    echo $list['post_id'] . '<br>';
    echo $list['post_title'] . '<br>';
    echo $list['post_desc'] . '<br>';
    echo $list['post_text'] . '<br>';
    echo $list['date_created'] . '<br>';
    echo '<br>';
}