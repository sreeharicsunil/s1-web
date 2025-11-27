<!-- sortnames.php -->
<?php
$names = ["Alice", "Bob", "Charlie", "David"];

echo "<h3>Original Names:</h3>";
print_r($names);

asort($names);
echo "<h3>Ascending Order (asort):</h3>";
print_r($names);

arsort($names);
echo "<h3>Descending Order (arsort):</h3>";
print_r($names);
?>

