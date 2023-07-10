<?php
session_start();

$env = parse_ini_file(".env");

// Connect to db
$conn = new mysqli($env["HOST"], $env["DBUSER"], $env["DBPASS"], $env["TABLE"]);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // When user posts data
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = $conn->query("SELECT * FROM users WHERE username = '$username'");

  if ($result->num_rows > 0) {
    header("Location: /register.php?userfound");
    exit;
  }

  $result = $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password');");

  if(!$result) {
    echo "Error adding user " . $username;
    exit;
  }

  $user_id = $conn->query("SELECT * FROM users WHERE username = '$username'")->fetch_assoc()["id"];

  $result = $conn->query("CREATE TABLE user$user_id (name VARCHAR(255), season INT, episode INT, overview VARCHAR(2048), poster VARCHAR(255));");

  if(!$result) {
    echo "Error creating table for " . $username;
    exit;
  }

  $result = $conn->query("ALTER TABLE user$user_id ADD UNIQUE KEY unique_name (name);");

  if(!$result) {
    echo "Error adding unique key to table";
    exit;
  }

  $_SESSION["username"] = $username;
  header("Location: dashboard.php");
  $conn->close();
  exit;
}
?>

