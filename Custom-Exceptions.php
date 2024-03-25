<?php
     //* Custom Exceptions - Php

     /* In Php, you can create and throw custom exceptions to handle specific situations
     inside your code. This allows you to capture and deal with errors more specifically. To create
     custom exceptions, you can extend Php's `Exception` base class. */

     //? Here is an example of how to create and use a custom exception.

     class MyCustomException extends Exception {
         public function CustomMessage() {
             // You can customize the exception message
             return 'A custom exception has occurred!';
         }
     }

     // Throw the custom exception
     function divide($dividend, $divisor) {
         if ($divisor === 0) {
             throw new MyCustomException();
         } else {
             return $dividend / $divisor;
         }
     }

     //Handle the exception
     try {
         echo divide(10, 0);
     } catch (MyCustomException $e) {
         echo 'Caught exception: ' . $e->customMessage();
     }

     /* In this example, a custom exception called `MyCustomException` has been created that
     extends the base class `Exception`. Then a function `split` has been created that throws this exception
     custom if trying to divide by zero. */

     /* Inside the `try-catch` block, the `divide(10, 0)` function is called. If the exception is thrown,
     catch in the `catch` block and print a custom message using the method
     `custommessage` defined in the custom exception. */

     /* This allows you to create specific exceptions for particular situations in your code, which
     makes it easier to manage and identify errors in different parts of your application. */
?>