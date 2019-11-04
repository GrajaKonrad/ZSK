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
    <form method="post">
      <input type="number" name="wielkosc">
      <input type="submit" value="Pokaż">
    </form>
    <table>


    <?php
    If(!empty($_POST['wielkosc'])){
      $x=0;
      $y=1;
      $suma=0;
      $size=$_POST['wielkosc'];
      echo '<tr>';
      echo '<th></th>';
      do {
      echo '<th>',$y,'</th>';
      $y++;
    } while ($y<=$size);
      echo '</tr>';
      $y=0;


      do{
        $x++;
        echo '<tr>';
        echo '<th>',$x,'</th>';
        do {
          $y++;
          if($y+$x==$size+1){echo '<td style="background-color:red;">',$x*$y,'</td>';
          $suma+=$x*$y;}elseif ($y==$x){echo '<td style="background-color:red;">',$x*$y,'</td>';
          $suma+=$x*$y;}
          else{echo '<td>',$x*$y,'</td>';}
        } while ($y<$size);
        echo '</tr>';
        $y=0;
      }while($x<$size);

     ?>
     </table>
     <?php
     echo 'Suma liczb po skosie wynosi: ',$suma;}
      ?>
  </body>
</html>
