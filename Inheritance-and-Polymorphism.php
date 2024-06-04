<?php
     //* Inheritance and Polymorphism - Php

     /* In Php, inheritance and polymorphism are key concepts of object-oriented programming
     Poo that allow code reuse and flexibility in the structure of classes and objects. */

     //? Inheritance:

     /* Inheritance is the mechanism by which one class can inherit properties and methods from another
     class, establishing a class hierarchy. In Php, this is achieved using the `extends` keyword. */

     //? Inheritance example:

     class Animal {
         public function makeSound() {
             return "Makes a sound.";
         }
     }

     class Dog extends Animal {
         public function makeSound() {
             return "Barks";
         }
     }

     /* In this example, the `Dog` class inherits the `makeSound()` function from the `Animal` class, but the
     redefine to change behavior. However, it still maintains access to the methods and properties
     of the class `Animal`. */

     //? Polymorphism:

     /* Polymorphism allows an object to behave in multiple ways. In Php, it is achieved by
     redefine a method in the child class that already exists in the parent class. */

     //? Example of polymorphism:

     class Cat extends Animal {
         public function makeSound() {
             return "Meow";
         }
     }

     $animals = [
         new Dog(),
         new Cat()
     ];

     foreach ($animals as $animal) {
         echo $animal->makeSound() . "<br>";
     }

     /* In this case, the `makeSound()` method behaves differently for each type of animal
     (`Dog` and `Cat`). Polymorphism allows each object to be treated uniformly, invoking the
     same method but with specific behaviors depending on the class to which they belong. */

     /* These concepts are useful for organizing code, allowing reuse and the creation of
     more complex and flexible structures in Php applications. */
?>