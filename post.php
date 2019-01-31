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
            <h2><?php echo $post[title]; ?></h2>
          </div>
          <div class="datePost">
            <h2><?php echo $post[published_at]; ?></h2>
          </div>
          <div class="contentPost">
            <h2><?php echo $post[content]; ?></h2>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  <script src="src/js/app.js"></script>
  </body>
</html>
