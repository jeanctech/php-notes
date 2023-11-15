<?php
     //* Builders and Destroyers - Php

     /* In Php, constructors and destructors are special methods within a class that are executed
     automatically at certain times during the life cycle of an object. */

     //* Constructors:

     /* The constructor is a special method that is called automatically when a new one is created
     instance or object of a class. In PHP, the constructor is declared using `__construct()`. */

     class MyClass {
         public function __construct() {
             echo 'A MyClass object has been created.';
         }
     }

     // Create a MyClass object
     $object = new MyClass(); // Will print 'A MyClass object has been created.'

     /* The constructor is commonly used to initialize properties or perform tasks that must be
     be executed at the time of object creation. */

     //* Destroyers:

     /* The destructor is another special method that is automatically called when an object is no longer
     referenced or when explicitly removed using `unset()`. In PHP, the destructor is declared
     using `__destruct()`. */

     class MyClss {
         public function __construct() {
             echo 'A MyClass object has been created.';
         }

         public function __destruct() {
             echo 'A MyClass object has been destroyed.';
         }
     }

     // Create and destroy a MyClass object
     $object = new MyClass(); // Will print 'A MyClass object has been created.'
     unset($object); // Will print 'A MyClass object has been destroyed.'

     /* The destructor is used to perform cleanup tasks, release resources, or perform actions
     finals before the object is removed from memory.

     Both methods, constructors and destructors, are useful for controlling the actions that should be
     be performed at specific times in the life cycle of an object, which can be crucial for the
     initialization, configuration and release of resources associated with objects. */
?>