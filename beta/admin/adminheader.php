<?php 
require_once __DIR__ . '/../config.php'; 
require_once __DIR__ . '/../includes/database.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $site_title ?> | Recipes to Die For</title>
  <link rel="stylesheet" href="../css/normalize.css" type="text/css">
  <link rel="stylesheet" href="../css/main.css?v=<?php echo time(); ?>" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Antique+Soft&display=swap" rel="stylesheet">
</head>


<nav>
  <div class="nav-container">
  <a href="../index.php"><img class="logo" src="../images/logologo1.png" alt="logo"></a>
  <ul class="ul-center">
    <h2 id="dashboard-title">Admin Dashboard</h2>
    <li><a class="<?php if ( $active_page == 'all' ) {echo 'active';} ?>" href="allrecipes.php">All</a></li>
    <li><a class="<?php if ( $active_page == 'create' ) {echo 'active';} ?>" href="create.php">Create new recipe</a></li>
    <li><a href="../index.php">Log out</a></li>
  </ul>
  </div>
</nav>

