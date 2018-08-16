<?php
function addArticle($title, $content){
  require('connect.php');
  $req = $bdd->prepare('INSERT INTO articles (title, content, date) VALUES (?, ?, NOW())');
  $req->execute(array($title, $content));
  $req->closeCursor();
}

function getArticles(){
  require('connect.php');
  $req = $bdd->prepare('SELECT id, title, date FROM articles ORDER BY id DESC');
  $req->execute();
  $data = $req->fetchAll(PDO::FETCH_OBJ);
  return $data;
  $req->closeCursor();
}

function getArticle($id){
  require('connect.php');
  $req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
  $req->execute(array($id));
  if($req->rowCount() == 1){
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
  }else{
    header('Location: index.php');
  }
  $req->closeCursor();
}

function addComment($articleid, $author, $comment){
  require('connect.php');
  $req = $bdd->prepare('INSERT INTO comments (articleid, author, comment, date) VALUES (?, ?, ?, NOW())');
  $req->execute(array($articleid, $author, $comment));
  $req->closeCursor();
}

function getComments($id){
  require('connect.php');
  $req = $bdd->prepare('SELECT * FROM comments WHERE articleid = ?');
  $req->execute(array($id));
  $data = $req->fetchAll(PDO::FETCH_OBJ);
  return $data;
  $req->closeCursor();
}
?>
