<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>¿Qué tiempo hace?</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <main class="w3-container w3-display-middle">
    <h1>¿Qué tiempo hace?</h1>
    <form class="w3-margin">
      <fieldset class="w3-padding w3-margin">
        <label for="ciudad">Introduce el nombre de una ciudad:</label>
        <input type="text" class="w3-padding" id="ciudad" name="ciudad" placeholder="Por ej. Londres, Tokyo" value="">
      </fieldset>
      <button type="submit" class="w3-button w3-black">Enviar</button>
    </form>
    <div id="previsionTiempo">
      <?php
      if ($prevision) {
        echo '<div class="w3-panel w3-green w3-padding-24" role="alert">' . $prevision . '</div>';
      } else if ($error != "") {
        echo '<div class="w3-panel w3-red w3-padding-24" role="alert">' . $error . '</div>';
      }
      ?>
    </div>
  </main>
</body>
</html>