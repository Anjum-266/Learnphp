<?php
echo '<pre>';
echo 'BITWISE OPERATOR <br>';
echo '1)=> &-operator <br>';
$x = 6;
$y = 3;
echo '</pre>';
var_dump($x & $y);
?>

<?php
echo '<pre>';

echo '2)=> | -operator <br>';
$x = 6;
$y = 3;
echo '</pre>';
var_dump($x | $y);
?>


<?php
echo '<pre>';

echo '3)=> ^(xor) -operator <br>';
$x = 6;
$y = 3;
echo '</pre>';
var_dump($x ^ $y);
?>

<?php
echo '<pre>';

echo '4)=> ~(nevigation) -operator <br>';
$x = 6;
$y = 3;
echo '</pre>';
var_dump(~$x & $y);

echo '<pre>';

echo '4)=> ~(nevigation) -operator <br>';
$x = 6;
$y = 3;
echo '</pre>';
var_dump($x & ~$y);
?>

<?php
echo '<pre>';

echo '5)=> A >> (Shift Bits To Left) -operator <br>';
$x = 6;
$y = 3;
echo '</pre>';
var_dump($x << $y);

echo '<pre>';

echo '5)=> A >> (Shift Bits To Right) -operator <br>';
$x = 6;
$y = 3;
echo '</pre>';
var_dump($x >> $y);

echo '<pre>';

echo '5)=> A >> (Shift Bits To Right) -operator <br>';
$x = 6;
$y = 1;
echo '</pre>';
var_dump($x >> $y);