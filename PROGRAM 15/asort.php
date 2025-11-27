<!DOCTYPE html>
<html>
<?php
$names=array("arya","krishna","anu");
asort($names);
echo"<h3>ascending order(asort):</h3>";
foreach($names as $n){
echo $n."<br>";
}
arsort($names);
echo"<h3>descending order(arsort):<h3>";
foreach($names as $n){
echo $n."<br>";
}
?>
</html>
