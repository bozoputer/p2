<?php

#Create array of words to generate password from
$words = [
     "aardvark"     => 01,
     "banana"       => 02,
     "champion"     => 03,
     "didgeridoo"   => 04,
     "equestrian"   => 05,
     "frolic"       => 06,
     "gregorian"    => 07,
     "history"      => 08,
     "imbecile"     => 09,
     "jingo"        => 10,
     "kindergarten" => 11,
     "lambast"      => 12,
     "microphone"   => 13,
     "nativity"     => 14,
     "ostracize"    => 15,
     "preliminary"  => 16,
     "quotidian"    => 17,
     "rastafarian"  => 18,
     "solstice"     => 19,
     "tranquil"     => 20,
     "umbrage"      => 21,
     "victorian"    => 22,
     "waxen"        => 23,
     "xanadu"       => 24,
     "yesteryear"   => 25,
     "zither"       => 26
];

#Declare variable to store number of words user selected
$length = $_GET['numberOfWords'];

#Ensure user input is valid
if(!empty($length)) {
    if (!is_numeric($length)) {
        echo '<p style="color:blue">Sorry, ' . "$length" . ' is not a number. Please try again</p>';
    } elseif ($length < 3 || $length > 5) {
        echo '<p style="color:red;">Please enter 3, 4, or 5</p>';
    }
} else {
    echo '<p style="color:red;">Please choose password length.</p>';
}

?>
