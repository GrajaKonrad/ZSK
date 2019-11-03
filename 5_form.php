<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table{
        border: 1px solid black;
      }
      th{
        border: 1px solid black;
      }
      td{
        border: 1px solid black;
        text-align: center;
        width: 100px;
      }
    </style>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="number" name="age" placeholder="Podaj wiek"><br><br>
      <input type="submit" name="button" value="Zatwierdź"><hr>

      <?php
        if(!empty($_POST['name']) && !empty($_POST['age'])){
          $name=$_POST['name'];
          $age=$_POST['age'];
          $name2=strtolower(trim($name));
          $name2=ucfirst($name2);
          $name2=substr($name2,0,10);
          echo <<< DANE
          <br>Przed poprawą<br>
          Imię: $name<br>
          Po poprawie<br>
          Imię: $name2<br><br>
          <table>
            <tr>
              <th>Imię</th><th>Wiek</th>
            </tr>
            <tr>
              <td>$name2</td><td>$age</td>
            </tr>
          </table>
          DANE;

        //zabezpieczyć formularz przed podaniem błędnych danych
        //tj. białe znaki, ograniczyć ilość znaków do 10 dla
        //imienia, pierwsza litera w imieniu ma być duża a pozostałe małe
        //Wyświetl w postaci:
        //Przed poprawą: ...
        //Po poprawie: ...
        //Dane wyświetl w tabeli

        //inny sposób na tabele
        ?>
        <br><br>
        <table>
          <tr>
            <th>Imię</th><th>Wiek</th>
          </tr>
          <tr>
            <td><?php echo $name2; ?></td><td><?php echo $age; ?></td>
          </tr>
        </table>
        <?php
        }
       ?>
    </form>
  </body>
</html>
