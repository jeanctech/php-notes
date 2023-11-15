<?php
     //* Variables - Php

     /* In Php, variables are containers that store information. Here are some details
     on how variables are used in Php. */

     //* Declaration of variables:

     // In Php, variables are declared with the `$` symbol followed by the variable name.

         $name = "John"; // String variable
         $age = 25; // Numeric variable
         $pi = 3.14; //Float variable
         $isStudent = true; // Boolean variable

     //* Rules for Variable Names:

     // - A variable name must begin with a dollar sign `$` followed by a letter or dash low.
     // - May contain letters, numbers and underscores.
     // - Cannot start with a number.

     //* Variable Assignment:

     // Variables are assigned using the assignment operator (`=`).

         $number = 10;
         $text = "Hello";

     //* Global Variables:

     /* Php has predefined variables that are known as global variables and are accessed from any
     part of the script. */

         $_Post; // Data sent by Post
         $_Get; // Data sent by Get
         $_Session; // Session variables
         $_Server; // Server information and Http request

     //* Concatenation of Variables:

         // To combine variables and strings, the concatenation operator (`.`) is used.

         $name = "John";
         echo "Hello, " . $name; // Result: Hello, Juan

     //* Variables of Variables:

     // In Php, it is possible to use the value of one variable as the name of another variable.

         $name = "John";
         $$name = "Perez"; // Will create a variable $Juan with value "Pérez"
         echo $John; // Result: Pérez

     //* Scope of Variables:

     /*
     - Variables in Php can have different scopes, such as global, local or static. Default,
     Variables are local to the scope in which they are defined.

     - Global variables are defined with `global` and can be accessed from anywhere in the
     script.

     - Static variables maintain their value even after leaving the scope in which they exist.
     they defined.

     - Superglobal variables, such as `$_Post`, `$_Get`, and `$_Session`, are accessible anywhere
     of the script.

     - Variables are fundamental in PHP and are used to store and manipulate data, control the
     program flow and store information throughout the execution of the script.
     */
?>