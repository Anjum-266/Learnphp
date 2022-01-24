<?php
echo '<pre>';
echo '4 Comparison operator <br>';
echo 'Loose Comparison';
$x = 5;
$y = 25;
echo '</pre>';
var_dump($x == $y);
?>

<?php
echo '<pre>';
echo '4 Comparison operator <br>';
echo 'Strict Comparison';
$x = 5;
$y = 12;
echo '</pre>';
var_dump($x === $y);
?>
<?php
echo '<pre>';
echo '4 Comparison operator <br> string vs other';
$x = '5';
$y = "5";
echo '</pre>';

var_dump($x===$y);
?>

<?php
echo '<pre>';
echo 'Checking Inequility';
$x = 20;
$y = 45;
echo '</pre>';
var_dump($x != $y);
echo '<br>';
var_dump($x !== $y);
echo '<br>';
var_dump($x <> $y);
echo '<br>';
var_dump($x <= $y);
echo '<br>';
var_dump($x >= $y);
echo '<br>';
var_dump($x <=> $y);
?>
<?php
echo '<pre>';
echo 'Uses Of Loose Comparison';
$x = "Hello World";
$y = strpos ($x, 'H');
echo '</pre>';
if ($y ==false) {
    echo "H not found";
}
else {
    echo "H Found at Index <br>" .$y;
}
?>
<?php
echo '<pre>';
echo 'Uses Of Strict Comparison';
$x = "Hello World";
$y = strpos ($x, 'H');
echo '</pre>';
if ($y ===false) {
    echo "H not found";
}
else {
    echo "H Found at Index <br>" .$y;
}
?>

<?php
echo '<pre>';
echo 'Conditional Operator 1 (?: =>Ternary operator)';
$x = "Hello World";
$y = strpos ($x, 'H');
$result = $y === false ?'H not found':'H found at index <br>'. $y;
echo '</pre>';
echo $result;

?>
<?php
echo '<pre>';
echo ' Conditonal Operator 2 (?? => Null Coalescing Operator)';
$x = null;
$y = $x ?? 'Hello';
echo '</pre>';
var_dump($y);
?>

<?php
echo '<pre>';
echo ' unknwon variable';

$y = $x ?? 'Hello';
echo '</pre>';
var_dump($y);
?>

<?php
echo '<pre>';
echo ' Known variable';
$x = false;
$y = $x ?? 'Hello';
echo '</pre>';
var_dump($y);
?>

