<?php
     //* Try - Php

     /* In Php, `try` is used in conjunction with `catch` to handle exceptions. It is placed around the
     code that can generate an exception, allowing control and handling of errors in a way
     structured. */

     //* Syntax:

     try {
         // Code that can throw an exception
     } catch (Exception $e) {
         //Exception handling
     }

     /*

     - **try:** Contains the code block in which exceptions are expected. If an exception occurs
     inside this block, it is passed to the `catch` block.

     - **catch:** Defines how to handle the caught exception. The type of caught exception is specified
     in parentheses (in this case, `Exception` is the base class for exceptions).

     */

     //* Example of Use:

     /* Imagine a function that tries to divide two numbers. If the divisor is zero, a
     exception. The `try` block will handle this possible exception. */

     function divide($dividend, $divisor) {
         if ($divisor === 0) {
             throw new Exception('Error: Division by zero');
         }
         return $dividend / $divisor;
     }

     try {
         echo divide(10, 0);
     } catch (Exception $e) {
         echo 'Caught exception: ' . $e->getMessage();
     }

     /* In this case, the `try` attempts to execute `divide(10, 0)`, which throws an exception due to the
     division by zero. The exception is caught by the `catch` block, which handles the error and prints a
     specific message related to the exception. */
?>