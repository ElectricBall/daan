<?php

include('../path.php');
session_start();

unset($_SESSION['id']);
unset($_SESSION['full_name']);
unset($_SESSION['email']);
unset($_SESSION['message']);
unset($_SESSION['type']);

session_destroy();

header('location:' . BASE_URL . '/index.php');
exit();