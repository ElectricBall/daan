<?php

// get all donation
$donations = selectAll('donation');


if(isset($_POST['donate_btn'])) {
  unset($_POST['donate_btn']);

  $donation_id = create('donation', $_POST);
  $donation = selectOne('donation', ['donation_id' => $donation_id]);

  $_SESSION['message'] = 'Thank You For Donating!';
  $_SESSION['type'] = 'success-body';
  header('location: ' . BASE_URL . '/donate.php');
  exit();
}