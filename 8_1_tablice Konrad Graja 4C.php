<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php
    function full($quanity){
      $tab=array();
      for($i=0;$i<$quanity;$i++){
        $name='num'.$i;
        if(!isset($_POST[$name])) {return false; }
          else if($_POST[$name]<=0){echo "Nieprawidłowy wiek<hr>"; return false;}
      $tab[$i]=$_POST[$name];
      }
      $avg=0;
      $mini=$tab[0];
      $maxi=0;
      foreach ($tab as $value) {
        $avg+=$value;
        if($mini>$value) $mini=$value;
        if($maxi<$value) $maxi=$value;
      }
      $avg/=count($tab);

      echo <<<WYNIK
      <ul>
        <li>Średni wiek: $avg lat
        <li>Najmłodsza osoba ma $mini lat
        <li>Najstarsza osoba ma $maxi lat
      </ul>
      WYNIK;
      return true;
    }


    function sprawdzanie(){
      if(isset($_POST['persons'])){
        $quanity=$_POST['persons'];
        if(  $quanity<=70 && $quanity>=1){
          return true;}
        else{
          echo "<br>Nieprawidłowa liczba<hr>";
        }
      }
    return false;
    }
    if (sprawdzanie())
      {
      $quanity=$_POST['persons'];
      echo '<form  method="post">';
      echo '<input type="number" name="persons" value="',$quanity,'"hidden>';
      $tab=array();
      if(full($quanity)){
        }else{
      for($i=0;$i<$quanity;$i++){
        echo '<p>Wiek ',$i+1,' osoby<input type="number" name="num',$i,'" required></p>';
      }
      echo '<input type="submit"  value="Prześlij">';
      echo '</form>';}
    }else{
      echo <<<TEXT
      <form  method="post">
        <input type="number" name="persons" >
        <input type="submit"  value="Zatwierdź">
      </form>
      TEXT;
    }

     ?>
  </body>
</html>
