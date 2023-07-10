  <!--<table style="border: thin solid black;border-collapse: collapse;">
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
      echo "<form method='post' action='add.php'>";
      echo "<label>S</label>";
      echo "<label>Ep</label><br>";
      echo "<input value='" . $data["name"] . $data["title"] . "' style='width:0;height:0;border:none;padding:0 !important;' name='title' required>";
      echo "<input type='number' name='season' value='1' min='1' style='width:5ch' required>";
      echo "<input type='number' name='episode' value='1' min='1' style='width:5ch' required>";
      echo "<input type='submit' value='Add/Change'><br>";
      echo "</form>";
      echo "</td>";
    }
    ?>
    </tr>
  </table>
