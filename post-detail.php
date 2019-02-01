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
         <?php if($getSlug == $post["slug"]) { ?>
         <div class="wrapPostDetail">
           <div class="titlePostDetail">
             <a href="post-detail.php?slug=<?php echo $post["slug"]; ?>">
               <h2><?php echo $post["title"]; ?></h2>
             </a>
           </div>
           <div class="datePostDetail">
             <small>Pubblicato il <?php echo convertiData($post["published_at"]); ?></small>
           </div>
           <div class="wrapContentDetail">
             <div class="wrapImg">
               <img src="<?php echo $post["image"]; ?>" alt="">
             </div>
             <div class="contentPostDetail">
               <p><?php echo $post["content"]; ?></p>
             </div>
           </div>
           <small>Tag: <a href="#"><?php echo leggiTag($post["tag"]); ?></a></small>
         </div>
         <div class="wrapPostCommenti">
           <div class="titleComment">
             <h2>Comment name</h2>
           </div>
           <div class="emailComment">
             <small>email comment</small>
           </div>
           <div class="contentComment">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>
         </div>
       <?php } ?>
       <?php endforeach; ?>
     </div>


  </body>
</html>
