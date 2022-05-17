<?php

function validateNews($news) {
  $errors = array();

  if(empty($news['author'])) {
    array_push($errors, 'Author is required');
  } 

  if(empty($news['title'])) {
    array_push($errors, 'Title is required');
  } 

  $existingNews = selectOne('news', ['title' => $news['title']]);
  if(isset($existingNews)) {
    
    if (isset($news['edit_btn']) && $existingNews['news_id'] != $news['news_id']) {
      array_push($errors, 'Title already exists');
    }

    if (isset($news['add_btn'])) {
      array_push($errors, 'Title already exists');
    }
  } 

  // todo: implement image

  if(empty($news['content'])) {
    array_push($errors, 'Content is required');
  } 
  return $errors;
}