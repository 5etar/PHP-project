<?php

$name = 'Petar';
$number = '5';

echo $name . $number;
echo "<br>";

$number1 = 10;
$number2= 20;

echo $number1 + $number2;
echo "<br>";

$numbers = array(5, 9);
// Array Associating
$numbersAssoc = array("first_number" => 5, "second_number" => 9);

echo $numbers[0];
echo "<br>";

echo $numbersAssoc["first_number"];
echo "<br>";

// If Statement

If (4 > 10) {
    echo "4 > 10";
} elseif (14<10){
 echo "14<10";
} else {
    echo "I love PHP";
}

// forloop
echo "<br><br> ForLoop<br>";
for ($number = 0; $number <= 10; $number++) {
    echo $number . "<br>";
};

switch ($number=10) {


    case $number = 15;
    echo "number is 15";
    break;

    case $number = 14;
    echo "number is 14";
    break;

    case $number = 10;
    echo "number is 10";
    break;
}

function calculation($number1, $number2) {

    $sum = $number1 + $number2;

    return $sum;

}
echo "<br>";
echo calculation(5,9);

echo "<br>";
echo pow(3, 4);

echo "<br>";
echo rand(1, 1000);

echo "<br>";
echo sqrt(100);

echo "<br>";
echo ceil(4.1);

echo "<br>";
echo floor(4.6);

echo "<br>";
echo round(4.6);

