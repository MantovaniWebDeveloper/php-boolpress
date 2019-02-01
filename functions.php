<?php

  include("data.php");


  function limitaPost($stringa){

    return substr($stringa, 0, 150);

  }

  function convertiData($stringa) {
    //explode
    $stringaExplode = (explode(" ",$stringa));
    $data = $stringaExplode[0];
    $change = str_replace('/', '-', $data);
    $dataFormattata = date('d M y', strtotime($change));
    $ora = $stringaExplode[1];

    return $dataFormattata;
  }
 ?>
