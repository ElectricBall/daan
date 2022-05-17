<?php

include(ROOT_PATH . '/database/db.php');
include(ROOT_PATH . '/helper/validate_event.php');

$table = 'event';
$id = '';
$org_id = '';
$name = '';
$content = '';
$date = '';
$active = '';
$type = 'e';
$errors = array();

include(ROOT_PATH . '/controller/event_handler.php');

// add function
if(isset($_POST['add_btn'])) {

  $errors = validateEvent($_POST);

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
    unset($_POST['add_btn']);
    $event_id = create('event', $_POST);
    $_SESSION['message'] = 'Event created successfully!';
    $_SESSION['type'] = 'success-body';
    header('location: ../admin/index.php');
    exit();
  } else {
    $org_id = $_POST['organization_id'];
    $name = $_POST['name'];
    $content = $_POST['content'];
  }
}

// update function
if (isset($_POST['edit_btn'])) {
  $errors = validateEvent($_POST);

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
    $id = $_POST['event_id'];
    unset($_POST['edit_btn'], $_POST['event_id']);
    $event_id = update('event', $id, 'e', $_POST);
    $_SESSION['message'] = 'Event updated successfully!';
    $_SESSION['type'] = 'success-body';
    header('location: ../admin/index.php');
    exit();
  } else {
    $id = $_POST['event_id'];
    $name = $_POST['name'];
    $content = $_POST['content'];    
  }
}