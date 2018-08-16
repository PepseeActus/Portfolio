<?php
require_once('functions.php');
$articles = getArticles();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway:600" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
  </head>
  <body>
    <div class="container">
      <a href="create.php" class="btn btn-success">Créer un Article</a>
      <br>
      <h1>Mon blog</h1>
      <?php foreach ($articles as $article): ?>
        <h3><?= $article->title ?></h3>
        <time><?= $article->date ?></time>
        <br>
        <a href="article.php?id=<?= $article->id?>" class="btn btn-primary">Lire la suite</a>
      <?php endforeach; ?>
    </div>
  </body>
</html>
