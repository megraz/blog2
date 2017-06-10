<?php
$filename = $_POST['filename'];
echo '<p>' .$filename. '</p>';
unlink('post/' .$filename);
header('location: index.php')
?>