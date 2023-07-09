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

$user_id = $conn->query("SELECT * FROM users WHERE username = '$username'")->fetch_assoc()["id"];

$table = $conn->query("SELECT * FROM user" . $user_id . " ORDER BY name;");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - CineTrack</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .left_container {
      width: 12rem;
      float: left;
    }
    .right_container {
      float: right;
      height: 100%;
      width: calc(50rem - 12rem);
    }
  </style>
</head>
<body>
  <h1>CineTrack</h1>
  <h2>Welcome, <?php echo $username; ?>!</h2>
  <a href="logout.php">Logout</a>
  <br>
  <h3>Search Movies, Shows and more...</h3>
  <form method="post" action="search.php">
    <input type="text" placeholder="Title" name="term" required>
    <input value="Search" type="submit">
  </form>

  <?php
  // Output the HTML table
  if ($table->num_rows > 0) {
    while($row = $table->fetch_assoc()) {
      echo "<div style='width:50rem;height:25rem;'>";

        echo "<div class='left_container'><img src='https://image.tmdb.org/t/p/original" . $row["poster"] . "' style='width:12rem;'></div>";
        echo "<div class='right_container'>";
          echo $row["overview"];
          echo "<br>";

          echo "<div style='text-align:center;'>";
          echo "<form method='post' action='add.php'>";
            echo "<input value='" . $row["name"] . "' style='width:0;height:0;border:none;padding:0 !important;' name='title' required>";
            echo "<input type='number' name='season' value='" . $row["season"] . "' min='1' style='width:5ch' required>";
            echo "<input type='number' name='episode' value='" . $row["episode"] . "' min='1' style='width:5ch' required>";
            echo "<input type='submit' value='Update'>";
          echo "</form>";
        echo "</div></div></div>";
    }
  }
  ?>
</body>
</html>
<?php $conn->close(); ?>
