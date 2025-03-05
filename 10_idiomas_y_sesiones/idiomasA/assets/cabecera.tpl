<?php
function cabecera($lang) {
  ?>

  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang["title"]; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-light bg-light justify-content-between p-3">
        <a class="navbar-brand"><?= $lang["logo"];?></a>
        <form class="form-inline">
          <label class="mr-sm-2" for="lang"><?= $lang["cambiar_idioma"]; ?></label>
          <select name="lang" class="custom-select mb-2 mr-sm-2 mb-sm-0">
            <option selected><?= $lang["opcion_1"]; ?></option>
            <option value="cast"><?= $lang["opcion_2"]; ?></option>
            <option value="ca"><?= $lang["opcion_3"]; ?></option>
          </select>
          <button type="submit" class="btn btn-primary ms-3"><?= $lang["cambiar"]; ?></button>
        </form>
      </nav>
    </header>
    <main class="container-fluid">
      <?php menu($lang); ?>
      <div class="row">
        <div class="col-8">
          <h3><?= $lang["descripcion"]; ?></h3>
        </div>    
      </div>
    </main>

  <?php  
}
?>