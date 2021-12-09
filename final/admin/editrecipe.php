<!-- setting page title -->
<?php
  $site_title = 'Edit Recipe';
  include_once 'adminheader.php';
  include_once '../helper.php';

if(isset($_POST['update'])) {
// Parse Data
  $user_id = $_POST['user_id'];
  $recipe_title = mysqli_real_escape_string($db_connection, $_POST['recipe_title']);
  $recipe_desc = mysqli_real_escape_string($db_connection, $_POST['recipe_desc']);
  $recipe_steps = mysqli_real_escape_string($db_connection, $_POST['recipe_steps']);
  $recipe_category = mysqli_real_escape_string($db_connection, $_POST['recipe_category']);
  $current_date = getDateTime();

// Build Query
  $query = "UPDATE recipe ";
  $query .= 'SET ';
  $query .= "recipe_title = '${recipe_title}', ";
  $query .= "recipe_desc = '${recipe_desc}', ";
  $query .= "recipe_steps = '${recipe_steps}', ";
  $query .= "recipe_category = '${recipe_category}', ";
  $query .= "date_updated = '${current_date}' " ;
  $query .= "WHERE id = ${user_id}";

// Execute
$results = mysqli_query($db_connection, $query);
header("Location: allrecipes.php"); 

if ($results && $results->num_rows > 0) {
  echo 'Recipe Updated Successfully';
} else {

}
} elseif (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Build Query 
    $query = 'SELECT * ';
    $query .= 'FROM recipe ';
    $query .= 'WHERE id=' . $user_id;

    $results = mysqli_query($db_connection, $query);

  if ($results && $results->num_rows > 0) {
    $user = mysqli_fetch_assoc($results);
  } else {
    echo 'error';
  }
}
?>




<div class="page-container">
    <div class="centerme">
      <h1><?php echo $site_title ?></h1>
    </div>
  <div class="edit-area">
  
    <form action="" method="post">    
      <label for="recipe_title"><b>Recipe Title: </b></label>
      <br>
      <input id="titlechange" type="text" value="<?php echo $user['recipe_title']; ?>" name="recipe_title">
      <br>

      <label for="recipe_desc"><b>Recipe Description: </b></label>
      <br>
      <textarea  ROWS="10" COLS="50" type="text" name="recipe_desc"><?php echo $user['recipe_desc']; ?></textarea>
      <br>
      <label for="recipe_steps"><b>Recipe Steps: </b></label>
      <br>
      <textarea  ROWS="10" COLS="50" type="text" name="recipe_steps"><?php echo $user['recipe_steps']; ?></textarea>
      <br>
      <label for="recipe_category"><b>Category:</b></label>
      <br>
      <input class="titlechange "type="text" value="<?php echo $user['recipe_category']; ?>" name="recipe_category">
      <br>

      <input type="hidden" value="<?php echo $user['id']; ?>" name="user_id">

      <input id="sub" name="update" type="submit" value="Update">
    </form>
  </div>

<!-- footer include -->
<?php include 'adminfooter.php' ?>