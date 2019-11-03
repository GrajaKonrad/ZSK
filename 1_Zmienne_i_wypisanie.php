<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $coś=4;
    $_numer=3;
    $number=2 ;
    echo $number;

    //typy danych
    $prawda=true;
    $falsz=false;

    //integer

    $calkowita=100;
    $szesnatskowa=0xA;
    echo "<br>$szesnatskowa";
    $osemkowa = 010;
    echo '<br>'.$osemkowa;
    $binarna = 0b1100;
    echo '<br>',$binarna;

    //składnia heredoc
    $imie = 'Janusz';
    $wiek = 10;
    $napis = <<< TEKST
    <hr>
    Masz na imię: $imie<br>
    Twój wiek : $wiek<br>
    <hr>
    TEKST;//uwaga na spacje

    echo $napis;

    echo <<< T
      Janusz
    T;
    //składnia nowdoc
    $x ='Anna';
    echo <<<'K'
    <hr>
      Imię: $x
    K;
    echo "<br> Zmienna o nazwie \$x ma wartość ".$x;
    ?>
  </body>
</html>
