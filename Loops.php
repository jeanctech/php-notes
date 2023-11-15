<?php
     //* Loops - Php

     /* In Php, as in many other programming languages, there are several types of loops that
     They allow you to execute a block of code repeatedly. The most common loops are `for`, `while`,
     `do-while` and `foreach`. Here are examples of each: */

     //* `for` loop:

     // The `for` loop is used when the number of repetitions is known in advance.

     for ($i = 0; $i < 5; $i++) {
         echo $i . ", ";
     }

     // This will print: 0, 1, 2, 3, 4,

     //* `while` loop:

     // The `while` loop is executed as long as a condition is true.

     $i = 0;

     while ($i < 5) {
         echo $i . ", ";
         $i++;
     }

     // This will print: 0, 1, 2, 3, 4,

     //* `do-while` loop:

     /* Similar to the `while` loop, but ensures that it is executed at least once before checking the
     condition. */

     $i = 0;

     do {
         echo $i . ", ";
         $i++;
     } while ($i < 0);

     // This will print: 0,

     //* `foreach` loop:

     // Ideal for looping through arrays or collections.

     $colors = array("red", "green", "blue");

     foreach ($colors as $color) {
         echo $color . " ";
     }

     // This will print: red green blue

     /* Each type of loop has its own applications. The `for` is useful when you know the number
     exact iterations, `while` and `do-while` are great when the condition is evaluated before the
     execution, and `foreach` is great for looping through elements in arrays or collections without needing
     know its size. */
?>