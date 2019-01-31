<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/css/style.css">
    <title>boolpress by Dario Mantovani</title>
  </head>
  <body>
    <?php include("data.php"); ?>

    <div class="container">

      <?php foreach ($posts as $k => $post) : ?>
        <div class="wrapPost">
          <?php /*  echo "<pre>";
           var_dump($post); die();
           echo "</pre>"; */
          ?>
          <div class="titlePost">
            <a href="post-detail.php?slug=<?php echo $post[slug]; ?>">
              <h2><?php echo $post[title]; ?></h2>
            </a>
          </div>
          <div class="datePost">
          <!-- <?php
              /*$timestamp = strtotime('2018-05-17');
              echo date('d F H', $timestamp); */
             ?> -->
            <small>Pubblicato il <?php echo $post[published_at]; ?></small>
          </div>
          <div class="contentPost">
            <p><?php echo $post[content]; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  <script src="src/js/app.js"></script>
  </body>
</html>
