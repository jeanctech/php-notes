<?php
     //* Control Structure - Php

     /* In Php, as in many programming languages, the control structures are
     fundamental to managing the logic and flow of the program. Here I detail the main ones: */

     //? Conditional Control Structures:

     //* 1. **if-else:**

     /* Used to execute one block of code if a condition is met and another block if the condition is met.
     condition is false. */

     $x = 10;

     if ($x > 5) {
         echo "x is greater than 5";
     } else {
        echo "x is less than or equal to 5";
     }

     //* 2. **switch:**

     // Allows you to evaluate a variable and execute different blocks of code depending on the value of the variable.

     $option = "B";
     switch ($option) {
        case "A":
            echo "Option is A";
            break;
        case "B":
            echo "Option is B";
            break;
        default:
            echo "Unrecognized option";
     }

     //? Loop Control Structures (Iterative):

     //* 1. **for:**

     // Used to execute a block of code a specific number of times.

     for ($i = 0; $i < 5; $i++) {
        echo $i . ", ";
     }

     //* 2. **while:**

     // Executes a block of code as long as a specified condition is met.

    $i = 0;

    while ($i < 5) {
        echo $i . ", ";
        $i++;
    }

     //* 3. **do-while:**

    /* Similar to the `while` loop, but ensures that it is executed at least once before checking the
    condition. */

    $i = 0;

    do {
        echo $i . ", ";
        $i++;
    } while ($i < 0);

     //* 4. **foreach:**

     // Used to loop through arrays or collections.

     $colors = array("red", "green", "blue");

     foreach ($colors as $color) {
        echo $color . " ";
     }

     /* These control structures are essential for the logic of the program, allowing you to take
     decisions, execute blocks of code repeatedly, and manipulate data efficiently in
     Php applications. */
?>
