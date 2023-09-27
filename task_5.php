<?php
function generatePassword($length)
{
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

  
    $password = '';
    $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
    $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $specialChars[rand(0, strlen($specialChars) - 1)];


    $remainingLength = $length - 4;

    for ($i = 0; $i < $remainingLength; $i++) {
        $pool = $uppercase . $lowercase . $numbers . $specialChars;
        $password .= $pool[rand(0, strlen($pool) - 1)];
    }

  
    $password = str_shuffle($password);

    return $password;
}


$length = 12;
$password = generatePassword($length);
echo "Generated Password: " . $password;

?>