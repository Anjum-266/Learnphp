<?php
//echo '<pre>';
//echo 'LOOP IN PHP <br>';
//echo '1) While Loop <br>';
//$i = 0;
//while ($i <= 15) {
    //echo '</pre>';
//    echo $i++;
//}
//echo '<pre>';
//$i = 0;
//while (true){
  //  if ($i >= 15){
    //    break;
    //}
    //echo '</pre>';
    //echo $i++;
//}
//echo '<pre>';
//echo 'Nested In While Loop <br>';

//$i = 0;
//while (true) {
  //  while ($i > 15){
    //    break 2;
    //}
   // echo '</pre>';
    //echo $i++;
//}

//echo '<pre>';
//$i = 0;
//while (true) {
  //  while ($i >= 10){
    //    break 2;
    //}
    //echo '</pre>';
    //echo $i++;
//}
//echo '<pre>';
//$i = 0;
//while ($i <= 15){
  //  if ($i % 2 === 0){
    //    $i++;
      //  continue;
    //}
    //echo '</pre>';
    //echo $i++;
//}
//echo '<pre>';
//$i = 0;
//while ($i <= 15){
  //  if ($i % 2 === 0){
    //    $i++;
      //  continue;
    // }
    //echo '</pre>';
    //echo $i++. ',';
//}
//?>

//<?php
//echo '<pre>';
//echo '2) Do While Loop <br>';
//$i = 0;
//do {
    //echo '</pre>';
  //  echo $i++;
//}
//while ($i <= 15);

//echo '<pre>';
//$i =  3;
//do {
    //echo '</pre>';
  //  echo $i++;
//}
//while ($i <= 15);
//?>

//<?php
//echo '<pre>';
//echo '3) For Loop <br>';
//for ($i = 0; $i < 15; $i++){
  //  echo '</pre>';
    //echo $i;
   

//}
//echo '<br>';
//echo "OR <br>";
//echo '<br>';
//for ($i = 0; $i < 15; print  $i, $i++ );

//echo '<br>';
//echo "OR <br>";
//echo '<br>';
//for ($i = 0; print $i, $i < 15; $i++ ){

//};
//?>

//<?php
//echo '<pre>';
//$text = ['a','b','c','d'];
//for ($i= 0; $i < count ($text);$i++)
//{
  //  echo '</pre>';
    //echo $text [$i]. '<br/>';
//}
//?>
//<?php
//echo '<pre>';
//$text = ['a','b','c','d'];
//for ($i= 0, $Length = count ($text);
  //     $i < $Length; $i++){
    //       echo '</pre>'; 
      //     echo $text[$i]. '<br/>';
       //}
//?>

//<?php
//echo '<pre>';
//echo '4) For Each Loop <br>';
//$skills = ['writting','reading','listining','speaking'];
//foreach ($skills as $art){
  //  echo $art. '</br>';
//}
//echo '<pre>';
//echo '4) For Each Loop <br>';
//$skills = ['writting','reading','listining','speaking'];
//foreach ($skills as $key => $skills){
  //  echo $key. ':'. $skills. '</br>';

//}

//echo '<pre>';
//echo '4) For Each Loop <br>';
//$skills = ['writting','reading','listining','speaking'];
//foreach ($skills as $key => & $skills){
    //$skills = 'thinking';
    //echo '</pre>';
    //print_r($skills);

//}

//echo '<pre>';
//echo '4) For Each Loop <br>';
//$programminglanguages = ['writting','reading','listining','speaking'];
//foreach ($programminglanguages as $languages => & $programminglanguages){
     
    //echo $key . ':' . $programminglanguages. '<br />';
//}
    //echo $programminglanguages;

echo '<pre>';
//echo ' Destroy Array <br>';
$art = ['writting','reading','listining','speaking'];
//foreach ($art as $key => & $art){
     
    //echo $key . ':' . $art. '<br />';
//}
 
    //$art = 'thinking';
    //echo '</pre>';
    print_r($art);
    unset ($art);
    print_r($art);
?>
