<?php

function pDump($param)
{
      echo "<pre>";
      var_dump($param);
      echo "</pre>";
}

function saneadoreitor($data)
{
      trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
}