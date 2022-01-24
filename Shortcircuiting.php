<?php
echo '<pre>';
echo 'Short Circuiting';
$x = false;
$y = true;
echo '</pre>';
var_dump($x || $y);
?>

<?php
echo '<pre>';
$x = true;
$y = false;
function hello(){
    return false;
}
var_dump($x || hello());



echo '<pre>';
$x = true;
$y = false;
function hell(){
    return false;
}
var_dump($x && hell());



echo '<pre>';
$x = true;
$y = true;
function hel(){
    return false;
}
var_dump($x && hel());
?>




