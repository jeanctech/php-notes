<?php
     //* Exception Handling - Php

     /* In Php, exception handling is done with the structures `try`, `catch` and, optionally,
     `finally`. This allows errors to be controlled and handled in a structured way. */

     //? Throw an Exception:

     // To raise an exception, the `throw` keyword is used. For example:

     function divide($dividend, $divisor) {
         if ($divisor === 0) {
             throw new Exception('Error: Division by zero.');
         }
         return $dividend / $divisor;
     }

     //? Catch and Handle Exceptions:

     /* The `try` block attempts to execute a piece of code that is expected to occur
     exceptions. If an exception is thrown, it is caught in one or more `catch` blocks. */

     try {
         echo divide(10, 0);
     } catch (Exception $e) {
         echo 'Caught exception: ' . $e->getMessage();
     }

     /* In this case, if an attempt is made to divide by zero, an exception is thrown. The `catch` block captures the
     exception of type `Exception`, and a message is printed indicating the type of error. */

     //? Using the `finally` Block (optional):

     /* The `finally` block can be used to define code that will always be executed,
     regardless of whether an exception is thrown or not. */

     try {
         // Code that can throw exceptions
     } catch (Exception $e) {
         // Catching exceptions
     } finally {
     // Code that will always be executed
     }

     /* The `finally` block is useful for performing cleanup tasks, releasing resources, or actions
     finals, ensuring that they are executed, even if an exception occurs. */

     /* Exception handling in Php allows you to handle errors in a structured way, which is
     critical to maintaining application stability and providing a great user experience
     more controlled in unexpected situations. */
?>