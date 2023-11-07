<?php include 'includes/header.php';

$number1 = 20;
$number2 = 30;
$number3 = 30;
$number4 = "30";

var_dump($number1 > $number2);
echo "<br>";

var_dump($number1 < $number2);
echo "<br>";

var_dump($number1 >= $number2);
echo "<br>";

var_dump($number1 <= $number2);
echo "<br>";

var_dump($number2 == $number3);
echo "<br>";

var_dump($number2 == $number4);
echo "<br>";

var_dump($number2 === $number4);
echo "<br>";

// If -1 left is lower than right. 0 equal, 1 if left is higher
var_dump($number1 <=> $number2);
echo "<br>";

var_dump($number2 <=> $number3);
echo "<br>";

var_dump($number2 <=> $number1);
echo "<br>";




include 'includes/footer.php';
