<?php
require_once "./assets/libreria.php";
require "./views-vistas/header.tpl";
?>

<!-- Contenido -->
<main>
  <h2>Esta es la página que gestiona nuestra información para CONTACTAR</h2>
  <p>Diferentes contenidos de PHP, JS o HTML</p>
  <p><?= $content_contactar; ?></p>
</main>

<?php
require "./views-vistas/footer.tpl";
?>