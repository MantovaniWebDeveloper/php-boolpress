<?php

  include("data.php");


  function limitaPost($stringa){

    return substr($stringa, 0, 150);

  }

  function convertiData($stringa) {
    //explode
    $stringaExplode = (explode(" ",$stringa));
    $data = $stringaExplode[0];
    $ora = $stringaExplode[1];

    $dataConvertita = date("d M Y", strtotime($dataRovesciata));

    return $dataConvertita;
  }
 ?>
