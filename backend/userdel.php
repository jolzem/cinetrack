<?php
session_start();

$env = parse_ini_file("../config/.env");

$username = $_SESSION["username"];

// Connect to db
$conn = new mysqli($env["HOST"], $env["DBUSER"], $env["DBPASS"], $env["TABLE"]);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // When user posts data
  $password = $_POST["password"];

  $user_row = $conn->query("SELECT * FROM users WHERE username = '$username';")->fetch_assoc();

  $password_confirm = $user_row["password"];

  if($password != $password_confirm) {
    header("Location: /settings.php?wrongpass");
    $conn->close();
    exit;
  }

  $user_id = $user_row["id"];

  $result = $conn->query("DROP TABLE user$user_id;");

  if(!$result) {
    die("Error removing data.");
  }

  $result = $conn->query("DELETE FROM users WHERE username = '$username';");

  if(!$result) {
    die("Error deleting user.");
  }

  header("Location: logout.php?deleted");
  $conn->close();
  exit;
}
?>

