<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(!empty($_GET['country'])){
      if(strlen($_GET['country'])<10){
      echo "ok";}
      else{
        
      }
    }else{
      ?>
    <form method="get" >
      <input type="text" name="country" placeholder="Podaj kraj">
      <input type="submit" value="Zatwierdź">
      <?php
      }
       ?>
    </form>
  </body>
</html>
