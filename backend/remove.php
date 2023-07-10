<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: /"); // Redirect to the login page if not logged in
  exit;
}

$username = $_SESSION["username"];

$env = parse_ini_file("../config/.env");

// Connect to db
$conn = new mysqli($env["HOST"], $env["DBUSER"], $env["DBPASS"], $env["TABLE"]);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$user_id = $conn->query("SELECT * FROM users WHERE username = '$username'")->fetch_assoc()["id"];

$name = $_POST["title"];

$table_name = "user" . $user_id;

$result = $conn->query("DELETE FROM $table_name WHERE name = '$name'");

if($result) {
  $conn->close();
  header("Location: /dashboard.php");
  exit;
} else {
  $conn->close();
  die("Error removing value from database");
}
?>
