<?php
     //* Interfaces and Abstract Classes - Php

     /* In Php, interfaces and abstract classes are fundamental structures for programming
     object-oriented, providing a mechanism for defining methods that must be implemented by
     the daughter classes. */

     //* Interfaces:

     /* An interface is a collection of methods that must be implemented by any class that uses it.
     use. It defines what methods a class should contain, but does not implement its logic. */

     //* Declaration of an interface:

     interface Form {
         public function calculateArea();
         public function calculatePerimeter();
     }

     //* Implementation of an interface:

     class Circle implements Shape {
         private $radio;
         public function __construct($radio) {
             $this->radio = $radio;
         }

         public function calculateArea() {
             return pi() * $this->radio * $this->radio;
         }

         public function calculatePerimeter() {
             return 2 * pi() * $this->radius;
         }
     }

     //* Abstract Classes:

     /* An abstract class is a class that cannot be instantiated directly, but can contain
     abstract methods (methods that must be implemented by child classes) and concrete methods with
     its own implementation. */

     //* Declaration of an abstract class:

     abstract class Figure {
         abstract public function calculateArea();
         abstract public function calculatePerimeter();

         public function description() {
             return "This is a figure.";
         }
     }

     //* Implementation of a child class that extends an abstract class:

     class Square extends Figure {
         private $side;

         public function __construct($side) {
             $this->side = $side;
         }

         public function calculateArea() {
             return $this->side * $this->side;
         }

         public function calculatePerimeter() {
             return 4 * $this->side;
         }
     }

     /* Abstract classes and interfaces are powerful tools for defining a common structure
     for related classes, ensuring that they implement certain methods. Child classes can
     inherit and extend these common structures, which promotes consistency and reuse of the
     code. */
?>