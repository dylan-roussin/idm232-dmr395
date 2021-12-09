<?php

while ($row = mysqli_fetch_assoc($results)) {

  echo "<a href='recipedetail.php?id=" . $row['id'] . "'>";
  echo "<div class='card'>";
  echo "<img src='../" . $row['file_path'] . "' alt='image of " . $row['recipe_title'] . "'>";
  echo "<h3>" . $row['recipe_title'] . "</h3>";
  echo "<p id='cat'>" . $row['recipe_category'] . "</p>";
  echo "<p class='rec-desc'>" . $row['recipe_desc'] . "</p>";
  echo "</div>";
  echo "</a>";

}

?>

