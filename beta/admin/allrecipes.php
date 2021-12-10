<!-- setting page title -->
<?php
  $site_title = 'All Recipes';
  $active_page = 'all';


// header include
include_once 'adminheader.php';


// Build Query 
$query = 'SELECT * ';
$query .= 'FROM recipe';
$results = mysqli_query($db_connection, $query);

?>

<body>
  

<h1 class="page-title"><?php echo $site_title ?></h1>

<div class="featured">
  <div class="format">

<?php
// Check if the results returned anything

        if ($results && $results->num_rows > 0) {

            include 'recipe-list.php';

        } else {

        echo '<p>The recipe database is empty. Add one!</p>';

    }
    
    ?>

</div>
</div>


<!-- footer include -->
<?php include 'adminfooter.php' ?>
