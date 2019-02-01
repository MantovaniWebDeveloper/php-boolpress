<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/css/style.css">
    <title>boolpress by Dario Mantovani</title>
  </head>
  <body>
    <?php
    include("data.php");
    include("functions.php");
    ?>

    <div class="container">

      <?php foreach ($posts as $k => $post) : ?>
        <div class="wrapPost">
          <div class="titlePost">
            <a href="post-detail.php?slug=<?php echo $post[slug]; ?>">
              <h2><?php echo $post[title]; ?></h2>
            </a>
          </div>
          <div class="datePost">
            <small>Pubblicato il <?php echo convertiData($post[published_at]); ?></small>
          </div>
          <div class="contentPost">
            <p><?php echo limitaPost($post[content]); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  <script src="src/js/app.js"></script>
  </body>
</html>
