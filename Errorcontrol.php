<?php
$x = @file('foo.txt');

?>
<?php
echo '<pre>';
echo 'INCREMENT <br>';
echo 'Pre-Increment <br>';
$x = 5;
echo ++$x;
echo '</pre>';
echo $x;
?>
<?php 
echo '<pre>';
echo 'Post Inncrement <br>';
$x = 5;
echo $x++;
echo '</pre>';
echo $x;
?>

<?php
echo '<pre>';
echo 'DECREMENT <br>';
echo 'Pre-Decrement <br>';
$x = 5;
echo --$x;
echo '</pre>';
echo $x;
?>

<?php
echo '<pre>';
echo 'DECREMENT <br>';
echo 'Post Decrement <br>';
$x = 5;
echo $x--;
echo '</pre>';
echo $x;

?>
<?php

echo '<pre>';
$x = null;
echo '</pre>';
echo ++$x;
?>

<?php
echo '<pre>';
echo 'Decrement on String <br>';
$x ='abc <br>';
echo --$x;
?>
<?php
echo '<pre>';
echo 'Increment on String <br>';
$x = 'hde <br>';
echo ++$x;
echo '</pre>';
?>


