<?php
require_once "./assets/libreria.php";
require "./views-vistas/header.tpl";
?>

<!-- Contenido -->
<main>
  <h2>Esta es la página que gestiona nuestra información de EMPRESA</h2>
  <p>Diferentes contenidos de PHP, JS o HTML</p>
  <p><?= $content_nosotros; ?></p>
</main>

<?php
require "./views-vistas/footer.tpl";
?>