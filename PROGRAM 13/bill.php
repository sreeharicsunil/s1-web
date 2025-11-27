<html>
<head>
<style>
body { font-family: Arial; }
        form { width: 300px; margin: auto; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
.result { margin-top: 20px; font-size: 20px; text-align: center;font-family:Times New Romen; }        
</style>
</head>
<body>
<form method="POST">
<label> Name</label>
<input type="text" name ="name"><br>
<label> Consumed units</label>
<input type="text" name ="unit"><br>
<input type="submit" name="calculate"value="CALCULATE">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST[name];
$unit=$_POST[unit];
$bill=0;
if ($unit<=100){
$bill=$unit*5;
}
elseif($unit<=300){
$bill=$unit*7;
}
elseif($unit>300){
$bill=$unit*10;
}

echo "<div class='result'>Hello <strong>$name</strong><br><br>
You consumed <strong>$unit</strong> unit<br><br>
Your total electricity bill: <strong>$bill</strong></div>";
}
?>
</body>

</html>
