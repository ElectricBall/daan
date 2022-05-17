<?php

include(ROOT_PATH . '/database/db.php');
include(ROOT_PATH . '/helper/validate_article.php');

$table = 'article';
$id = '';
$author = '';
$title = '';
$content = '';
$date = '';
$published = '';
$type = 'a';
$errors = array();

include(ROOT_PATH . '/controller/article_handler.php');

// add function
if(isset($_POST['add_btn'])) {

  $errors = validateArticle($_POST);

  // validate image
  if (!empty($_FILES['image']['name'])) {
    $image_name = time() . '_' . $_FILES['image']['name'];
    $destination = ROOT_PATH . "/assets/images/" . $image_name;
    
    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    
    if($result) {
      $_POST['image'] = $image_name;
    } else {
      array_push($errors, 'Failed to upload image');
    }
  } else {
    array_push($errors, 'Image is required');
  }

  // if no error then make article
  if (count($errors) === 0) {
    unset($_POST['add_btn']);
    $article_id = create('article', $_POST);
    $_SESSION['message'] = 'Article created successfully!';
    $_SESSION['type'] = 'success-body';
    header('location: ../admin/index.php');
    exit();
  } else {
    $author = $_POST['author'];
    $title = $_POST['title'];
    $content = $_POST['content'];
  }
}

// update function
if (isset($_POST['edit_btn'])) {
  $errors = validateArticle($_POST);

  if (!empty($_FILES['image']['name'])) {
    $image_name = time() . '_' . $_FILES['image']['name'];
    $destination = ROOT_PATH . "/assets/images/" . $image_name;
    
    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    
    if($result) {
      $_POST['image'] = $image_name;
    } else {
      array_push($errors, 'Failed to upload image');
    }
  } else {
    array_push($errors, 'Image is required');
  }
  
  if (count($errors) === 0) {
    $id = $_POST['article_id'];
    unset($_POST['edit_btn'], $_POST['article_id']);
    $article_id = update('article', $id, 'a', $_POST);
    $_SESSION['message'] = 'Article updated successfully!';
    $_SESSION['type'] = 'success-body';
    header('location: ../admin/index.php');
    exit();
  } else {
    $id = $_POST['article_id'];
    $author = $_POST['author'];
    $title = $_POST['title'];
    $content = $_POST['content'];    
  }
}