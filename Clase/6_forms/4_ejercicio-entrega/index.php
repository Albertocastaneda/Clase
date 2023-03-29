<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="formcss.css" />
    <title>Form</title>
  </head>
  <body>
    <div id="cuerpoForm">
      <form action="controller.php" method="post">
        <fieldset>
          <legend>Formulario</legend>
          <div id="datos">
            <label for="Email">Email</label><br /><br />
            <input
              type="email"
              id="Email"
              name="Email"
              placeholder="Email"
            /><br /><br />
            <label for="Contraseña">Contraseña</label><br /><br />
            <input
              type="password"
              id="Contraseña"
              name="Contraseña"
              placeholder="Contraseña"
            /><br /><br />
              <input type="submit" value="Enviar" class="boton"></input>
          </div>
        </fieldset>
      </form>
      <!-- condicion que comprueba si el error esta en true y si es asi sale el error por pantalla -->
    <?php 
      if (!empty($_GET["error"])) {
        if ($_GET["error"] == true  ) {
          require_once("error.php");
        }
      }
    ?>
    </div>
  </body>
</html>
