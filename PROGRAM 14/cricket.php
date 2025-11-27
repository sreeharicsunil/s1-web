<?php
$players=array("Virat Kohli","Rohit Sharma","MS Dhoni","Sachin Tendulkar","Pandyea","Rahul","Arun","Sharmaji","Harinder","Seif")
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>players</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
table{
	width:50%;
	margin:50px auto;
	border-collapse:collapse;
	}
th,td{
	padding:10px;
	border:1px solid#add;
	text-align:center;
	}
th{
	background-color:powderblue;
	}
tr:nth-child(even){
	background-color:pink;
	}
</style>
</head>
<body>
<h1 align="center"><u>INDIAN CRICKET PLAYERS</u></h1>
<center>
<table>
<thead>
<tr>
<th>#</th>
<th>player name</th>
</tr>
</thead>
<tbody>
<?php
$index=1;
foreach($players as $player)
{
	echo"<tr><td>{$index}</td><td>{$player}</td></tr>";
	$index++;
}
?>
</tbody>
</table>
</center>
</body>
</html>
