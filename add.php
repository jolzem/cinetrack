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

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$user_id = $conn->query("SELECT * FROM users WHERE username = '$username'")->fetch_assoc()["id"];

require_once 'vendor/autoload.php';

// start http client
$client = new GuzzleHttp\Client();

$query = urlencode($_POST["title"]);

$response = $client->request('GET', 'https://api.themoviedb.org/3/search/multi?query=' . $query . '&include_adult=true&language=en-US', [
  'headers' => [
    'Authorization' => 'Bearer ' . $env["ACCESS_TOKEN"],
    'accept' => 'application/json',
  ],
]);
$json = json_decode($response->getBody(), true)["results"][0];

$season = $_POST["season"];
$episode = $_POST["episode"];
$name = $_POST["title"];
$overview = $json["overview"];
$poster = $json["poster_path"];

$table_name = "user" . $user_id;

$result = $conn->query("INSERT INTO $table_name (name, season, episode, overview, poster) VALUES ('$name', $season, $episode, '$overview', '$poster') ON DUPLICATE KEY UPDATE season = VALUES(season), episode = VALUES(episode), overview = VALUES(overview), poster = VALUES(poster);");

if($result) {
  $conn->close();
  header("Location: /dashboard.php");
  exit;
} else {
  $conn->close();
  echo "Error inserting value into database";
}

?>
