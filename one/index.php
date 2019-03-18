<?php
// Homework Questions 1A + 1B
$name = "Eric";
$color = "blue";
$fooda = "mac";
$foodb = "cheese";
$status = "still hungry";

echo "Hi! My name is " . $name . " and I like the color " . $color . ". ";
echo "I just ate " . $fooda . " and " . $foodb . " but I'm " . $status . "! ";

// Homework Question 1C

$time = date("l jS \of F Y h:i:s A");

echo "It is " . $time . ", and therefore, the hour is ";

$t = date("H");

if ( $t & 1 ) {
    echo "odd."; //odd
  }

else {
    echo "even."; //even
  }
?>
