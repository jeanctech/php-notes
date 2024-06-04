<?php
     //* Common Operations - Php

     /* In Php, there are several common operations that are frequently used to manipulate data,
     work with strings, perform mathematical calculations and more. Here I show you some of the operations
     common: */

     //? Mathematical operations:

     $a = 10;
     $b = 5;

     // Addition
     $sum = $a + $b; // Result: 15

     // Subtraction
     $subtraction = $a - $b; // Result: 5

     // Multiplication
     $multiplication = $a * $b; // Result: 50

     // Division
     $division = $a / $b; // Result: 2

     //? String Manipulation:

     $name = "John";
     $lastname = "Perez";

     // String concatenation
     $fullname = $name . "". $lastname; // Result: "Juan Pérez"

     // Length of a string
     $length = strlen($fullname); // Result: string length

     // Convert to upper and lower case
     $uppercase = strtoupper($name); // Result: "John"
     $lowercase = strtolower($lastname); // Result: "Perez"

     //? Operations with Arrays:

     $colors = array("red", "green", "blue");

     // Add an element to the end of the array
     $colors[] = "yellow";

     // Count elements in an array
     $amount = count($colors); // Result: number of elements in the array

     // Sort an array
     sort($colors); // Sort the array alphabetically

     //? Control Structures:

     $age = 20;

     // If-else to make decisions
     if ($age >= 18) {
         echo "You are of legal age";
     } else {
         echo "You are a minor";
     }

     // for loop to iterate over a range of numbers
     for ($i = 0; $i < 5; $i++) {
         echo $i . " ";
     }

     /* These operations and structures are essential in PHP to perform mathematical operations,
     manipulate data, work with strings, control program flow, and manipulate arrays, which will give you
     allows you to perform a wide range of tasks in web application development and more. */
?>