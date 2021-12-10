<?php 
  $site_title = 'Delete Recipe';
  include_once 'adminheader.php';
  include_once '../helper.php';

if(isset($_GET['id'])) {
  $user_id = $_GET['id'];
  // Build
  $query = 'DELETE ';
  $query .= 'FROM recipe ';
  $query .= 'WHERE id=' . $user_id;
  // confirm only ONE record is being deleted
  $query .= ' LIMIT 1';
  var_dump($query);
  $results = mysqli_query($db_connection, $query);
  if ($results) {
    header("Location: allrecipes.php"); 
    exit();
  } else {
    header("Location: allrecipes.php"); 
    exit();
  }
} else {
  header("Location: allrecipes.php"); 
  exit();
}