<h1>Create post</h1>
<form action="" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title"><br>
    <label for="desc">Description:</label>
    <input type="text" id="desc" name="desc"><br>
    <label for="body">Text:</label><br>
    <textarea id="body" name="text" rows="6" cols="60"
              placeholder="The text for your post can be typed in here."></textarea><br>
    <input type="submit" value="Submit" name="submit">
</form>

<?php
include "../includes/dbconnection.php";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $text = $_POST['text'];
    $date = date("m-d-Y H:i:s");
    if (isset($title)) {
        echo $title;
        echo '<br>';
    }
    if (isset($desc)) {
        echo $desc;
        echo '<br>';
    }
    if (isset($text)) {
        echo $text;
        echo '<br>';
    }
    if (isset($date)) {
        echo $date;
        echo '<br>';
    }
    $postdata = [
      'title' => $title,
      'descr' => $desc,
      'text' => $text,
      'postdate' => $date
    ];
    $post_new = $conn->prepare("INSERT INTO posts (post_title, post_desc, post_text, date_created) VALUES (:title, :descr, :text, :postdate)");
    if ($post_new->execute($postdata)) {
        echo "Post created!";
    }
}
?>