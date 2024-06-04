<?php
     //* Functions - Php

     /* Functions in Php are blocks of reusable code that perform specific tasks. They can
     accept parameters, perform operations and return a result. Here I show you how to create and
     use functions in Php. */

     //? Declaration of a function:

     function greet() {
         echo "Hello, welcome!";
     }

     //? Call to a function:

     // Once you define a function, you can call it anywhere in your code.

     greet(); // Will print: Hello, welcome!

     //? Functions with parameters:

     // Functions can accept parameters to customize their behavior.

     function greetPerson($name) {
         echo "Hello, $name!";
     }

     greetPerson("John"); // Will print: Hello, Juan!

     //? Return value:

     // Functions can return a result using the `return` keyword.

     function add($a, $b) {
         return $a + $b;
     }

     $result = add(3, 5); // $result will contain the value 8

     //? Default parameters:

     // You can define default values for the parameters of a function.

     function greetUser($name = "Guest") {
         echo "Hello, $name!";
     }

     greetUser(); // Will print: Hello, Guest!
     greetUser("Ana"); // Will print: Hello, Ana!

     /* Functions are fundamental in Php programming, they allow the code to be modularized, which makes
     make it more readable, maintainable and reusable. They offer flexibility to adapt to different
     situations and needs within your application. */
?>
