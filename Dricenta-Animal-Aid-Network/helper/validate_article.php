<?php

function validateArticle($article) {
  $errors = array();

  if(empty($article['author'])) {
    array_push($errors, 'Author is required');
  } 

  if(empty($article['title'])) {
    array_push($errors, 'Title is required');
  } 

  $existingArticle = selectOne('article', ['title' => $article['title']]);
  if(isset($existingArticle)) {
    
    if (isset($article['edit_btn']) && $existingArticle['article_id'] != $article['article_id']) {
      array_push($errors, 'Title already exists');
    }

    if (isset($article['add_btn'])) {
      array_push($errors, 'Title already exists');
    }
  } 

  // todo: implement image

  if(empty($article['content'])) {
    array_push($errors, 'Content is required');
  } 
  return $errors;
}