<?php
     //* Throw - Php

     /* In Php, `throw` is used to throw an exception. Exceptions are errors that occur
     during the execution of a script and can be "throw" to handle unexpected situations
     or problems in a controlled manner. */

     //? Syntax:

     // To throw an exception, the `throw` keyword is used, followed by an exception object.

     throw new Exception('An error occurred');

     //? Example of Use:

     /* Imagine a function that validates the age of a user. If the age is less than 18, the function will launch
     an exception. */

     function validateAge($age) {
         if ($age < 18) {
             throw new Exception('The user is a minor');
         } else {
             return "Validated user";
         }
     }

     //? Function call and exception handling

     try {
         echo validateAge(15);
     } catch (Exception $e) {
         echo 'Caught exception: ' . $e->getMessage();
     }

     /* In this case, when `validateAge()` is called with an age of 15, an exception is thrown, since
     the age does not meet the requirement of being over 18. The exception is caught by the `catch` block
     which handles the exception message. */

     /* The use of `throw` is crucial to handle exceptional situations in a controlled manner,
     allowing the programmer to specifically identify and handle errors in their Php applications. */
?>