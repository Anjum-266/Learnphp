<?php
echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '1)=> && <br>';
$x = true;
$y = false;
echo '</pre>';
var_dump($x && $y);

echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '1)=> && <br>';
$x = true;
$y = true;
echo '</pre>';
var_dump($x && $y);

echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '1)=> && <br>';
$x = false;
$y = false;
echo '</pre>';
var_dump($x && $y);
?>

<?php
echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '2)=> || <br>';
$x = true;
$y = false;
echo '</pre>';
var_dump($x || $y);


echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '2)=> || <br>';
$x = true;
$y = true;
echo '</pre>';
var_dump($x || $y);


echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '2)=> || <br>';
$x = 1;
$y = false;
echo '</pre>';
var_dump($x || $y);
?>
 
 <?php
echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '3)=> uniray ! <br>';
$x = 1;
$y = false;
echo '</pre>';
var_dump(!$x || $y);

echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '3)=> uniray ! <br>';
$x = 0;
$y = false;
echo '</pre>';
var_dump(!$x || $y);

echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '3)=> uniray ! <br>';
$x = 0;
$y = true;
echo '</pre>';
var_dump($x || !$y);
?>

<?php
echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '4)=> and <br>';
$x = 1;
$y = true;
echo '</pre>';
var_dump($x and $y);



echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '4)=> and <br>';
$x = 1;
$y = 0;
echo '</pre>';
var_dump($x and $y);

echo '<pre>';
echo 'LOGICAL OOPERATOR <br>';
echo '4)=> and <br>';
$x = true;
$y = false;
echo '</pre>';
var_dump($x and $y);
?>

<?php
echo '<pre>';
echo 'D/F b/w (&&)and (and) <br>';
$x = true;
$y = false;
$z = $x && $y;
var_dump($z);
?>

<?php
echo '<pre>';
echo 'D/F b/w (&&)and (and) <br>';
$x = true;
$y = false;
$z = $x and $y;
var_dump($z);
?>