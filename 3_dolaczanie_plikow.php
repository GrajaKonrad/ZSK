<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    Plik główny
    <hr>
    <?php
    /*
      include('./3_dolaczanie_plikow\plik1.php');
      include_once('./3_dolaczanie_plikow\plik1.php');
      */
      require('./3_dolaczanie_plikow\plik1.php');
      require_once('./3_dolaczanie_plikow\plik1.php');
     ?>
     <hr>Strona główna dalsza część
  </body>
</html>
