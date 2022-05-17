<?php

function validateLogin($admin) {
  $errors = array();

  if(empty($admin['empId'])) {
    array_push($errors, 'ID is required');
  } 

  if(empty($admin['empPass'])) {
    array_push($errors, 'Password is required');
  }

  return $errors;
}