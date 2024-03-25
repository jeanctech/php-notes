<?php
     //* Data Validation - Php

     /* Data validation in Php is crucial to ensure that the data entered by the
     users or received from other sources meet the necessary criteria before being processed
     or stored. Here I show you some common data validation methods in Php. */

     //? Form Validation:

     /* When receiving form data, it is essential to validate it to ensure that it meets the requirements.
     expected requirements. */

     //? Validation of Required Fields:

     // Make sure the required fields are not empty.

     if (empty($_Post['name'])) {
         $errors[] = "The name field is required";
     }

     //? Format Validation:

     /* Verify that the data entered is in the correct format, for example, an address
     valid email. */

     if (!filter_var($_Post['email'], FILTER_VALIDATE_EMAIL)) {
         $errors[] = "The email is not valid";
     }

     //? Numerical Validation:

     // If a number is expected, it is important to check if the input is a valid number.

     if (!is_numeric($_Post['age'])) {
         $errors[] = "Age must be a number";
     }

     //? Limit Length:

     // Ensure that the length of the entered data does not exceed a defined limit.

     if (strlen($_Post['comment']) > 200) {
         $errors[] = "The comment must be less than 200 characters";
     }

     //? Validation with Regular Expressions:

     // Regular expressions allow you to define specific patterns for data validation.

     if (!preg_match("/^[a-zA-Z ]*$/", $_Post['name'])) {
         $errores[] = "Only letters and spaces are allowed in the name field";
     }

     //? Error Handling:

     /* It is common to store error messages in an array to show them to the user after the
     validation. For example: */

     if (count($errors) > 0) {
         foreach ($errors as $error) {
             echo $error . "<br>";
         }
     }

     /* Data validation is essential to maintain information integrity and security in
     web applications, helping to prevent errors and ensure that manipulated data complies with the
     defined standards. */
?>