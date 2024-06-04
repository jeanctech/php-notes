<?php
     //* Data Collection - Php

     /* In Php, data collection refers to the collection of information from
     various sources, such as web forms, Http requests, databases, and other external services
     Here are some common methods to collect data in Php. */

     //? Receive Data from Html Forms

     // Using the Post or Get method to receive data from Html forms

     // Receive data from a Post form
         $name = $_Post['name'];

     // Receive data from a Get form
         $lastname = $_Get['lastname'];
         ### Super Global Variables:

     /* Php has super global variables like `$_Post`, `$_Get`, `$_Request, `$_Session`, `$_Cookie`,
     among others, that store data received from different sources. */

     //? Interaction with Databases:

     /* To collect data from databases, extensions or libraries such as MySqli or Pdo are used to
     run SQL queries and get results. */

     // Connecting to a database with MySQLi
     $mysqli = new mysqli("localhost", "user", "password", "database");

     // SQL query to get data
     $result = $mysqli->query("Select * From table");

     // Loop through the results
     while ($row = $result->fetch_assoc()) {
         // Process each row of data
     }

     //? Get Http Request Data.

     /* To receive data from Http requests, the headers, URL parameters and
     other data related to the request. */

     // Get data from the Url
     $parameter = $_Get['parameter'];

     // Get data from Http headers
     $header = $_Server['HTTP_USER_AGENT'];

     ### External APIs and Web Services:

     /* To collect data from external APIs, Http requests are used, such as cUrl or libraries
     specific to consume Apis. */

     // Example of Get request with cUrl

     $curl = curl_init();

     curl_setopt($curl, CURLOPT_URL, 'http://example.com/api/data');
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

     $response = curl_exec($curl);

     curl_close($curl);

     // Process the API response

     /* Data collection is essential in web development to manage information coming from
     from multiple sources and services. These methods allow you to collect, process and use data to
     build dynamic and effective applications. */
?>