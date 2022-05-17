<?php

$get_id = 'article_id';
$del_id = 'article_del_id';
$table = 'article';
$id = '';
$author = '';
$title = '';
$content = '';
$date = '';
$published = '';
$type = 'a';
$errors = array();

// selecting all article
$articles = selectAll('article');

// selecting published article
$pub_article = getPublishedArticle();
// dd($act_prog);

// fetching selected data from sent id
if (isset($_GET['article_id'])) {
  $id = $_GET['article_id'];
  $article = selectOne('article', ['article_id' => $id]);
  $author = $article['author'];;
  $title = $article['title'];
  $content = $article['content'];;
  $date = $article['date'];;
}

// delete function
if (isset($_GET['article_del_id'])) {
  $id = $_GET['article_del_id'];
  $count = delete('article', $id, 'a');
  $_SESSION['message'] = 'Article deleted successfully!';
  $_SESSION['type'] = 'success-body';
  header('location: ../admin/index.php');
  exit();
}

// update published state
if (isset($_GET['published']) && isset($_GET['a_id'])) {
  $published = $_GET['published'];
  $a_id = $_GET['a_id'];
  
  $count = update('article', $a_id, 'a', ['published' => $published]);
  
  $_SESSION['message'] = 'Article Published state updated!';
  $_SESSION['type'] = 'success-body';
  header('location: ../admin/index.php');
  exit();
}