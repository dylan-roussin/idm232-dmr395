<!-- header include -->
<?php 
$site_title = 'Recipe';
include_once 'adminheader.php';



if (isset($_GET['id'])) {
  $user_id = $_GET['id'];

  // Build Query 
  $query = 'SELECT * ';
  $query .= 'FROM recipe ';
  $query .= 'WHERE id=' . $user_id;

  $results = mysqli_query($db_connection, $query);

  if ($results && $results->num_rows > 0) {
    $user = mysqli_fetch_assoc($results);
  } else {
    redirectTo('allrecipes.php');
} 
}

?>

<body>


<h1 class="page-title"><?php echo "<h1 class='page-title'>" . $user['recipe_title'] . "</h1>"; ?></h1>
<div class="controls">
<?php 
  echo "<a id='edit' href='editrecipe.php?id=" . $user_id . "'>Edit</a>" ; 
  echo "<a id='delete' href='delete.php?id=" . $user_id . "'>Delete</a>" ; 
?>
</div>
<div class="recipe-container">

<div class="info-card">
    <?php
      echo "<img src='../" . $user['file_path'] . "' alt='image of " . $user['recipe_title'] . "'>";
      echo "<p>" . $user['recipe_desc'] . "</p>";
    ?>
</div>


<div class="steps">
  <p><?php echo "<div class='steps'>" . $user['recipe_steps'] . "</div>"; ?></p>
</div>
</div>

<!-- footer include -->
<?php include 'adminfooter.php' ?>

