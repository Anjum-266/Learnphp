<?php
echo '<pre>';
$x=5;

var_dump((array) $x);
echo '</pre>';
?>
<?php
echo '<pre>';
$y='anjum';

var_dump((array) $y);
echo '</pre>';
?>

<?php
echo '<pre>';
echo 'checking existance of key in array <br>';
$array=['a'=>1, 'b'=>null];
echo '</pre>';
var_dump(array_key_exists('a',$array));

?>

<?php
echo '<pre>';
echo 'isset key in array <br>';
$array=['a'=>1, 'b'=>null];
echo '</pre>';
var_dump(isset($array['a']));
?>