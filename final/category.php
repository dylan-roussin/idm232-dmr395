<!-- setting page title -->
<?php
  $site_title = 'Categories';
  $active_page = 'category';


// header include
include_once 'includes/header.php';


// Build Query 

$queryall = 'SELECT * ';
$queryall .= 'FROM recipe';
$resultsall = mysqli_query($db_connection, $queryall);

$query = 'SELECT DISTINCT recipe_category ';
$query .= 'FROM recipe';
$results = mysqli_query($db_connection, $query);
?>

<body>
  
<h1 class="page-title"><?php echo $site_title ?></h1>

<div class="cat-container">

<?php
// Check if the results returned anything

        if ($results && $results->num_rows > 0) {

            include 'category-list.php';

        } else {

        echo '<p>The recipe database is empty. Add one!</p>';

    }
    
    ?>
</div>
</body>

<!-- footer include -->
<?php include 'includes/footer.php' ?>

