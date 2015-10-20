<?php

//Loop through the numbers 1 - 500
for ($number = 1; $number <= 500; ++$number) {

    $output = $number; //Set the initial output

    if (($number % 3 === 0) && ($number % 5 === 0)) { //Use the modulus operator to see if it is divisible by 3 and 5
        $output .= ' FIZZBUZZ';
    } elseif ($number % 3 === 0) { //Check to see if it is divisible by just 3
        $output .= ' FIZZ';
    } elseif ($number % 5 === 0) { //Check to see if it is divisible by just 5
        $output .= ' BUZZ';
    }
    if (isPrime($number)) { //Check to see if it is probably a prime number
        $output .= ' FiZZBUZZ++';
    }

    $output .= "\n";

    file_put_contents('fizzbuzz.log', $output, FILE_APPEND); //Log the output to a log file

    echo $output; //Echo the output to the screen
}


/**
 * Function for checking to see if the given number is likely to be prime
 *
 * @param int $number
 * @return bool
 */
function isPrime($number = 0) {

    if (preg_match('/^1?$|^(11+?)\1+$/', str_repeat('1', $number))) {
        return false;
    }
    return true;

}