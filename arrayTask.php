<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!--------------------Q1------------------------>
<?php
echo "<br>";
echo "---------------------------------------Q1---------------------------------------------";
echo "<br>";
$color = array('white', 'green', 'red', );

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" . "\n";

?>



<br>
<br>
<!--------------------Q2------------------------>
<?php
echo "<br>" ."--------------------------------------Q2----------------------------------------------";
echo "<br>";
echo "<br>";

$color = array('white', 'green', 'red');
 implode(', ', $color) . ", ";
sort($color);
echo "<ul>";

foreach ($color as $y) {
    echo "<li>$y</li>";
}

echo "</ul>";
?>

<br>
<!--------------------Q3------------------------>

<?php
echo "<br>" ."---------------------------------------Q3---------------------------------------------";
$cities = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", 
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", 
    "Portugal" => "Lisbon", "Spain" => "Madrid"
);

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital" . "<br>";
}
?>


<br>
<br>
<!--------------------------Q4-------------------------------------->

<?php
echo "<br>" ."-----------------------------------Q4-------------------------------------------------";
echo "<br>";
echo "<br>";

$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo reset($color) . "\n";

?>


<br>
<br>
<!--------------------------Q5-------------------------------------->



<?php
echo "<br>" ."-----------------------------------------Q5-------------------------------------------";
echo "<br>";

$original = array( '1', '2', '3', '4', '5' );

echo 'Original array : ' . "\n";

foreach ($original as $x) {
    echo "$x ";
}
$inserted = '$';

array_splice($original, 3, 0, $inserted);

echo " \n After inserting '$' the array is : " . "\n";

foreach ($original as $x) {
    echo "$x ";
}
echo "\n";

?>


<br>
<br>
<!--------------------------Q6-------------------------------------->

<?php
echo "<br>" ."-----------------------------------------Q6-------------------------------------------";
echo "<br>";
echo "<br>";


$fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
);

ksort($fruits);

foreach ($fruits as $key => $value) {
    echo "$key = $value <br>";
}
?>

<br>
<br>
<!------------------   Q7--------------------------------------------->

<?php
echo "<br>" ."------------------------------------------Q7------------------------------------------";
echo "<br>";
echo "<br>";

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$temp_array = explode(',', $month_temp);

$tot_temp = 0;
$temp_array_length = count($temp_array);

foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}

$avg_high_temp = $tot_temp / $temp_array_length;

echo "Average Temperature is : " . $avg_high_temp . " <br>";

sort($temp_array);

echo " List of Seven lowest temperatures : " ;
for ($i = 0; $i < 7; $i++)
{ 
    echo $temp_array[$i] . ", " ;
   
}
echo "<br>";
echo "List of Seven highest temperatures :";
for ($i = ($temp_array_length - 7); $i < $temp_array_length; $i++)
{
    echo $temp_array[$i] . ",";
}

?>

<br>
<br>
<!--------------------------Q8-------------------------------------->

<?php
echo "<br>" ."------------------------------------------Q8------------------------------------------";

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";


?>


<br>
<br>
<!--------------------------Q9-------------------------------------->
<?php
echo "<br>" ."------------------------------------------Q9------------------------------------------";

$colors = array("red", "blue", "white", "yellow");

$upperCaseColors = array_map('strtoupper', $colors);

echo "<pre>";
for ($i = 0; $i < count($upperCaseColors); $i++) {
    echo $upperCaseColors[$i] . "\n";
}
echo "</pre>";


?>

<br>
<br>
<!--------------------------Q10-------------------------------------------------------------->
<?php
echo "<br>" ."------------------------------------------Q10------------------------------------------";

$colors = array("RED", "BLUE", "WHITE", "YELLOW");

$lowerCaseColors = array_map('strtolower', $colors);

echo "<pre>";
for ($i = 0; $i < count($lowerCaseColors); $i++) {
    echo $lowerCaseColors[$i] . "\n";
}
echo "</pre>";

?>





<br>
<br>
<!------------------------------Q11------------------------------------------------------------------------->

<?php
echo "<br>" ."------------------------------------------Q11------------------------------------------";
echo "<br>";
echo "<br>";

