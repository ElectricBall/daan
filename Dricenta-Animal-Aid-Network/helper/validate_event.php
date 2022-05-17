<?php

function validateevent($event) {
  $errors = array();

  if(empty($event['name'])) {
    array_push($errors, 'Name is required');
  } 

  $existingEvent = selectOne('event', ['name' => $event['name']]);
  if(isset($existingEvent)) {
    
    if (isset($event['edit_btn']) && $existingEvent['event_id'] != $event['event_id']) {
      array_push($errors, 'Name already exists');
    }

    if (isset($event['add_btn'])) {
      array_push($errors, 'Name already exists');
    }
  } 

  // todo: implement image

  if(empty($event['content'])) {
    array_push($errors, 'Content is required');
  } 
  return $errors;
}