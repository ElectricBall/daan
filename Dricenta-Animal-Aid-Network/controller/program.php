<?php

include(ROOT_PATH . '/database/db.php');
include(ROOT_PATH . '/helper/validate_program.php');

$table = 'program';
$id = '';
$org_id = '';
$name = '';
$content = '';
$date = '';
$active = '';
$type = 'p';
$errors = array();

include(ROOT_PATH . '/controller/program_handler.php');

// add function
if(isset($_POST['add_btn'])) {

  $errors = validateProgram($_POST);

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
    $program_id = create('program', $_POST);
    $_SESSION['message'] = 'Program created successfully!';
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
  $errors = validateProgram($_POST);

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
    $id = $_POST['program_id'];
    unset($_POST['edit_btn'], $_POST['program_id']);
    $program_id = update('program', $id, 'p', $_POST);
    $_SESSION['message'] = 'Program updated successfully!';
    $_SESSION['type'] = 'success-body';
    header('location: ../admin/index.php');
    exit();
  } else {
    $id = $_POST['program_id'];
    $name = $_POST['name'];
    $content = $_POST['content'];    
  }
}