<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
$text = <<<TEKST
  zsk - Zespół
  szkół
  komunikacji
TEKST;

  echo "Przed wywołaniem funkcji nl2br: <br> $text";
  echo "<br>Po wywołaniu funkcji nl2br: <br>";
  echo nl2br($text),'<br><br>';
  //małe litery
  echo strtolower($text),'<br>';
  //duże litery
  echo strtoupper($text),'<br>';

  //pierwsz litera na dużą
    $text = 'anna AgnieSZka tomasz';
    echo ucfirst($text),'<br>';

  //wszytskie pierwsze na duże
  echo ucwords($text),"<br>";
  echo"<hr>";
  ##############################################################
  $lorem="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $kolumna = wordwrap ($lorem, 40, '<hr>');
  echo $kolumna.'<hr>';

  ob_clean();//czyścimy zawartośc bufora
  //usuwanie białych znaków
  $name = 'Kasia';
  $name1 = '  Kasia ';
  echo "Długość zmiennej \$name:";//5
  echo strlen($name);
  echo "<br> Długość zmiennej \$name1:";//8
  echo strlen($name1);
  echo "<br>";
  echo strlen(ltrim($name1));
  echo "<br>";
  echo strlen(rtrim($name1));
  echo "<br>";

  //przeszukiwanie ciągu znaków

  $address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
  $search = strstr($address, 'tel');
  echo $search,'<hr>';//zawartość z szukaną i po niej

  $address1 = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
  $search1 = strstr($address1, 'tel', true);
  echo $search1,'<hr>';//zawartość przed szukaną

  $address3 = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
  $search3 = stristr($address3, 'Tel');
  echo $search3,'<hr>';//Bez znaczenia wielkośći liter

  $mail = strstr('zsk@gmail.com','@');
  echo $mail, '<br>';//@gmail.com

  $mail = strstr('zsk@gmail.com',64);
  echo $mail, '<br>';//@gmail.com

  ##########################################################################3
  $ciag1='a';
  $ciag2='aa';
  echo strcmp($ciag1, $ciag2); //-1
  echo strcmp('zzz','zzz');//0
  echo strcmp('zza','zzz');//-1
  echo strcmp('zzz','zza');//1
  echo strcmp('zzza','zzz'),'<br>';//1

  //pozycja

  $poz = strpos('abcdefg','cde');
  echo $poz; //2
  echo "<br>";
  $poz = strpos('abcdabc','da');
  $poz = strpos('abcdabc','da');
  echo $poz;//8

  //zadanie 1
  $text1='abcdabcd';
  $text2='ab';
  if(strpos($text1,$text2)===0){
    echo "<br>Znajduje się<br>";}
  else{
    echo "<br>Nie znajduje się<br>";
    }
  //przetwarzanie ciągów znaków
  $replace = str_replace('%name%','Janusz', 'Mam na imie: %name%');
  echo $replace,'<hr>';

  //substr
  $surname= substr('Janusz Kowalski',7,5);
  echo $surname;//Kowal

  //zamiana Polskich znaków

  $login= "bączek";
  $cenzura = array('ą','ę','ś','ć','ż','ź','ó','ń','ł');
  $zamiana = array('a','e','s','c','z','z','u','n','l');

  $newlogin = str_replace($cenzura,$zamiana,$login);
  echo '<br>',$newlogin,'<hr>';//baczek

  //napisz aplikację cenzorujuącą zdanie podane przez użytkownika, użytkownik podaje dane w formularzu
  echo <<<FORM
    <form method="post">
      <input type="text" name="dane" placeholder="Wpisz zdanie"><br><br>
      <input type="submit" name="" value="Zatwierdź">
    </form>
  FORM;
  if(isset($_POST['dane'])){
  $data=$_POST['dane'];
  }
  $niedozwolone=array('czarny','biały');
  $zamiana = ' ##### ';
  $poprawne = str_ireplace($niedozwolone, $zamiana, $data);
  echo "Poprawione ",$poprawne;
    ?>
  </body>
</html>
