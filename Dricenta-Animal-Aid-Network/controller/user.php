<?php 
 
include(ROOT_PATH . '/database/db.php');
include(ROOT_PATH . '/helper/validate_user.php');

$full_name = '';
$password = '';
$passwordConf = '';
$email = '';
$phone = '';
$errors = array();

function userLogin($user) {
  $_SESSION['id'] = $user['user_id'];
  $_SESSION['email'] = $user['email'];
  $_SESSION['message'] = 'You are now logged in!';
  $_SESSION['type'] = 'success-body';
  header('location: ' . BASE_URL . '/index.php');
  exit();
}

if(isset($_POST['register_btn'])) {
  $errors = validateUser($_POST);

  if (count($errors) === 0) {
    unset($_POST['register_btn'], $_POST['passConf']);
  
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
  
    $user_id = create('user', $_POST);
    $user = selectOne('user', ['user_id' => $user_id]);

    // log user in
    userLogin($user);
  
  } else {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
  }

}

if(isset($_POST['login_btn'])) {
  $errors = validateLogin($_POST);

  if (count($errors) === 0) {
    $user = selectOne('user', ['email' => $_POST['email']]);

    if ($user && password_verify($_POST['password'], $user['password'])) {
      
      // log user in
      userLogin($user);
    } else {
      array_push($errors, 'Wrong Credentials');
    }
  }
}