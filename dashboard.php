<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: /"); // Redirect to the login page if not logged in
  exit;
}

$username = $_SESSION["username"];

$env = parse_ini_file(".env");

// Connect to db
$conn = new mysqli($env["HOST"], $env["DBUSER"], $env["DBPASS"], $env["TABLE"]);

if($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - CineTrack</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <h2>Willkommen, <?php echo $username; ?>!</h2>
  <a href="logout.php">Logout</a>
  <br>

  <form method="post" action="search.php">
    <input type="text" placeholder="Title" name="term" required>
    <input value="Search" type="submit">
  </form>


  <?php $conn->close(); ?>
</body>
</html>
