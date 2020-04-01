<?php // Testing connecting to my MySQL
  require_once '../config/login_mysql_local.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error");
  echo 'Connected to MySQL successfully<br/>';

  $image = 'SD_N18_6168_IG.jpg';
  $query = "SELECT title, YEAR(date_captured)  FROM photos WHERE filename = '$image'";
  $result = $conn->query($query);
  if (!$result) die("Fatal Error");

  $rows = $result->num_rows;
    for ($j = 0; $j < $rows; ++$j) {
      $result->data_seek($j);
      echo 'title: ' . htmlspecialchars($result->fetch_assoc()['title']) .'<br/>';
      $result->data_seek($j);
      echo 'year: ' . htmlspecialchars($result->fetch_assoc()['YEAR(date_captured)']) .'<br/>';
    }

  $result->close();
  $conn->close();

?>
