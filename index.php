<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo 'ciao'.$argv[1].' '.$argv[2];
      $paragraph = 'Questo è un paragrafo molto corto';
    ;
    ?>
    <h1><?php echo $paragraph ?>. misura <?php echo strlen($paragraph) ?> caratteri</h1>
    <h1><?php echo str_replace($_GET['badword'], '***', $paragraph)?>.</h1>

  </body>
</html>
