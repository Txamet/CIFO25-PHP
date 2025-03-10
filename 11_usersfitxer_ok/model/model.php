<?php
//Aquí intentaría conectar con una bbdd

function modeloRegistrarNuevoUsuario($usuario, $email)
{
      //lectura.... intenta escribir
      if (empty($usuario) || empty($email)) {
            return false;
      }

      $salida = "";

      $usuarios = fopen("../model/usuarios.txt", "a+"); //función para abrir y crear si no existe un fichero. El modo (a+) nos sitúa al final del mismo y nos ermite añadir datos
      $usuarios = file("../model/usuarios.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

      foreach ($usuarios as $linea) {
            list($user, $em) = explode(" : ", $linea);//user:email
            //si alguna variable de list, es = al $usuario o al $email devolvemos false a controller
            if (($usuario === $user)||($email === $em)) return false;
            //si no devolvemos false, el valor del fichero es el mismo + la nueva línea
            // $salida .= $linea . PHP_EOL; /// constante para finalizar linea predeterminado
            $salida .= $linea . "\n";
      }

      $salida .= "$usuario : $email";

      file_put_contents("../model/usuarios.txt", $salida);

      echo nl2br($salida);


      return true;


}
