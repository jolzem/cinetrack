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
  $currentpass = $_POST["currentpass"];
  $newpass = $_POST["newpass"];
  $repeat = $_POST["repeatnewpass"];

  $user_row = $conn->query("SELECT * FROM users WHERE username = '$username';")->fetch_assoc();

  if($currentpass != $user_row["password"]) {
    header("Location: /settings.php?wrongold");
    exit;
  }

  if($newpass != $repeat) {
    header("Location: /settings.php?wrongrepeat");
    exit;
  }

  $result = $conn->query("UPDATE users SET password = '$newpass' WHERE username = '$username';");

  if(!$result) {
    die("Error changing password");
  }

  header("Location: /settings.php?changed");
  $conn->close();
  exit;
}
?>

