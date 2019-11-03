
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


    <?php
    if(@$_POST['name']!="" && @$_POST['age']!=""){
    $name=$_POST['name'];
    $age=$_POST['age'];
    echo "Dane przed poprawą ",$name,"<br>";
    $name=ucfirst(strtolower(substr((trim($name)),0,10)));
    echo "Dane po poprawie ",$name,"<br>";
    echo<<<TEKST
    <table>
      <tr>
        <th>Imię</th>
      <th>Wiek</th></tr>
      <tr>
        <td>$name</td>
        <td>$age</td>
      </tr>
    </table>
    TEKST;
  }else{?>

      <form method="post">
        <input type="text" name="name" >
        <input type="number" name="age">
        <input type="submit"  value="Wyślij">
      </form>
<?php
      echo "Błędne dane";
    }
     ?>
  </body>
</html>
