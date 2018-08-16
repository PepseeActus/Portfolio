<?php
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
  header('Location: blog.php');
}else{
  extract($_GET);
  $id = strip_tags($id);

  require_once('functions.php');

  if(!empty($_POST)){
    extract($_POST);
    $errors = array();
    $author = strip_tags($author);
    $comment = strip_tags($comment);
    if(empty($author)){
      array_push($errors, 'entrez un pseudo');
    }
    if(empty($comment)){
      array_push($errors, 'entrez un commentaire');
    }
    if(count($errors) == 0){
      $comment = addComment($id, $author, $comment);
      $success = 'Votre commentaire a été publié';
      unset($author);
      unset($comment);
    }
  }
  $article = getArticle($id);
  $comment = getComments($id);
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
    <div class="container">
      <a href="blog.php">Retour aux articles</a>
      <h1><?= $article->title ?></h1>
      <p><?= $article->content ?></p>
      <time><?= $article->date ?></time>
      <?php
      if(isset($success)){
        echo $success;
      }if(!empty($errors)): ?>
        <?php foreach ($errors as $error): ?>
          <div class="row">
            <div class="col-6">
              <div class="alert alert-danger">
                <?= $error  ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      <form action="article.php?id=<?= $article->id ?>" method="post">
        <div class="form-row">
          <div class="form-group col-12">
            <input type="text" class="form-control" name="author" placeholder="Pseudo" value="<?php if(isset($author)) echo $author ?>">
          </div>
          <div class="form-group col-12">
            <textarea class="form-control" name="comment" placeholder="Votre commentaire..." rows="5"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Envoyez</button>
        </div>
      </form>
      <h3>Commentaires</h3>
      <?php foreach ($comment as $com): ?>
        <h4><?= $com->author ?></h4>
        <time><?= $com->date ?></time>
        <p><?= $com->comment ?></p>
      <?php endforeach; ?>
    </div>
  </body>
</html>
