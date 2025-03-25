<?php
/* operators in php
1. operators in php
2.Arthmetic Operators
3. Comparison Operators
4. Logical Operators
*/


//1. operators.php
$a = 45;
$b = 8;

echo "when a+b, the result is :".($a + $b)."<br>";
echo "when a-b, the result is :".($a - $b)."<br>";
echo "when a*b, the result is :".($a * $b)."<br>";
echo "when a/b, the result is :".($a / $b)."<br>";
echo "when a%b, the result is :".($a % $b)."<br>";
echo "when a**b, the result is :".($a ** $b)."<br>";

// 2.Assignment Operators
echo "---------------------Assig op------------------------<br>";

$a += 6;
echo "for a, the value is ". $a."<br>";

$a -= 6;
echo "for a, the value is ". $a."<br>";

$a *= 6;
echo "for a, the value is ". $a."<br>";

$a /= 6;
echo "for a, the value is ". $a."<br>";

$a %= 6;
echo "for a, the value is ". $a."<br>";

$a **= 6;
echo "for a, the value is ". $a."<br>";

//3. Comparision operators
echo "----------------------comp op-------------------------<br>";

$x = 7;
$y = 9;

echo "for x == y, the result is ";
echo var_dump($x == $y);
echo "<br>";

echo "for x <> y , the result is ";
echo var_dump($x <> $y);
echo "<br>";


// 4. logical operators
echo " -------------------logical ope----------------------<br>";


$m = true;
$n = false;

echo "for m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "for m and n, the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "for m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "for m || n, the result is";
echo var_dump($m || $n);
echo "<br>";



?>
