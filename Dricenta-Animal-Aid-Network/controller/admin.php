<?php

include('../database/db.php');
include('../helper/validate_login.php');

if(isset($_POST['login_btn'])) {
  $errors = validateLogin($_POST);
  if (count($errors) === 0) {
    $user = selectOne('admin', ['employee_code' => $_POST['empId']]);
    if ($user && password_verify($_POST['empPass'], $user['password'])) {
      $_Session['id'] = $user['employee_code'];
      $_Session['message'] = "You are now logged in";
      $_Session['type'] = "success";
      
      header('location: ../admin/index.php');
      exit();

    } else {
      array_push($errors, 'Wrong Credentials');
    }
  }
}

?>