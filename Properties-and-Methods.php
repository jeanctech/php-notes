<?php
     //* Properties and Methods - Php

     /* In Php, classes contain properties (variables) and methods (functions) that define the
     behavior and characteristics of objects created from those classes. */

     //? Properties:

     // Properties are variables associated with a class and represent characteristics or data of the object.

     class Person {
         public $name; // public property
         private $age; // Private property

         // Methods to access private properties
         public function setAge($newAge) {
             $this->age = $newAge;
         }

         public function getAge() {
             return $this->age;
         }
     }

     /*
     - Properties can be public, protected or private.
     - Public properties are accessible from outside the class.
     - Protected properties are only accessible within the class and its derived classes.
     - Private properties are only accessible within the class that defines them.
     */

     //? Methods:

     /* Methods are functions associated with a class and define the behavior of the objects of that class.
     class. */

     class Car {
         public $mark;
         private $speed = 0;

         public function accelerate($increment) {
             $this->speed += $increment;
         }

         public function decelerate($decrement) {
             $this->speed -= $decrement;
         }

         public function getSpeed() {
             return $this->speed;
         }
     }

     /*
     - Methods can be public, protected or private, and follow the same visibility rules
     than properties.
     - Public methods are accessible from outside the class.
     - Protected methods are only accessible within the class and its derived classes.
     - Private methods are only accessible within the class that defines them.
     */

     //? Visibility:

     /*
     - **public:** Accessible from anywhere, inside or outside the class.
     - **protected:** Accessible from the class that defines it and its derived classes.
     - **private:** Accessible only from the class that defines it.
     */

     /* Properties and methods in PHP classes allow logic and data to be encapsulated,
     providing a mechanism for reuse, modification and interaction with objects. */
?>