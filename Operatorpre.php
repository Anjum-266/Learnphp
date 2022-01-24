<?php
echo '<pre>';
echo 'Operator Precedence <br>';

$x = 5 + 3 * 5;
echo '</pre>';
echo $x;
?>
<?php
echo '<pre>';
$x = (5 + 3) * 5;
echo '</pre>';
echo $x;
?>
<?php
echo '<pre>';
echo 'Associativity <br>';

$x = $y =5;
echo $x;

$x = 5;
$y = 20;
$z =10;
echo '</pre>';
$result = $x / $y * $z;
echo $result;
?>
<?php
echo '<pre>';
echo 'NOn-Asssocistivity <br>';
$x = 5;
$y = 2;
$z = 10;
echo '</pre>';
$result = $x < $y == $z;

//echo $result;


?>
<?php
echo '<pre>';
echo 'Logical Operator Precedence <br>';
$x = true;
$y = false;
echo '</pre>';
var_dump($x && !$y);

echo '<pre>';
$x = true;
$y = false;
$z = true;
echo '</pre>';

var_dump($x && $y || $z);

echo '<pre>';
$x = true;
$y = false;
$z = $x && $y;
echo '</pre>';

var_dump($z);

echo '<pre>';
$x = true;
$y = false;
$z = $x and $y;
echo '</pre>';

var_dump($z);

?>






