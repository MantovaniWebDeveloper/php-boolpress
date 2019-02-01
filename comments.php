<?php

  include("data-comments.php");
  include("data.php");
  include("functions.php");
  $getSlug = $_GET["slug"];

  foreach ($comments as $k => $commenti) {
    echo $k;
    echo "<br />";
    if ($k == $getSlug){
    foreach ($commenti as $key => $commentoCompleto) {
      echo "<pre>";
      var_dump($commentoCompleto);
      echo "</pre>";
      echo "<br />";
      $commentJson = json_encode($commentoCompleto);
        echo "<br />";
          echo "<br />";
      echo "<pre>";
      var_dump($commentJson);
      echo "</pre>";
    }
}


  }


 ?>
