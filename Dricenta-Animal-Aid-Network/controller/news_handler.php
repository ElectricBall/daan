<?php

$get_id = 'news_id';
$del_id = 'news_del_id';
$table = 'news';
$id = '';
$author = '';
$title = '';
$content = '';
$date = '';
$published = '';
$type = 'n';
$errors = array();

// selecting all news
$news = selectAll('news');

// selecting published news
$pub_news = getPublishedNews();
// dd($act_prog);

// fetching selected data from sent id
if (isset($_GET['news_id'])) {
  $id = $_GET['news_id'];
  $news = selectOne('news', ['news_id' => $id]);
  $author = $news['author'];;
  $title = $news['title'];
  $content = $news['content'];;
  $date = $news['date'];;
}

// delete function
if (isset($_GET['news_del_id'])) {
  $id = $_GET['news_del_id'];
  $count = delete('news', $id, 'n');
  $_SESSION['message'] = 'News deleted successfully!';
  $_SESSION['type'] = 'success-body';
  header('location: ../admin/index.php');
  exit();
}

// update published state
if (isset($_GET['published']) && isset($_GET['n_id'])) {
  $published = $_GET['published'];
  $n_id = $_GET['n_id'];
  
  $count = update('news', $n_id, 'n', ['published' => $published]);
  
  $_SESSION['message'] = 'News Published state updated!';
  $_SESSION['type'] = 'success-body';
  header('location: ../admin/index.php');
  exit();
}