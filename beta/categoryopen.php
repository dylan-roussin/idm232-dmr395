<!-- header include -->
<?php 
$site_title = 'Category';
include_once 'includes/header.php';



if (isset($_GET['recipe_category'])) {
  $category = $_GET['recipe_category'];

  // Build Query 
  $query = 'SELECT * ';
  $query .= 'FROM recipe ';
  $query .= "WHERE recipe_category=" . "'${category}'";
  $results = mysqli_query($db_connection, $query);
} else {
  //error
}

?>

<body>

<div class="cat-container">

<?php
// Check if the results returned anything

        if ($results && $results->num_rows > 0) {

            include 'category-build.php';

        } else {

        echo '<p>Category "' . $category . '" does not exist.</p>';

    }
    
    ?>

</div>

<!-- footer include -->
<?php include 'includes/footer.php' ?>