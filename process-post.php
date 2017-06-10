<?php
$title = $_POST['title'];
$content = $_POST['content'];


if(!is_dir('post')) {
mkdir('post');
}

$file = fopen('post/' . $title . '.txt', 'w');
fwrite($file, $content);
fclose($file);
echo '<p>Well done! You have create a new post!</p>';
header('location: index.php'); //redirige l'utilisateur sur la pge index
?>