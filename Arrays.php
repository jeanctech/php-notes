<?php
     //* Arrays - Php

     /* In Php, arrays (also known as arrays) are data structures that can contain
     multiple values. They can be indexed (numeric) or associative arrays (they use nominal keys
     to access the values). */

     //* Indexed Arrays:

     // Declaration of an indexed array
     $colors = array("red", "green", "blue");

     // Access elements by their index
     echo $colors[0]; // Will print "red"
     echo $colors[1]; // Will print "green"
     echo $colors[2]; // Will print "blue"

     // Modify a value in the array
     $colors[1] = "yellow";

     // Add a new value to the end of the array
     $colors[] = "white";

     //* Associative Arrays:

     // Declaration of an associative array
     $ages = array("John" => 30, "Mary" => 25, "Peter" => 35);

     // Access elements by their key
     echo $ages["John"]; // Will print 30
     echo $ages["Peter"]; // Will print 35

     // Modify a value in the associative array
     $ages["Mary"] = 26;

     // Add a new key-value pair to the associative array
     $ages["Eve"] = 28;


     //*Multidimensional Arrays:

     /* In Php, you can also create multidimensional arrays, that is, arrays that contain other
     arrays. */

     // Multidimensional array
     $employees = array(
         array("John", 30, "Developer"),
         array("Maria", 25, "Designer"),
         array("Pedro", 35, "Manager")
     );

     // Access elements in a multidimensional array
     echo $employees[0][0]; // Will print "John"
     echo $employees[1][2]; // Will print "Designer"

     /* Arrays in Php are very versatile data structures that can store different types
     of data and are essential for storing and manipulating sets of information. You can perform
     operations such as adding, removing, modifying elements, traversing arrays with `for` or `foreach` loops
     among others. */
?>