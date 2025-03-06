<?php

session_start();

if (isset($_GET["lang"])) {
  if($_GET["lang"] == "cast") {
    $_SESSION["idioma"] = "cast";

  } else if ($_GET["lang"] == "ca") {
    $_SESSION["idioma"] = "ca";
  }

} else if (!isset($_SESSION["idioma"])) {
  $_SESSION["idioma"] = "ca";
}

require "lang/" . $_SESSION["idioma"] . ".php";


function cabecera($lang) {
  require_once "./views/cabecera.tpl"; 
}

function menu($lang) {
  echo "<a href='index.php'>" . $lang["m1"] . "</a> || <a href='producto.php'>" . $lang["m2"] . "</a>";
}

function principal($lang) {
  require_once "./views/principal.tpl";
}

function footer($lang) {
  require_once "./views/footer.tpl";
}

function footer2($lang) {
  require_once "./views/footer2.tpl";
}


?>