<?php

#Create array of words to generate password from
$words = [
     "ant"  => 01,
     "boy"  => 02,
     "cry"  => 03,
     "dab"  => 04,
     "ear"  => 05,
     "fib"  => 06,
     "gut"  => 07,
     "hen"  => 08,
     "imp"  => 09,
     "joy"  => 10,
     "koi"  => 11,
     "lap"  => 12,
     "mud"  => 13,
     "nod"  => 14,
     "owl"  => 15,
     "pap"  => 16,
     "qua"  => 17,
     "rat"  => 18,
     "sun"  => 19,
     "toy"  => 20,
     "urn"  => 21,
     "van"  => 22,
     "wax"  => 23,
     "xis"  => 24,
     "yep"  => 25,
     "zit"  => 26
];

#Declare variables to store user selections from form
$passwordLength = $_GET['numberOfWords'];
$addNumber = $_GET['numberYesOrNo'];
$addSymbol = $_GET['symbolYesOrNo'];

/*
* Ensure user input for number of words is valid
* If user input is valid create a temporary password
*/

if(!empty($passwordLength)) {
    if (!is_numeric($passwordLength)) {
        $nonNumber = '<p class="errors">Sorry, ' . "$passwordLength" . ' is not a number. Please try again.</p>';
    } elseif ($passwordLength < 3 || $passwordLength > 5) {
        $wrongNumber = '<p class="errors">Please enter 3, 4, or 5</p>';
    } elseif (!isset($addNumber) || !isset($addSymbol)) {
        $blank = '<p class="errors">All fields are required. Please try again.</p>';
    } else {
        $tempPassword = array_rand($words, $passwordLength);
        $tempPassword = implode("-",$tempPassword);
    }
} else {
    $badLength = '<p class="errors">Please choose password length.</p>';
}

#Generate random number to add to temporary password if user chooses
$number = rand(1, 99);

/*
* Create an array of symbols to draw from
* in case user selects the 'add symbol' option
*/
$symbol = [
    "!" => 1,
    "@" => 2,
    "#" => 3,
    "$" => 4,
    "%" => 5,
    "^" => 6,
    "&" => 7,
    "*" => 8
];

#Convert symbol array into a string
$symbolAsString = implode('', $symbol);

#Randomly select a symbol from the converted string
$symbolAsString = array_rand($symbol, 1);


#Add number and/or symbol (or neither) to temporary password
if ($addNumber == 'yes' && $addSymbol == 'no') {
    $finalPassword = $tempPassword . $number;
} elseif ($addNumber == 'yes' && $addSymbol == 'yes' && $passwordLength == "") {
    $badLength = '<p class="errors">Please choose password length.</p>';
} elseif ($addNumber == 'yes' && $addSymbol == 'yes') {
    $finalPassword = $tempPassword . $number . $symbolAsString;
} elseif ($addNumber == 'no' && $addSymbol == 'yes') {
    $finalPassword = $tempPassword . $symbolAsString;
} else {
    $finalPassword = $tempPassword;
}

?>
