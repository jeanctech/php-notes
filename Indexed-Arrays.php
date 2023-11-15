<?php
     //* Indexed Arrays - Php

     /* In Php, indexed arrays are data structures that store multiple values under one
     single variable, accessing each value through a numerical index. These arrangements begin their
     indexing from scratch. */

     //* Here is a basic example of how to work with indexed arrays in Php.

     // Create an indexed array
     $colors = array("red", "green", "blue");

     // Access array elements by their index
     echo $colors[0]; // Will print "red"
     echo $colors[1]; // Will print "green"
     echo $colors[2]; // Will print "blue"

     // Modify a value in the array
     $colors[1] = "yellow";

     // Add a new value to the end of the array
     $colors[] = "white";

     // Loop through an array with a foreach loop
     foreach ($colors as $color) {
         echo $color . " ";
     }
     // This will print: red yellow blue white

     /* In this example, an array `$colors` is created that contains several elements. These are accessed
     elements using square brackets `[]` followed by the corresponding index. They can also be added,
     modify and delete elements of the array.

     It is important to note that in PHP, arrays can contain different types of data in
     each index, which makes them very flexible. Additionally, indexed arrays can be traversed with
     `for` or `foreach` loops to access each element without the need to know the size of the
     arrangement. */
?>