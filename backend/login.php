<?php
session_start();

$env = parse_ini_file("../config/.env");

// Connect to db
$conn = new mysqli($env["HOST"], $env["DBUSER"], $env["DBPASS"], $env["TABLE"]);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // When user posts data
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = $conn->query("SELECT * FROM users WHERE username = '$username'");

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $dbPassword = $row["password"];

    if ($password == $dbPassword) {
      $_SESSION["username"] = $username;
      header("Location: /dashboard.php");
    } else {
      header("Location: /?wrongpass");
      die;
    }
  } else {
    header("Location: /?notfound");
    die;
  }
}

$conn->close();
?>

