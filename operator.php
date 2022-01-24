<?php
echo '<pre>';
echo 'Expressions';
$x=5;
$y=5;
$z=$x + $y;
echo '</pre>';
echo $z;
#$z=sum($x, $y);
#if ($x<5)[
  #  echo 'hello';
#];
?>
<?php
echo '<pre>';
echo 'Arthematic Operator +, -, /, %, *';
$x = 10;
$y = 5;
echo '</pre>';
var_dump($x + $y);
?>

<?php
echo '<pre>';
echo 'A (+, -)=> uesd to prefix a variable and convert into float or int';
$x = "10";
$y =  5;
echo '</pre>';
var_dump($x);
?>
<?php
echo '<pre>';
echo '+, - => uesd to prefix a variable and convert into float or int';
$x = +'10';
$y =  5;
echo '</pre>';
var_dump($x);
?>
<?php
echo '<pre>';
echo '+, - => uesd to prefix a variable and convert into float or int';
$x = "10";
$y =  5;
echo '</pre>';
var_dump(-$x);
?>
<?php                                              
echo '<pre>';
echo 'B (Division /)';
$x = "10";
$y =  5;
echo '</pre>';
var_dump($x / $y);
?>

<?php                                              
echo '<pre>';
echo 'C (Modulus %)';
$x = "10";
$y =  3;
echo '</pre>';
var_dump($x % $y);
?>

<?php                                              
echo '<pre>';
echo 'D (Modulus % on floating numbers)';
$x = "12.7";
$y =  3.5;
echo '</pre>';
var_dump(fmod($x , $y));
?>
<?php                                              
echo '<pre>';
echo 'D (Modulus % on floating numbers)';
$x = "-10";
$y =  3;
echo '</pre>';
var_dump($x % $y);
?>

