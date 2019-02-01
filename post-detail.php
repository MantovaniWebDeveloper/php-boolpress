<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/css/style.css">

  </head>
  <body>
    <?php
      include("data.php");
      include("functions.php");
      $getSlug = $_GET["slug"];
     ?>

     <div class="container">
       <?php foreach ($posts as $k => $post) : ?>
         <?php if($getSlug == $post[slug]) { ?>
         <div class="wrapPostDetail">
           <div class="titlePostDetail">
             <a href="post-detail.php?slug=<?php echo $post[slug]; ?>">
               <h2><?php echo $post[title]; ?></h2>
             </a>
           </div>
           <div class="datePostDetail">
             <small>Pubblicato il <?php echo convertiData($post[published_at]); ?></small>
           </div>
           <div class="contentPostDetail">
             <p><?php echo limitaPost($post[content]); ?></p>
           </div>
         </div>
       <?php } ?>
       <?php endforeach; ?>
     </div>


  </body>
</html>
