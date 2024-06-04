<?php
     //* Basic Syntax - Php

     /* Of course! The basic syntax of Php is essential to start programming. Here you have one
     overview of some essential elements: */

     //* Opening and Closing Tag:

     // In Php, the code is placed between the opening and closing tags.

     //* Comments:

     //* Two types of comments can be used in Php.

     // One line comment

     /*
       Multi-line comment
       can span multiple lines
     */

     //* Variables:

     /* Variables in Php start with the `$` symbol followed by the variable name. Php is
     Weak type, so there is no need to explicitly declare the variable type. */

     $name = "John";
     $age = 30;

     //* Text Output:

     // To print text in Php, use the `echo` or `print` function.

     echo "Hello, world!";

     //* Control Structures:

     // If-Else:

     $age = 18;

     if ($age >= 18) {
         echo "You are of legal age";
     } else {
         echo "You are a minor";
     }

     //* Loops:

     // For:

     for ($i = 0; $i < 5; $i++) {
         echo $i;
     }

     // While:

     $i = 0;

     while ($i < 5) {
         echo $i;
         $i++;
     }

     //* Functions:

     // The definition of a function in PHP is done with the `function` keyword.

     function greet($name) {
         echo "Hello, $name";
     }

     greet("John");

     //* Arrays:

     // In PHP, you can create indexed or associative arrays.

     // Indexed array
     $colors = array("red", "green", "blue");

     // Associative array
     $ages = array("John" => 30, "Mary" => 25);

     /* These basic elements make up the fundamental structure of Php. Combined, they allow you
     perform operations, conditional logic and loops, as well as work with data and functions, which is
     essential to start programming in Php. */
?>