<?php

include(ROOT_PATH . '/database/db.php');
include(ROOT_PATH . '/helper/validate_news.php');

$table = 'news';
$id = '';
$author = '';
$title = '';
$content = '';
$date = '';
$published = '';
$type = 'n';
$errors = array();

include(ROOT_PATH . '/controller/news_handler.php');

// add function
if(isset($_POST['add_btn'])) {

  $errors = validateNews($_POST);

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

  // if no error then make news
  if (count($errors) === 0) {
    unset($_POST['add_btn']);
    $news_id = create('news', $_POST);
    $_SESSION['message'] = 'News created successfully!';
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
  $errors = validateNews($_POST);

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
    $id = $_POST['news_id'];
    unset($_POST['edit_btn'], $_POST['news_id']);
    $news_id = update('news', $id, 'n', $_POST);
    $_SESSION['message'] = 'News updated successfully!';
    $_SESSION['type'] = 'success-body';
    header('location: ../admin/index.php');
    exit();
  } else {
    $id = $_POST['news_id'];
    $author = $_POST['author'];
    $title = $_POST['title'];
    $content = $_POST['content'];    
  }
}