<?php
echo '<pre>';
echo 'Nested Loop <br>';

$score = 90;
if ($score >= 90){
    echo '</pre>';
    echo 'A';
    if ($score >= 90 ){
        echo '</pre>';
        echo '++';
    }
}
?>
<?php
echo '<pre>';
echo 'Nested Loop <br>';

$score = 80;
if ($score < 90){
    echo '</pre>';
    echo 'A';
    if ($score < 90 ){
        echo '</pre>';
        echo '+';
    }
}
?>

<?php
echo '<pre>';
echo 'Nested Loop <br>';

$score = 75;
if ($score < 80){
    echo '</pre>';
    echo 'B';
    if ($score > 70 ){
        echo '</pre>';
        echo '+';
    }
}
?>

