<?php
echo '<pre>';
echo 'ARRAY OPERATOR <br>';
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f'];
$z = $x + $y;
echo '</pre>';
print_r($z);
?>

<?php
echo '<pre>';
echo 'ARRAY OPERATOR With More <br>';
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f', 'g', 'h','i'];
$z = $x + $y;
echo '</pre>';
print_r($z);
?>

<?php
echo '<pre>';
echo 'Associative ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['d'=>4, 'e'=>5, 'f'=>6, 'g'=>7, 'h'=>8,'i'=>9];
$z = ($x + $y);
echo '</pre>';
print_r($z);
?>

<?php
echo '<pre>';
echo 'Comparison ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['a'=>1, 'b'=>2, 'c'=>3];
$z = ($x == $y);
echo '</pre>';
var_dump($z);
?>

<?php
echo '<pre>';
echo 'Loose Comparison ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['a'=>4, 'b'=>2, 'c'=>3];
$z = ($x == $y);
echo '</pre>';
var_dump($z);
?>

<?php
echo '<pre>';
echo 'Loose Comparison ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['a'=>4, 'b'=>'2', 'c'=>3];
$z = ($x == $y);
echo '</pre>';
var_dump($z);
?>

<?php
echo '<pre>';
echo 'Loose Comparison ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['c'=>4, 'a'=>2, 'b'=>3];
$z = ($x == $y);
echo '</pre>';
var_dump($z);
?>

<?php
echo '<pre>';
echo 'Strict Comparison ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['e'=>1, 's'=>2, 'f'=>3];
$z = ($x == $y);
echo '</pre>';
var_dump($z);
?>

<?php
echo '<pre>';
echo 'Strict Comparison ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['a'=>1, 'c'=>2, 'b'=>3];
$z = ($x == $y);
echo '</pre>';
var_dump($z);
?>

<?php
echo '<pre>';
echo 'Strict Comparison ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['a'=>'1', 'c'=>2, 'b'=>3];
$z = ($x == $y);
echo '</pre>';
var_dump($z);
?>


<?php
echo '<pre>';
echo 'Loose Inequality ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['a'=>1, 'c'=>2, 'b'=>3];
$z = ($x != $y);
echo '</pre>';
var_dump($z);
?>



<?php
echo '<pre>';
echo 'Loose Inequality ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['a'=>1, 'b'=>2, 'c'=>3];
$z = ($x != $y);
echo '</pre>';
var_dump($z);
?>

<?php
echo '<pre>';
echo 'Strict Inequality ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['a'=>1, 'b'=>2, 'c'=>3];
$z = ($x !== $y);
echo '</pre>';
var_dump($z);
?>

<?php
echo '<pre>';
echo 'Strict Inequality ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['c'=>1, 'b'=>2, 'a'=>3];
$z = ($x !== $y);
echo '</pre>';
var_dump($z);
?>

<?php
echo '<pre>';
echo 'Strict Inequality ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>3];
$y = ['a'=>2, 'b'=>2, 'c'=>3];
$z = ($x !== $y);
echo '</pre>';
var_dump($z);
?>

<?php
echo '<pre>';
echo 'Strict Inequality ARRAY <br>';
$x = ['a'=>1, 'b'=>2, 'c'=>6];
$y = ['a'=>1, 'b'=>6, 'c'=>3];
$z = ($x !== $y);
echo '</pre>';
var_dump($z);
?>