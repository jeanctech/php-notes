<?php
     //* Poo - Php

     /* Programming Oriented Object - Poo in Php focuses on the creation of classes and objects, which
     which allows you to organize and modularize the code in a more efficient and scalable way. Here are
     the key concepts of Poo in Php. */

     //? Classes and Objects:

     /* - **Classes:** They are templates for creating objects. They define properties (variables) and
     methods (functions) that describe the behavior of the object. */

     class Person {
         public $name;
         public function greet() {
             echo "Hello, I'm $this->name!";
         }
     }

     // - **Objects:** They are instances of a class. They are created using the `new` keyword.

     $person1 = new Persn();
     $person1->name = "John";
     $person1->greet(); // Print: Hello, I'm Juan!

     //? Encapsulation:

     /*
     - Encapsulation refers to the hiding of the internal implementation of an object, allowing
     access through public interfaces.
     - In Php, `public`, `protected` and `private` are used to control the visibility of properties
     and methods.

   //? Inheritance:

   /*
   - Classes can inherit properties and methods from another class, allowing the class to be reused and
   extended existing functionality.
   */

   class Employee extends Person {
       public $charge;
   }

   //? Polymorphism:

   /*
   - Child classes can provide their own implementation of inherited methods, allowing
   The same methods behave differently in different contexts.
   */

   //? Abstraction:

   /* - Allows you to define abstract classes and methods that do not contain an implementation and must
   be implemented by the child classes. */

   abstract class Form {
       abstract public function calculateArea();
   }

   /* Poo in Php offers a powerful and structured way to develop applications, allowing the
   code organization, reusability, extensibility, and the ability to address more efficiently
   through the creation of objects that represent entities and concepts of the world real. */
?>