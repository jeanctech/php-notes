<?php
     //* Forms Management - Php

     /* Form management in Php is essential in web development, as it allows users
     send data to the server. Here I show you how to process the information of an Html form
     using Php. */

     //* Creation of an Html form.

     /*
     <form action="process_formulario.php" method="post">
         Name: <input type="text" name="name"><br>
         Email: <input type="email" name="email"><br>
         <input type="submit" value="Submit">
     </form>
     */

     //* Processing in Php

     /* The form's `action` attribute specifies where to send the data. In this case, they will be sent
     to a Php file called `process_formulario.php`. */

     //* `processar_formulario.php` (Php to process the form data):

     if ($_Server["Request_Method"] == "Post") {
         $name = $_Post['name'];
         $email = $_Post['email'];

     //* Process the received data

     // For example, print the received data
     echo "Name: " . $name . "<br>";
     echo "Email: " . $email;
     }

     //* Explanation:

     /*
     - The code checks if the request method is `Post`.
     - Collect form data using `$_Post['field_name']`.
     - Processes and performs actions on the received data (here, it simply prints it).
     */

     /* In a real environment, instead of simply printing the data, you would normally save the
     information in a database, you would send emails, perform validations and more,
     depending on the needs of your application.

     Remember to validate and filter user-submitted data to avoid security issues, such as
     Sql code injection or scripting attacks. You can use functions like `htmlspecialchars()`
     to Evited these problems.*/
?>