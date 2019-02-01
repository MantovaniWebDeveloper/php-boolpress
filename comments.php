<?php

  include("data-comments.php");
  include("data.php");
  include("functions.php");
  $getSlug = $_GET["slug"];

  foreach ($comments as $k => $commenti) {
    echo $k;
    echo "<br />";
    if($getSlug == $k) {
      
      }

    }

  }


 ?>
