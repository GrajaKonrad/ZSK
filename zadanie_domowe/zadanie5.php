<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      td{
        border: 1px solid black;
        width: 40px;
        height: 30px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <table>


    <?php
      $x=0;
      $y=1;
      $suma=0;

      echo '<tr>';
      echo '<th></th>';
      do {
      echo '<th>',$y,'</th>';
      $y++;
    } while ($y<11);
      echo '</tr>';
      $y=0;


      do{
        $x++;
        echo '<tr>';
        echo '<th>',$x,'</th>';
        do {
          $y++;
          if($y+$x==11){echo '<td style="background-color:red;">',$x*$y,'</td>';
          $suma+=$x*$y;}
          else{echo '<td>',$x*$y,'</td>';}
        } while ($y<10);
        echo '</tr>';
        $y=0;
      }while($x<10);

     ?>
     </table>
     <?php
     echo 'Suma liczb po skosie wynosi: ',$suma;
      ?>
  </body>
</html>
