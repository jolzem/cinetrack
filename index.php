<?php if(isset($_SESSION["username"])) {
  header("Location: dashboard.php");
  exit;
} ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login - Cinetrack</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <h1>CineTrack</h1>
  <h2>Login</h2>
  <form method="post" action="login.php">
    <label for="username">Name:</label>
    <input type="text" name="username" required><br><br>

    <label for="password">Passwort:</label>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
  </form>

  <p class="error">
  <?php
    if(isset($_GET["notfound"])) echo "User not found.";
    if(isset($_GET["wrongpass"])) echo "Wrong Password.";
  ?>
  </p>

</body>
</html>
