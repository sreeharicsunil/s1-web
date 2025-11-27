<!-- players.php -->
<?php
$players = ["Sachin Tendulkar", "Virat Kohli", "MS Dhoni", "Rohit Sharma"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cricket Players</title>
</head>
<body>

<h2>Cricket Players</h2>

<table border="1" cellpadding="5">
  <tr>
    <th>S.No</th>
    <th>Player Name</th>
  </tr>
  <?php
  $i = 1;
  foreach ($players as $player) {
      echo "<tr><td>$i</td><td>$player</td></tr>";
      $i++;
  }
  ?>
</table>

</body>
</html>

