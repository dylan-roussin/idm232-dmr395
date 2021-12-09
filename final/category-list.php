<?php

while ($output = mysqli_fetch_assoc($results)) {

  echo "<a class='cat-link'  href='categoryopen.php?recipe_category=" . $output['recipe_category'] . "'>";
  echo "<div class='category-card'>";
  echo "<h3>" . $output['recipe_category'] . "</h3>";
  echo "</div>";
  echo "</a>";

}

?>

