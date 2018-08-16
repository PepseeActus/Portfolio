<?php
if(isset($_POST['title'], $_POST['content'])){
  if(!empty($_POST['title']) AND !empty($_POST['content'])){
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);

    require_once('functions.php');
    addArticle($title, $content);
    $message = 'Votre article a été posté';
    unset($title);
    unset($content);
  }else{
    $message = 'Veuillez remplir tous les champs';
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $article->title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway:600" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
  </head>
  <body>
    <div class='container'>
      <a href="blog.php">Retour aux articles</a>
      <br>
      <h2>Poste ton article</h2>
      <form method="post">
        <input type="text" name="title" class="form-control" placeholder="nom de l'article">
        <br>
        <textarea name="content" rows="8" cols="80" class="form-control" placeholder="contenu de l'article"></textarea>
        <br>
        <input type="submit" class="btn btn-success" value="Poster l'article">
        <a href="blog.php" class="btn btn-primary">Retour menu</a>
      </form>
      <br>
      <?php if(isset($message)) { echo $message; } ?>
    </div>
  </body>
</html>
