<!DOCTYPE html>
<html>
  <head>
    <title>How to put PHP in HTML- Date Example</title>
  </head>
  <style>
    body{
      margin: 2.5rem;
      padding: 2.5rem;
      font-family: arial;
      background-color: whitesmoke;
      color: #333;}
  </style>
  <body>
    <h1 class="title">Hola Mundo</h1>
    <span class="span-header">Este es un mensaje Html Puro.</span>
    <div class="description">
      <p>¡A continuación, mostraremos la fecha y el día de hoy por Php!</p>
    </div>
    <div class="code-php">
        <?php
            echo '¡La fecha de hoy es <b>' . date('Y/m/d') . '</b> y Hoy Es <b>'. date('l').'</b>';
        ?>
    </div>
    <div class="footer">Una vez más, este es contenido HTML estático.</div>
  </body>
</html>