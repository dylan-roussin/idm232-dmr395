<?php 
require_once __DIR__ . '/../../config.php'; 
require_once __DIR__ . '/../../includes/database.php'; 

$recipe_title_field = isset($_POST['recipe_title']);
$recipe_desc_field = isset($_POST['recipe_title']);
$recipe_img_field = isset($_POST['recipe_title']);
$recipe_title_field = isset($_POST['recipe_title']);

$query = "INSERT INTO `recipe`(`recipe_title`, `recipe_desc`, `recipe_img`, `date_updated`)";
$query .= "VALUES ('$recipe_title','$recipe_desc','$recipe_img','$date_updated')";

$db_connection->query($query);
