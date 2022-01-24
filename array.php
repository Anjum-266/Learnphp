
<?php
echo '<pre>';
echo 'For printing Entire Array with index and datatype<br>';
echo '</pre>';
?>
<?php

$programminglanguages =['php','java','python'];
$programminglanguages[] = 'php';
echo $programminglanguages[0];

var_dump($programminglanguages);

?>
<?php
echo '<pre>';
echo 'For printing Array in Better Manner<br>';
echo '</pre>';
?>
<?php
$programminglanguages =['php','java','python'];
$programminglanguages[1] = 'c++';

echo '<pre>';
print_r($programminglanguages);

echo '</pre>';
echo count($programminglanguages);

?>

<?php
echo '<pre>';
echo 'Push element in last row of array <br>';
echo '</pre>';
?>

<?php

$programminglanguages[]='dev c';

echo '<pre>';
print_r($programminglanguages);
echo '</pre>'; 

echo count($programminglanguages);
echo '</pre>';
?>

<?php
echo '<pre>';
echo 'Push element in an array <br>';
echo '</pre>';
?>

<?php

array_push($programminglanguages, 'c++','java','cobol');

echo '<pre>';
print_r($programminglanguages);
echo '</pre>'; 

echo '</pre>';
?>

<?php
echo '<pre>';
echo 'Arraay contains custom keys <br>';
echo '</pre>';
?>
<?php

$programminglanguages = [
    'php'=>'8.0',
    'python'=>'3.9',
];
echo '<pre>';
print_r($programminglanguages);
echo '</pre>';
?>
<?php
echo '<pre>';
echo 'Array access by custom keys <br>';
echo '</pre>';
?>
<?php
echo 'The version of php is <br>';
echo $programminglanguages['php'];
?>
<?php
echo '<pre>';
echo 'Adding other languages to the existing Array<br>';
echo '</pre>';
?>
<?php
$programminglanguages= [
    'insta'=>'1.56',
    'calcu'=>'2.45',
 ];

echo '<pre>';
print_r($programminglanguages);
echo '</pre>';
?>

<?php
echo '<pre>';
echo 'Accessing array element by specifying keys into variables <br>';
echo '</pre>';

$newlang = 'go';
$programminglanguages['newlang']='11.2';
?>

<?php
echo '<pre>';
echo 'Multiple Version / Multiple Version;r  <br>';
echo '</pre>';
$programminglanguages =[
    'php'=>[
          'creator'=>'ash',
          'website'=>'google',
          'extention'=>'.php',
          'isopensource'=>true,
          'versions'=>[
            ['version'=>3.9, 'releasedate'=>'oct 5,2000'],
            ['version'=>3.8, 'releasedate'=>'oct 5,2021'],
        ],
    ],
];


echo '<pre>';
print_r($programminglanguages);
echo '</pre>';
echo '<pre>';
echo 'Accessing Extention and website <br>';
echo '</pre>';
echo $programminglanguages['php']['website'];

echo '<pre>';
echo 'For Sub-Array <br>';
echo '</pre>';
echo $programminglanguages['php']['versions'][0]['releasedate'];
?>
<?php
echo '<pre>';
echo 'Array Overwritting <br>';
echo '</pre>';
$array =[0=>'anjum',1=>'me',1=>'mine'];
print_r($array);
?>
<?php
echo '<pre>';
echo 'Printing one/Single value <br>';
echo '</pre>';
$array =[true=>'anjum',1=>'ashraf',1=>'hussain',1.5=>'AHA'];
print_r($array);
?>
<?php
echo '<pre>';
echo 'For Null <br>';
echo '</pre>';
echo '<pre>';
$array =[true=>'anjum',1=>'ashraf',1=>'hussain',1.5=>'AHA',null=>'Anj'];
print_r($array);
echo '</pre>';
echo $array[''];
?>
<?php
echo '<pre>';
$array=['a','b','c','d','e'];
print_r($array);
echo '</pre>';
?>
<?php
$array=['a','b',50=>'c','d','e'];
echo '<pre>';
print_r($array);
echo '</pre>';
?>
<?php
echo '<pre>';
echo 'REMOVING ELEMENTS FROM ARRAY <br>';
echo 'Array Pop <br>';
$array=['a','b',50=>'c','d','e'];'<br>';
echo '<pre>';
echo array_pop($array);'<br>';
echo '</pre>';
print_r($array);'<br>';

echo '</pre>';
?>
<?php
echo '<pre>';
echo 'REMOVING ELEMENTS FROM ARRAY <br>';
echo 'Array Shifting <br>';
$array= ['a','b',50=>'c','d','e'];
echo '<pre>';
echo array_shift($array);
echo '</pre>';
print_r($array);

echo '</pre>';
?>

<?php
echo '<pre>';
echo 'To Destroy Whole Array <br>';
$array= ['a','b',50=>'c','d','e'];
unset($array);
print_r($array);
echo '</pre>';
?>

<?php
echo '<pre>';
echo 'To Remove specific array element <br>';

$array=['a','b',50=>'c','d','e'];
echo '<pre>';
unset($array[50]);
echo '</pre>';
print_r($array);

echo '</pre>';
?>
<?php
echo '<pre>';
echo 'Removing Multiple Index <br>';

$array=['a','b',50=>'c','d','e'];
echo '<pre>';
unset($array[50],$array[1]);
echo '</pre>';
print_r($array);

echo '</pre>';

?>

<?php
echo '<pre>';
$Array=[1, 2, 3];
unset($Array[0], $Array[1], $Array[2]);
echo '</pre>';
print_r($Array);

?>
<?php
echo '<pre>';
$array[3]=1;

print_r($array);
echo '</pre>';
?>
