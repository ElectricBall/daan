<?php

session_start();
require('connect.php');


// for testing only to be deleted
function dd($value) {
  echo "<pre>", print_r($value, true), "</pre>";
  die();
}

// execute
function executeQuery($sql, $data) {
  global $conn;
  $stmt = $conn->prepare($sql);
  $values = array_values($data);
  $types = str_repeat('s', count($values));
  $stmt->bind_param($types, ...$values);
  $stmt->execute();
  return $stmt;
}

// select all
function selectAll($table, $conditions = []) {
  global $conn;
  $sql = "SELECT *FROM $table";
  if (empty($conditions)) {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
  } else {
    $i = 0;
    foreach ($conditions as $key => $value) {
      if ($i == 0) {
        $sql = $sql . " WHERE $key=?";
      } else {
        $sql = $sql . " AND $key=?";
      }
      $i++;
    }
    
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
  }
}

// select one
function selectOne($table, $conditions = []) {
  global $conn;
  $sql = "SELECT *FROM $table";
  if (empty($conditions)) {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
  } else {
    $i = 0;
    foreach ($conditions as $key => $value) {
      if ($i == 0) {
        $sql = $sql . " WHERE $key=?";
      } else {
        $sql = $sql . " AND $key=?";
      }
      $i++;
    }
    
    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
  }
}

// insert/create
function create($table, $data) {
  global $conn;
  $sql = "INSERT INTO $table SET ";

  $i = 0;
  foreach ($data as $key => $value) {
    if ($i == 0) {
      $sql = $sql . " $key=?";
    } else {
      $sql = $sql . ", $key=?";
    }
    $i++;
  }
  
  $stmt = executeQuery($sql, $data);
  $id = $stmt->insert_id;
  return $id;
}

// update data
function update($table, $id, $type, $data) {
  global $conn;
  $sql = "UPDATE $table SET ";

  $i = 0;
  foreach ($data as $key => $value) {
    if ($i == 0) {
      $sql = $sql . " $key=?";
    } else {
      $sql = $sql . ", $key=?";
    }
    $i++;
  }

  $t = '';
  switch ($type) {
    case "a":
        $t = 'article_id';
        break;
    case "ad":
        $t = 'employee_code';
        break;
    case "e":
        $t = 'event_id';
        break;
    case "n":
        $t = 'news_id';
        break;
    case "p":
        $t = 'program_id';
        break;
    case "u":
        $t = 'user_email';
        break;
    default:
        break;
  }

  $sql = $sql . " WHERE " . $t . "=?";
  $data[$t]= $id;
  // echo ($sql);
  // dd($data);
  $stmt = executeQuery($sql, $data);
  return $stmt->affected_rows;
}

// delete data
function delete($table, $id, $type) {
  global $conn;
  $sql = "DELETE FROM $table";

  $t = '';
  switch ($type) {
    case "a":
        $t = 'article_id';
        break;
    case "ad":
        $t = 'employee_code';
        break;
    case "e":
        $t = 'event_id';
        break;
    case "n":
        $t = 'news_id';
        break;
    case "p":
        $t = 'program_id';
        break;
    // case "u":
    //     $t = 'user_email';
    //     break;
    default:
        break;
  }

  $sql = $sql . " WHERE " . $t . "=?";
  $stmt = executeQuery($sql, [$t => $id]);
  return $stmt->affected_rows;
}

function getActiveProgram() {
  global $conn;
  $sql = "SELECT p.*, o.organization_name FROM program AS p JOIN organization AS o ON p.organization_id=o.organization_id WHERE p.active=?";

  $stmt = executeQuery($sql, ['active' => 1]);
  $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  return $records;
}

function getActiveEvent() {
  global $conn;
  $sql = "SELECT e.*, o.organization_name FROM event AS e JOIN organization AS o ON e.organization_id=o.organization_id WHERE e.active=?";

  $stmt = executeQuery($sql, ['active' => 1]);
  $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  return $records;
}

function getPublishedNews() {
  global $conn;
  $sql = "SELECT * FROM news WHERE published=?";

  $stmt = executeQuery($sql, ['published' => 1]);
  $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  return $records;
}

function getPublishedArticle() {
  global $conn;
  $sql = "SELECT * FROM article WHERE published=?";

  $stmt = executeQuery($sql, ['published' => 1]);
  $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  return $records;
}

// for testing only to be deleted
// $conditions = [
//   'password' => "adminis"
// ];

// $admin = update('admin', 'AA-367', 'ad', $conditions);
// $admin = delete('admin', 'AA-367', 'ad');
// dd($admin);