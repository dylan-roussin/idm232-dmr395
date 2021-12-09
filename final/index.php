<!-- IDM 232 Recipe Site --> 
<!-- Dylan Roussin --> 

<!-- setting page title -->
<?php
  $site_title = 'Home';
  $active_page = 'home';
?>

<!-- header include -->
<?php include 'includes/header.php' ?>


<!-- content -->
<body>
  
  <div class="wrapper">
    
    <div class="hero">
      <div class="hero-content">
        <h1>Recipes... to die for.</h1>
        <form action="searchresults.php" method="GET" class="home-search">
          <input name="searchbar" class="searchbar" type="text">
          <input type="submit" value="Search">
        </form>
          <img id="main-logo" src="images/logologo1.png" alt="logo">
      </div>

        
    </div>

  </div>
  <h1 id="feat" class="page-title">Featured</h1>
    <div class="featured">
      
    <?php
        // Build Query 
        $query = 'SELECT * ';
        $query .= 'FROM recipe';
        $results = mysqli_query($db_connection, $query);

      for ($x = 0; $x < 3; $x++) {
       if ($results && $results->num_rows > 0) {
        $row = mysqli_fetch_assoc($results);
          echo "<a href='recipe.php?id=" . $row['id'] . "'>";
            echo "<div class='card'>";
            echo "<img src='" . $row['file_path'] . "' alt='image of " . $row['recipe_title'] . "'>";
            echo "<h3>" . $row['recipe_title'] . "</h3>";
            echo "<p id='cat'>" . $row['recipe_category'] . "</p>";
            echo "<p class='rec-desc'>" . $row['recipe_desc'] . "</p>";
            echo "</div>";
          echo "</a>";
        }
        }
      
      ?>
      </div>
  </div>


<!-- footer include -->
<?php include 'includes/footer.php' ?>
