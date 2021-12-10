<h1 class="open-cat-title"><?php echo $category ?></h1>

<?php

while ($row = mysqli_fetch_assoc($results)) {

  echo "<a href='recipe.php?id=" . $row['id'] . "'>";
	echo "<div class='category-card'>";
	echo "<h3>".$row['recipe_title']."</h3> <p>".$row['recipe_desc']."</p>";
	echo "</div>";
	echo "</a>";

}

?>