echo implode(",", range(200, 250, 4)) . "\n";
?>


<!------------------------------Q12------------------------------------------------------------------------->


<?php
echo "<br>" ."------------------------------------------Q12------------------------------------------";
echo "<br>";
echo "<br>";
$my_array = array("abcd", "abc", "de", "hjjj", "g", "wer");

$new_array = array_map('strlen', $my_array);

echo "The shortest array length is " . min($new_array) .
    ". The longest array length is " . max($new_array) . '.';

?>


<!------------------------------Q13------------------------------------------------------------------------->

<?php

echo "<br>" ."------------------------------------------Q13------------------------------------------";
echo "<br>";
echo "<br>";
$n = range(11, 20);

shuffle($n);

for ($x = 0; $x < 10; $x++)
{
    echo $n[$x] . ' ';
}

echo "\n";

?>

<!------------------------------Q14------------------------------------------------------------------------->

<?php
echo "<br>" ."------------------------------------------Q14------------------------------------------";
echo "<br>";
echo "<br>";
function min_values_not_zero(Array $values)
{
    return min(array_diff(array_map('intval', $values), array(0)));
}

print_r(min_values_not_zero(array(-1, 0, 1, 12, -100, 1)) . "\n");
?>




<!------------------------------Q15------------------------------------------------------------------------->


<?php
echo "<br>" ."------------------------------------------Q15------------------------------------------";
echo "<br>";
echo "<br>";

$inputArray = array(5, 3, 1, 3, 8, 7, 4, 5, 9, 3);
echo "original Array: ";
print_r($inputArray);
echo "<br> ";

sort($inputArray);

echo "Sorted Array: ";
print_r($inputArray);
?>



<!------------------------------Q16------------------------------------------------------------------------->


<?php
echo "<br>" ."------------------------------------------Q16------------------------------------------";
echo "<br>";
echo "<br>";

function floorDec($number, $precision, $separator)
{
    $number_part = explode($separator, $number);

    $number_part[1] = substr_replace($number_part[1], $separator, $precision, 0);

    if ($number_part[0] >= 0) {
        $number_part[1] = floor($number_part[1]);
    }
    else {
        $number_part[1] = ceil($number_part[1]);
    }

    $ceil_number = array($number_part[0], $number_part[1]);
    return implode($separator, $ceil_number);
}

print_r(floorDec(1.155, 2, ".") . "\n");
echo"<br>";
print_r(floorDec(100.25781, 4, ".") . "\n");
echo"<br>";

print_r(floorDec(-2.9636, 3, ".") . "\n");
?>


<!------------------------------Q17------------------------------------------------------------------------->


<?php
echo "<br>" ."------------------------------------------Q17------------------------------------------";
echo "<br>";
echo "<br>";
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";


$result = implode("," , array_unique(array_merge(explode(",",$list1),explode(",", $list2))));

echo $result."\n";
?>



<!------------------------------Q18------------------------------------------------------------------------->


<?php

echo "<br>" ."------------------------------------------Q18------------------------------------------";
echo "<br>";
echo "<br>";
function array_uniq($my_array, $value) 
{ 
    $count = 0; 
    
    foreach($my_array as $array_key => $array_value) 
    { 
        if (($count > 0) && ($array_value == $value)) 
        { 
            unset($my_array[$array_key]); 
        } 
        
        if ($array_value == $value) $count++; 
    } 
    
    return array_filter($my_array); 
} 

$numbers = array(4, 5, 6, 7, 4, 7, 8, 9, 9);

echo "<pre>";

print_r(array_uniq($numbers, 7));
echo "</pre>";

?>




<!------------------------------Q19------------------------------------------------------------------------->


<?php
echo "<br>" ."------------------------------------------Q19------------------------------------------";
echo "<br>";
echo "<br>";

function isSubset($subset, $superset) {
    return empty(array_diff($subset, $superset));
}

$subset = [1, 2, 3];
$superset = [1, 2, 3, 4, 5];

if (isSubset($subset, $superset)) {
    echo "Array is a subset";
} else {
    echo "Array is not a subset";
}
echo "<br>";

?>





</body>
</html>

