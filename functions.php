<?php

  include("data.php");


  function limitaPost($stringa){

    return substr($stringa, 0, 150);

  }

  function convertiData($stringa) {
    //explode data
    $stringaExplode = (explode(" ",$stringa));
    $data = $stringaExplode[0];
    $change = str_replace('/', '-', $data);
    $dataFormattata = date('d M y', strtotime($change));


    $ora = $stringaExplode[1];
    $oraFormattata = date('H', strtotime($ora));


    return $dataFormattata." alle ".$oraFormattata;
  }
 ?>
