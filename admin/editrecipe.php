<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Recipe</title>
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">
</head>

<nav>
  <div class="nav-container">
  <a href="../index.php"><img src="../images/logologo1.png" alt="logo"></a>
  <ul>
    <li><a href="#">Admin View</a></li>
    <li><a href="allrecipes.php">All</a></li>
  </ul>
  </div>
</nav>

<body>

<div class="edit-area">
<form>
<label for="recipeName"><b>Recipe Name: </b></label>
<input type="text" value="Chicken Al Ghul" name="recipeName">

<label for="desc"><b>Recipe Description: </b></label>
<input type="text" value="Chicken Al Ghul is a classic dish, devolped by Mr. Al Ghul himself. It is said that one bite of Chicken Al Ghul can drive a person mad." name="desc">

<label for="steps"><b>Recipe Steps: </b></label>
<input type="text" value="Add the chicken. Add the Al Ghul. Stir for 30 minutes on high. Lorem ipsum dolor sit amet consectetur adipisicing elit. In, exercitationem! Lorem ipsum dolor sit amet consectetur adipisicing elit. In, exercitationem! Lorem ipsum dolor sit amet consectetur adipisicing elit. In, exercitationem!" name="steps">

<input type="submit">
</form>

</div>



<!-- footer include -->
<?php include '../includes/footer.php' ?>
