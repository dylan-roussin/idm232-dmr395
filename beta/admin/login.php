<?php require_once __DIR__ . '/../config.php'; ?>
<?php require_once __DIR__ . '/../includes/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In | Recipes to Die For</title>
  <link rel="stylesheet" href="../css/normalize.css" type="text/css">
  <link rel="stylesheet" href="../css/main.css?v=<?php echo time(); ?>" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Antique+Soft&display=swap" rel="stylesheet">
</head>


<nav>
  <div class="nav-container">
  <a href="../index.php"><img class="logo" src="../images/logologo1.png" alt="logo"></a>
  <ul class="log-center">
    <h2 id="log-title">Admin Dashboard</h2>
  </ul>
  </div>
</nav>




<body>
  <div class="admin-login">
  <form class="admin-form">
    <label for="user"><b>Username: </b></label>
    <br>
    <input class="loginput" type="text" name="user">
    <br>
    <label for="pass"><b>Password: </b></label>
    <br>
    <input class="loginput" type="password" name="pass">
    <br>
    <a href="allrecipes.php" class="button-log">Submit</a>
  </form>
  </div>
</body>

</html>