<?php
function getOddNumbers($numbers)
{
    $oddNumbers = array_filter($numbers, function ($number) {
        return $number % 2 !== 0; 
    });

    return array_values($oddNumbers); 
}


$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$oddNumbers = getOddNumbers($numbers);

echo "Odd Numbers: ";
print_r($oddNumbers);

?>