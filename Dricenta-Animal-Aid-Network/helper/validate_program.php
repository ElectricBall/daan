<?php

function validateProgram($program) {
  $errors = array();

  if(empty($program['name'])) {
    array_push($errors, 'Name is required');
  } 

  $existingProgram = selectOne('program', ['name' => $program['name']]);
  if(isset($existingProgram)) {
    
    if (isset($program['edit_btn']) && $existingProgram['program_id'] != $program['program_id']) {
      array_push($errors, 'Name already exists');
    }

    if (isset($program['add_btn'])) {
      array_push($errors, 'Name already exists');
    }
  } 

  // todo: implement image

  if(empty($program['content'])) {
    array_push($errors, 'Content is required');
  } 
  return $errors;
}