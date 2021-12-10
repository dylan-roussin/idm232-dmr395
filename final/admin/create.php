<!-- setting page title -->
<?php
  $site_title = 'Create Recipe';
  $active_page = 'create';
  include_once 'adminheader.php';
  include_once '../helper.php';

// Parse Data
if(isset($_POST['submit'])) {

  //image processing
  $file_name = slugify($_FILES['image']['name']);
  $temp_name = $_FILES["image"]["tmp_name"];
  $file_path = $app['asset_url'] . $file_name;
  $file_destination = $_SERVER['DOCUMENT_ROOT'] . $file_path;

  $recipe_title = mysqli_real_escape_string($db_connection, $_POST['recipe_title']);
  $recipe_desc = mysqli_real_escape_string($db_connection, $_POST['recipe_desc']);
  $recipe_steps = mysqli_real_escape_string($db_connection, $_POST['recipe_steps']);
  $recipe_category = mysqli_real_escape_string($db_connection, $_POST['recipe_category']);
  $current_date = getDateTime();

  // Build Query
  $query = "INSERT INTO recipe (`recipe_title`, `recipe_desc`, `recipe_steps`, `recipe_category`, `file_path`, `date_created`, `date_updated`)";
  $query .= "VALUES ('${recipe_title}', '${recipe_desc}', '${recipe_steps}', '${recipe_category}', '${file_path}', '${current_date}','${current_date}')";
  $results = mysqli_query($db_connection, $query);
  if ($results) {
    move_uploaded_file($temp_name, "../${file_path}");
  } else
header("Location: allrecipes.php"); 
}    





?>




<div class="page-container">
    <div class="centerme">
      <h1><?php echo $site_title ?></h1>
    </div>
  <div class="edit-area">
  
    <form action="" method="post" enctype="multipart/form-data">    
      <label for="recipe_title"><b>Recipe Title: </b></label>
      <br>
      <input id="titlechange" type="text" value="" name="recipe_title" required>
      <br>

      <label for="recipe_desc"><b>Recipe Description: </b></label>
      <br>
      <textarea  ROWS="10" COLS="50" type="text" value="" name="recipe_desc" required></textarea>
      <br>
      <label for="recipe_steps"><b>Recipe Steps: </b></label>
      <br>
      <textarea  ROWS="10" COLS="50" type="text" value="" name="recipe_steps" required></textarea>
      <br>
      <label for="recipe_category"><b>Category: </b></label>
      <br>
      <input class="titlechange "type="text" value="" name="recipe_category" required>
      <br>
      <label for="recipe_img" required><b>Recipe Image: </b></label>
      <br>
      <input type="file" value="" name="image" required>
      <br>
    

      <input id="sub" name="submit" type="submit" value="Submit">
    </form>
    
  </div>

<!-- footer include -->
<?php include 'adminfooter.php' ?>