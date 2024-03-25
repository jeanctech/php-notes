<?php
     //* Database Storage - Php

     /* Php offers support for a variety of database management systems (DBMS), which
     allows connection, query and manipulation of data in databases from web applications. */

     //? Some of the popular database management systems that Php supports are:

     /*

     1. **MySql:** One of the most used Sgbd with Php. You can interact with MySql using the
     MySqli (MySql Improved) or Pdo (Php Data Objects) extension.

     2. **MariaDb:** A fork of MySql, compatible with the latter and also accessible from PHP.

     3. **PostgreSql:** Php can connect to PostgreSql databases, which is known for its robustness
     and its advanced features.

     4. **SqLite:** A lightweight, easy-to-use database that is often used for more applications.
     small or developing, as it does not require a separate server.

     */

     /* To connect to a database from PHP, extensions such as MySqLi are used
     (MySql improved) or Pdo (Php Data Objects). Here is a basic example of how you could connect to
     a MySql database using the MySqLi extension: */

     $servername = "server_name";
     $username = "username";
     $password = "password";
     $dbname = "database_name";

     // Create a connection
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Verify the connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     echo "Connection successful";

     /* This is just a basic example for establishing a connection. Once connected, you can perform
     Sql queries to insert, update, delete or retrieve data from the database using
     Php. */
?>