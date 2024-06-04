<?php
     //* Parameters and Arguments - Php

     /* In Php, the terms "parameters" and "arguments" refer to key parts in the definition and
     function call. */

     //? Parameters:

     /* Parameters are variables that are defined in the declaration of a function. These act as
     placeholders to receive values when the function is called. The parameters are found
     in the definition of the function. */

     //? Example of function declaration with parameters:

     function greet($name) {
         echo "Hello, $name!";
     }

     // Here, `$name` is a parameter of the `greet` function.

     //? Arguments:

     /* Arguments are the actual values that are passed to a function when it is called. These values are
     assigned to the corresponding parameters of the function. The arguments are found in the call of
     the function. */

     //? Example of calling the function with arguments:

     greet("John");

     /* In this case, "John" is the argument passed to the `greet` function. When the function is
     called with that argument, the value of "John" is assigned to the parameter `$name`. */

     //? Relationship between Parameters and Arguments:

     /* The relationship between parameters and arguments is direct. Parameters are the variables defined in
     the function, and the arguments are the actual values that are passed to the function when it is called. To the
     To call a function, you must provide the same number of arguments as the number of parameters
     in the definition of the function, and in the correct order. */

     /* In Php, arguments are passed by value, which means that the actual values are copied to the
     function parameters. However, references can be used to modify the original value
     of a variable passed as an argument. */
?>
