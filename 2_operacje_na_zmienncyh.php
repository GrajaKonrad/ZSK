<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $potenga = 2**10;

    echo $potenga;

    //operatoy bitowe: and $, or |, not ~,xor ^, przesunięcie bitowe w lewo >>, przesunięcie bitowe w prawo <<
    $dziesiec = 0b1010;
    echo $dziesiec,'<br>';//10

    $dziesiec = $dziesiec >>1 ;//101(2)
    echo $dziesiec,'<br>';//5

    $dziesiec = $dziesiec <<2; //10100(2)
    echo $dziesiec,'<hr>';//20

    //operatory logiczne
    //and, &&, or, ||, xor, !

    //sprawdź czy w sklepie kupisz rower lub hulajnogę
    //otwarty, pieniądze, rower lub hulajnoga

    $sklep='otwarty';
    $pieniadze = 1800;
    $romet = true;
    $hulajnoga = false;
    if($sklep =='otwarty' && $pieniadze>1500 && ($romet || $hulajnoga)){
      if ($romet)echo "Kupiłeś rower";
      else if ($hulajnoga)echo "Kupiłeś hulajnogę";

    }else echo "Nic nie kupiłeś";
    echo "<hr>";

    $a = 1.0;
    $b = 1;
    if($a === $b){
      echo "identyczne";
    }else{
      echo "Różne";
    }
    $x = 11;
    $y = 11.0;
    $wynik= $x <=> $y;
    echo "<hr>".$wynik;

    echo "<Br>".gettype($x); //integer
    echo "<br>".gettype($y);//double


    $x = 2;
    echo $x++;//2
    echo ++$x;//4
    echo $x;//4
    $y = $x++;
    echo $y; //4
    $y= ++$x;
    echo $y;//6
    echo ++$y;//7

################################################################################
    //opertatory rzutownia
    $text='123ssd';
    $x=(int)$text;

    $text1=-1;
    $x1=(bool)$x;

    $text2=10;
    $x2=(unset)$text2;
    echo "<hr>";
    echo $x.'<br>';
    echo $x1."<br>";
    echo $x2.'<br>';
    echo gettype($x2).'<br>';

    echo PHP_INT_SIZE,'<br>';

    $x=10;

    echo is_int($x);
    echo is_null($x).'<hr>';

    $w;
    echo $w;
    echo @gettype($w); //NULL

    //zmienne superglobalne
    // $_GET $_POST $_COOKIE $_FILES $_SESSION $_SERVER

    echo $_SERVER['SERVER_PORT'].'<br>';
    echo $_SERVER['SERVER_NAME'].'<br>';
    echo $_SERVER['SERVER_PROTOCOL'].'<br>';
    echo $_SERVER['DOCUMENT_ROOT'].'<br>';
    echo '<hr>';
    define('NAZWISKO','Kowal<hr>');
    echo NAZWISKO;

    define('imie','Janusz<br>');
    echo imie;

    define('wiek',18,true);
    echo wiek,'<hr>';

    ################################################################################
    //stałe predefiniowane

    echo PHP_VERSION;
    echo gettype(PHP_VERSION);

    $ver=PHP_VERSION;
    if ($ver > 5.6){
      echo "Nowa wersja php";
    }else{
      echo "stara wersja PHP";
    }
    ?>
  </body>
</html>
