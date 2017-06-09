<?php
$title = $_POST['title'];
$content = $_POST['content'];
echo '<p>title: ' .$title. '</p>';
echo '<p>content: ' .$content. '</p>';

if(!is_dir('post')) {
mkdir('post');
}

$file = fopen('post/' . $title . '.txt', 'w');
fwrite($file, $content);
fclose($file);
echo '<p>Well done! You have create a new post!</p>';
?>