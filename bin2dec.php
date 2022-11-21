<?php

$nombre = 10010111000; // Enter binary number


//Function for convert bin to dec
function binToDec ($number){
    $newNumber = str_split($number); // Split number
    $reverse_number = array_reverse($newNumber); // Reverse array for calcul
    $numberDec = 0; // Initialize result
    
    for ($i = 0; $i < count($reverse_number); $i++){ // Loop for calcul 
        $numberConvert = $reverse_number[$i] * pow(2,$i); // number[index] * 2^0 , 2^1...2^x
        $numberDec = $numberDec + $numberConvert; // add numberConvert to numberDec 
    }
    return $numberDec; // return Result of $numberDec
}

echo binToDec($nombre);