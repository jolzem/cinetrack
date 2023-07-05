<?php
require_once 'vendor/autoload.php';

$env = parse_ini_file(".env");

// start http client
$client = new GuzzleHttp\Client();

$term = $_POST["term"];
$query = urlencode($term);

$response = $client->request('GET', 'https://api.themoviedb.org/3/search/multi?query=' . $query . '&include_adult=true&language=en-US', [
  'headers' => [
    'Authorization' => 'Bearer ' . $env["ACCESS_TOKEN"],
    'accept' => 'application/json',
  ],
]);
$json = json_decode($response->getBody(), true)["results"];



?>

<!DOCTYPE html>
<html></html>
<head>
  <title>Search - CineTrack</title>
</head>
<body>
  <h1>CineTrack</h1>
  <a href='/dashboard.php'>Go Back</a>
  <?php if(!empty($json)): ?>
  <h2>Search results:</h2>
  <table style="border: thin solid black;border-collapse: collapse;">
    <tr>
    <?php

    foreach($json as $data) {
      if(strcasecmp($data["media_type"], "person") === 0) { continue; }
      echo "<td style='border: thin solid black;'><img src='https://image.tmdb.org/t/p/original";
      echo $data["poster_path"];
      echo "' style='width:10rem;'><br></td>";
    }
    ?>
    </tr>
    <tr>
    <?php
    foreach($json as $data) {
      if(strcasecmp($data["media_type"], "person") === 0) { continue; }
      echo "<td style='border: thin solid black;'>";
      // title data can either be title or name
      echo $data["title"];
      echo $data["name"];
      // only show year when available
      echo ($data["first_air_date"] != null) ? " (" . explode("-", $data["first_air_date"])[0] . ")" : '';
      echo "</td>";
    }
    ?>
    </tr>
    <tr>
    <?php
    foreach($json as $data) {
      if(strcasecmp($data["media_type"], "person") === 0) { continue; }
      echo "<td style='border: thin solid black;'>";
      echo "<form>";
      echo "<input type='number' name='season' id='season' value='1' min='1' style='width:5ch' required>";
      echo "<input type='number' name='episode' id='episode' value='1' min='1' style='width:5ch' required>";
      echo "<label for='season'>S</label>";
      echo "<label for='episode'>Ep</label><br>";
      echo "<input type='submit' value='Add/Change'><br>";
      echo "</form>";
      echo "</td>";
    }
    ?>
    </tr>
  </table>
  <?php else: ?>
  <h2>Nothing found...</h2>
  <?php endif ?>
</body>
</html>
