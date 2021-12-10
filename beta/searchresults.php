<!-- setting page title -->
<?php
  $site_title = 'Search' ?>

<!-- header include -->
<?php include 'includes/header.php' ?>


<body>


<div class="featured-search">
  <?php 
  $searchbar = $_GET['searchbar']; 
	
		$searchbar = htmlspecialchars($searchbar); 
		// changes characters used in html to their equivalents, for example: < to &gt;

    $raw_results = mysqli_query($db_connection, "SELECT * FROM recipe WHERE (`recipe_title` LIKE '%".$searchbar."%') OR (`recipe_desc` LIKE '%".$searchbar."%')");

		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){

				echo "<a href='recipe.php?id=" . $results['id'] . "'>";
				echo "<div class='category-card'>";
				echo "";
				echo "<h3 class='search-title'>".$results['recipe_title']."</h3> <p class='search-desc'>".$results['recipe_desc']."</p>";
				echo '</div>';
				echo "</a>";
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
		}

		$resultcount = strval(mysqli_num_rows($raw_results));
		
?>

<h1 id="result-count"><?php echo $resultcount ?> Result(s) </h1>

</div>


<!-- footer include -->
<?php include 'includes/footer.php' ?>
