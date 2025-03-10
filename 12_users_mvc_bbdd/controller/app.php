<?php
require "../model/model.php";
require "../view/view.php";
require "functions.php";



function actionNuevoUsuario($con)
{
      if (("POST" === $_SERVER["REQUEST_METHOD"]) && isset($_REQUEST['registrar'])) {

            $usuario = isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : "";
            $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";

            $usuario = saneadoreitor($usuario);
            $email = saneadoreitor($email);

            //validar datos
            list($rows, $ok) = modeloRegistrarNuevoUsuario($usuario, $email, $con);
            if ($ok) {
                  //Nos devuelve el modelo un true
                  vistaRegistroCompletado($usuario, $email, $rows);
                  
            } else {
                  vistaRegistroIncorrecto($usuario, $email);   
            }
      }
}


if (!isset($_REQUEST['registrar'])) {
      vistaMostrarFormularioRegistro();
} else {
      actionNuevoUsuario($con);
}
