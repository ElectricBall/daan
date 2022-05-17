<?php

function validateUser($user) {
  $errors = array();

  if(empty($user['full_name'])) {
    array_push($errors, 'Full Name is required');
  } 
  
  if(empty($user['password'])) {
    array_push($errors, 'Password is required');
  } 

  if($user['passConf'] !== $user['password']) {
    array_push($errors, 'Password do not match');
  } 

  if(empty($user['phone'])) {
    array_push($errors, 'Phone is required');
  } 

  if(empty($user['email'])) {
    array_push($errors, 'Email is required');
  } 

  $existingUser = selectOne('user', ['email' => $user['email']]);
  if(isset($existingUser)) {
    
    if (isset($user['edit_btn']) && $existingUser['user_id'] != $user['user_id']) {
      array_push($errors, 'Email already exists');
    }

    if (isset($user['register_btn'])) {
      array_push($errors, 'Email already exists');
    }
  }
  
  return $errors;
}

function validateLogin($user) {
  $errors = array();

  if(empty($user['email'])) {
    array_push($errors, 'Email is required');
  } 
  
  if(empty($user['password'])) {
    array_push($errors, 'Password is required');
  } 
  
  return $errors;
}