<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .error { color: red; }
        .success { color: green; }
        form { max-width: 400px; margin: auto; }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%; padding: 8px; margin: 8px 0;
        }
        input[type="submit"] {
            background-color: #4CAF50; color: white;
            border: none; padding: 10px 20px; cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .output-box {
    	position: fixed;
    	bottom: 20px;   /* distance from bottom */
    	left: 50%;
   	transform: translateX(-50%);
    	background: #f4f4f4;
    	padding: 15px 25px;
    	border-radius: 5px;
    	box-shadow: 0 0 10px rgba(0,0,0,0.2);
   	width: 80%;
    	max-width: 500px;
}

    </style>
</head>
<body>

<h2>Registration Form</h2>

<?php
$name = $email = $password = $confirm_password = "";
$nameErr = $emailErr = $passwordErr = $confirm_passwordErr = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // NAME VALIDATION
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = trim($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    // EMAIL VALIDATION
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = trim($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // PASSWORD VALIDATION
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters long";
        }
    }

    // CONFIRM PASSWORD VALIDATION
    if (empty($_POST["confirm_password"])) {
        $confirm_passwordErr = "Please confirm your password";
    } else {
        $confirm_password = $_POST["confirm_password"];
        if ($password !== $confirm_password) {
            $confirm_passwordErr = "Passwords do not match";
        }
    }
    

    // If no errors, print user input
if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($confirm_passwordErr)) {
    echo "<div class='output-box'>";
    echo "<div class='success'><h3>Registration Successful!</h3></div>";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>";
    echo "</div>";
}

}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
    <span class="error"><?php echo $nameErr;?></span><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <span class="error"><?php echo $emailErr;?></span><br>

    <label>Password:</label><br>
    <input type="password" name="password">
    <span class="error"><?php echo $passwordErr;?></span><br>

    <label>Confirm Password:</label><br>
    <input type="password" name="confirm_password">
    <span class="error"><?php echo $confirm_passwordErr;?></span><br><br>

    <input type="submit" name="submit" value="Register">
</form>

</body>
</html>
