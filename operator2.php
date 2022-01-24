<?php
echo '<pre>';
echo 'Assignment Operator';
$x = 5;
$y = 10;
echo '</pre>';
var_dump($x+$y);
?>

<?php
echo '<pre>';
echo 'Assignment Operator';
$x = $y = 15;
echo '</pre>';
var_dump($x, $y);
?>

<?php
echo '<pre>';
echo 'Assignment Operator';
$x = 5 +($y =10);
echo '</pre>';
var_dump($x, $y);
?>

<?php
echo '<pre>';
echo 'Assignment Combined Operator';
$x = 5;
$x = $x * 3;
echo '</pre>';
var_dump($x);
?>

<?php
echo '<pre>';
echo 'Assignment Combined Operator';
$x = 5;
$x *= 3;
echo '</pre>';
var_dump($x);
?>

<?php
echo '<pre>';
echo '3 String Operator';
$x = 'Hello';

$x = $x.'World';
echo '</pre>';
echo $x
?>;