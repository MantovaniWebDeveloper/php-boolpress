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
         <h2><?php echo $post[title]; ?></h2>
        </div>
      <?php endforeach; ?>
    </div>

  <script src="src/js/app.js"></script>
  </body>
</html>
