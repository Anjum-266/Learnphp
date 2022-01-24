<?php
echo '<pre>';
echo 'CONTROL STRUCTURES <br>';
echo '1) if statement <br>';
$score =85;
if ($score >= 80) {
    echo '</pre>';
    echo 'A+';
}
?>

<?php
echo '<pre>';
echo '2) Else statement <br>';
$score = 75;
if ($score >= 80) {
    
    echo 'A+';
} else
      {
          echo '</pre>';
        echo 'A';
}

?>

<?php
echo '<pre>';
echo '3) ElseIf Statement <br>';
$score = 75;
if ($score >= 80) {
    echo 'A+';

} elseif ($score >= 70){
    echo 'A';
} elseif ($score >= 60){
    echo 'B';
} elseif ($score >= 50){
    echo 'C';
} elseif ($score >= 40){
    echo 'Fail';
}
?>
<?php
echo '<pre>';
echo 'ElseIf Statement <br>';
$score = 60;
if ($score >= 80) {
    echo 'A+';

} elseif ($score >= 70){
    echo 'A';
} elseif ($score >= 60){
    echo 'B';
} elseif ($score >= 50){
    echo 'C';
} elseif ($score >= 40){
    echo 'Fail';
}
?>
<?php
echo '<pre>';
echo 'ElseIf Statement <br>';
$score = 50;
if ($score >= 80) {
    echo 'A+';

} elseif ($score >= 70){
    echo 'A';
} elseif ($score >= 60){
    echo 'B';
} elseif ($score >= 50){
    echo 'C';
} elseif ($score >= 40){
    echo 'Fail';
}
?>
<?php
echo '<pre>';
echo 'ElseIf Statement <br>';
$score = 49;
if ($score >= 80) {
    echo 'A+';

} elseif ($score >= 70){
    echo 'A';
} elseif ($score >= 60){
    echo 'B';
} elseif ($score > 50){
    echo 'C';
} elseif ($score <= 49){
    echo 'Fail';
}
?>
