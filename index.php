<?php
$array = scandir('post');//on recupère ts nos fichiers
$files = [];
foreach ($array as $file) { //on parcours le tableau
if ($file === '.') {
    continue;
}
if ($file === '..') {
    continue;
}
$files[] = $file;
}

/*
//$post = array_filter($array, is_file);
$posts = [];
//on trie les informations pr les utiliser ensuite
foreach ($array as $file) { //on parcours le tableau
if (is_dir ($file)) {
    continue;
}
$posts[] = $file; //on prends file et on le met ds le tableau post, rajoute un element à un tab
}*/
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Awsome Blog</title>
</head>
<body>
    <h1>My Awsome Blog</h1>
    <nav><a href="create.html">New Post</a></nav>
    <p>Below are my thougth on programming:</p>

     <!--var_dump affiche ttes les infos de la variable <pre><?php var_dump($array); ?></pre>-->

<?php foreach($files as $file) { ?>
<article>
<h2><?php echo basename($file, '.txt'); ?></h2>
<p><?php echo file_get_contents('post/' .$file); ?></p>
<form action="delete-post.php" method="POST">
    <input type="hidden" name="filename" value="<?php
    echo $file; ?>">
<input type="submit" value="delete">
</form>
</article>
    <?php } ?> 

    <?php /*foreach ($posts as $post) { ?>
    <article>
        <h2>test</h2>
        <p>test para</p>
        </article>*/?>
</body>
</html> 