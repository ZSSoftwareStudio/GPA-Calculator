<?php

$number = $_POST['number'];

$result = getResult($number);

echo "<h2>" . $result . "</h2>";

function getResult($a)
{
    if ($a >= 80 && $a <= 100) {
        return "You got A+";
    } else if ($a >= 70 && $a <= 79) {
        return "You got A";
    } else if ($a >= 60 && $a <= 69) {
        return "You got A-";
    } else if ($a >= 50 && $a <= 59) {
        return "You got B";
    } else if ($a >= 40 && $a <= 49) {
        return "You got C";
    } else if ($a >= 33 && $a <= 39) {
        return "You got D";
    } else {
        return "You got F";
    }
}
