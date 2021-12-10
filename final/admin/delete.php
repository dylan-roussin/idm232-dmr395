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
    $URL="http://dylanroussin.com/idm232/final/allrecipes.php";
  echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
  } else {
    $URL="http://dylanroussin.com/idm232/final/allrecipes.php";
  echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
  }
} else {
  $URL="http://dylanroussin.com/idm232/final/allrecipes.php";
  echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}