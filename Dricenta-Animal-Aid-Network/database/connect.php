<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'daan';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
  die('Database Connection Error' . $conn->connect_error);
} 