<?php

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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary To Decimal</title>
</head>
<body>
    <header></header>

    <main>
        <form action="POST">
            <label for="binary">Enter binary number</label>
            <input type="number" name="binary">

            <button>Convert</button>
        </form>

        <span>Binary to Decimal : <?= binToDec($_POST["binary"]); ?></span>
    </main>

    <footer></footer>
    
</body>
</html>