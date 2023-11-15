<?php
     //* Data Types - Php

     /* Php supports a wide variety of data types, from basic to more complex types.
     Here is a description of the main data types in Php. */

     //* Scalar Types:

     // - **Integer:** Represents whole numbers, positive or negative, without decimals.

     $integer = 10;

     // - **Float:** Represents numbers with decimals.

     $float = 3.14;

     // - **String:** Stores text.

     $string = "Hello, world";

     // - **Boolean (Boolean):** Represents true or false.

     $true = true;
     $false = false;

     //* Composite Types:

     // - **Array:** Stores multiple values.

     $array = array("red", "green", "blue");

     // - **Object:** Instances of classes that contain properties and methods.

     class Person {
         public $name;
         public $age;
     }

     $person = new Persn();
     $person->name = "John";
     $person->age = 30;

     //* Special Types:

     // - **Null:** Represents a variable without a value.

     $null = null;

     // - **Resource:** Specially used to handle external resources, such as open files.

     //* Advanced Composite Types:

     // - **Callable:** May contain a reference to a function.

     // - **Iterable:** Introduced in PHP 7.1, indicates that a variable is iterable.

     //* Constants:

     // - Constants are values that cannot be changed once defined.

     define("PI", 3.14);

     /* Php is dynamically typed, which means that it is not necessary to declare the type of a variable
     when creating it; the type is inferred based on the assigned value. Flexibility in data types allows
     greater versatility when working with information in Php */
?>