<!-- registration.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post" action="">
  Name: <input type="text" name="name" required><br><br>
  Email: <input type="email" name="email" required><br><br>
  Password: <input type="password" name="password" required><br><br>
  <input type="submit" name="submit" value="Register">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "<h3>Registered Details:</h3>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
}
?>

</body>
</html>

