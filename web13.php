<!-- electricity.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Electricity Bill</title>
</head>
<body>

<h2>Electricity Bill Calculator</h2>

<form method="post" action="">
  Name: <input type="text" name="name" required><br><br>
  Units Consumed: <input type="number" name="units" required><br><br>
  <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $units = $_POST['units'];
    $rate = 5; // example: 5 currency/unit
    $bill = $units * $rate;

    echo "<h3>Electricity Bill for $name:</h3>";
    echo "Units Consumed: $units<br>";
    echo "Total Bill: $bill<br>";
}
?>

</body>
</html>

