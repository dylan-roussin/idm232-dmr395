<!-- IDM 232 Recipe Site --> 
<!-- Dylan Roussin --> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Recipes to die for</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<nav>
  <div class="nav-container">
  <a href="index.php"><img src="images/logologo1.png" alt="logo"></a>
  <ul>
    <li><a href="category.php">Categories</a></li>
    <li><a href="admin/login.php">Admin</a></li>
    <li><a href="admin/allrecipies.php">All</a></li>
  </ul>
  </div>
</nav>



<!-- content -->
<body>
  
  <div class="wrapper">
    
    <div class="hero">
      <div class="hero-content">
        <h1>Recipies... to die for.</h1>
        <form>
          <input type="text">
          <a href="searchresults.php">Search</a>
        </form>
          <img src="images/logologo1.png" alt="logo">
      </div>

        
    </div>

  </div>

    <div class="featured">

      <a href="recipedetail.php">
        <div class="card">
            <img src="images/chicken.jpeg" alt="photo of chicken">
            <h3>Chicken Al Ghul</h3>
            <p>This is a very spooky meal.</p>
        </div>
        </a>

        <a href="recipedetail.php">
        <div class="card">
            <img src="images/chicken.jpeg" alt="photo of chicken">
            <h3>Chicken Al Ghul</h3>
            <p>This is a very spooky meal.</p>
        </div>
        </a>

        <a href="recipedetail.php">
        <div class="card">
            <img src="images/chicken.jpeg" alt="photo of chicken">
            <h3>Chicken Al Ghul</h3>
            <p>This is a very spooky meal.</p>
        </div>
        </a>

      </div>
  </div>

  

<!-- footer include -->
<?php include 'includes/footer.php' ?>
