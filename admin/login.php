<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">
</head>

<nav>
  <div class="nav-container">
  <a href="../index.php"><img src="../images/logologo1.png" alt="logo"></a>
  <ul>
    <li><a href="#">Admin View</a></li>
  </ul>
  </div>
</nav>


<body>
  <div class="admin-login">
  <form class="admin-form">
    <label for="user">Username: </label>
    <input type="text" name="user">
    <br>
    <label for="pass">Password: </label>
    <input type="password" name="pass">
    <br>
    <a href="editrecipe.php" class="button-log">Submit</a>
  </form>
  </div>
</body>
</html>