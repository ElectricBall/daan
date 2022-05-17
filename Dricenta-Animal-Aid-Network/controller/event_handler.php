<?php

$get_id = 'event_id';
$del_id = 'event_del_id';
$table = 'event';
$id = '';
$org_id = '';
$name = '';
$content = '';
$date = '';
$active = '';
$type = 'e';
$errors = array();

// selecting all events
$events = selectAll('event');

// selecting all organizations
$organizations = selectAll('organization');

// selecting active events
$act_event = getActiveEvent();

// fetching selected data from sent id
if (isset($_GET['event_id'])) {
  $id = $_GET['event_id'];
  $event = selectOne('event', ['event_id' => $id]);
  $org_id = $event['organization_id'];;
  $name = $event['name'];;
  $content = $event['content'];;
  $date = $event['date'];;
}

// delete function
if (isset($_GET['event_del_id'])) {
  $id = $_GET['event_del_id'];
  $count = delete('event', $id, 'e');
  $_SESSION['message'] = 'Event deleted successfully!';
  $_SESSION['type'] = 'success-body';
  header('location: ../admin/index.php');
  exit();
}

// update active state
if (isset($_GET['active']) && isset($_GET['e_id'])) {
  $active = $_GET['active'];
  $e_id = $_GET['e_id'];
  
  $count = update('event', $e_id, 'e', ['active' => $active]);
  
  $_SESSION['message'] = 'Event active state updated!';
  $_SESSION['type'] = 'success-body';
  header('location: ../admin/index.php');
  exit();
}
