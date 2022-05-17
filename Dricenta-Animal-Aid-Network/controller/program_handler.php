<?php

$get_id = 'prog_id';
$del_id = 'prog_del_id';
$table = 'program';
$id = '';
$org_id = '';
$name = '';
$content = '';
$date = '';
$active = '';
$type = 'p';
$errors = array();

// selecting all programs
$programs = selectAll('program');

// selecting all organizations
$organizations = selectAll('organization');

// selecting active programs
$act_prog = getActiveProgram();

// fetching selected data from sent id
if (isset($_GET['prog_id'])) {
  $id = $_GET['prog_id'];
  $program = selectOne('program', ['program_id' => $id]);
  $org_id = $program['organization_id'];
  $name = $program['name'];
  $image = $program['image'];
  $content = $program['content'];
  $date = $program['date'];
}

// delete function
if (isset($_GET['prog_del_id'])) {
  $id = $_GET['prog_del_id'];
  $count = delete('program', $id, 'p');
  $_SESSION['message'] = 'Program deleted successfully!';
  $_SESSION['type'] = 'success-body';
  header('location: ../admin/index.php');
  exit();
}

// update active state
if (isset($_GET['active']) && isset($_GET['p_id'])) {
  $active = $_GET['active'];
  $p_id = $_GET['p_id'];
  
  $count = update('program', $p_id, 'p', ['active' => $active]);
  
  $_SESSION['message'] = 'Program active state updated!';
  $_SESSION['type'] = 'success-body';
  header('location: ../admin/index.php');
  exit();
}
