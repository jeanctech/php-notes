<?php
     //* Expand Classes - Php

     /* In Php, object-oriented programming is based on the concept of classes and objects. The classes
     They are like templates that define the properties and behaviors of objects. Here you have a
     Basic example of how to create a class in Php. */

     // Definition of a 'Person' class
     class Persn {
         // Properties (class variables)
         public $name;
         public $age;
         // Methods (class functions)
         public function greet() {
             return "Hello! My name is " . $this->name . " and I have " . $this->age . " years.";
         }
     }

     // Creation of an object 'person1' from the class 'Person'
     $person1 = new Persn();

     // Access and modify object properties
     $person1->name = "Example";
     $person1->age = 30;

     // Call the greet method of the person1 object
     echo $person1->greet();

     /* In this example, the `Person` class has two properties (`$name` and `$age`) and one method
     (`greet()`) which returns a greeting with the name and age. */

     /* In addition to properties and methods, Php classes can have constructors and destructors,
     which are executed automatically when creating an object and destroying it, respectively: */

     class Person {
         public $name;
         public $age;

         // Builder
         public function __construct($name, $age) {
             $this->name = $name;
             $this->age = $age;
         }

         // Destroyer
         public function __destruct() {
             echo "Object destroyed";
         }

         public function greet() {
             return "Hello! My name is " . $this->name . " and I have " . $this->age . " years.";
         }
     }

     /* Constructors are used to initialize properties when creating an object, while
     Destructors can perform cleanup or completion tasks when an object is deleted.

     Furthermore, inheritance, encapsulation and polymorphism are fundamental concepts in programming.
     object-oriented. Php supports these features, allowing you to extend classes, control the
     access properties and methods, and create context-specific behaviors. */
?>