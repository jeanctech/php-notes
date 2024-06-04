<?php
     //* Classes and Objects - Php

     /* In Php, classes are templates for creating objects. Each class can contain properties
     (variables) and methods (functions). Objects are instances of these classes, which means that
     They represent data and behaviors defined by the class. */

     // Create a class and an object in Php.

     // Definition of a 'Person' class
     class Persn {
         // Properties
         public $name;
         public $age;

         // Method
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

     // **Key concepts:**

     /*

     - **Properties:** They are variables within a class that contain data associated with the object.
     - **Methods:** They are functions within a class that define the behavior of the object.
     - **Object Instantiation:** It is done using the `new` keyword, followed by the name of the object.
     class. This creates an instance or object of that class.
     - **$this:** It is a reserved word that refers to the current object. It is used to access
     properties and methods within the same class.

     */

     /* Php classes can have constructors (special methods called automatically when creating
     an object) and destructors (methods called automatically when destroying an object). Furthermore, they can
     inherit properties and methods from other classes, allowing the creation of hierarchies or structures
     more complex classes and objects. */
?>