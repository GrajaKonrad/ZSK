<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    function value($a){
      if($a<0) return 'ujemna';
      elseif ($a==0) return 'zero';
      else return 'dodatnia';
    }
    echo value(10);//dodatnia
    function getValue():int{
      return 20.99;
    }
    echo getValue();//20
    echo "<br><hr><br>";
    ##############################################################
    //zasięg zmiennych
    $x=10;//zmienna globalna
    function show(){
      echo "Wartość zmiennej \$x wynosi $GLOBALS[x] <hr>";
      //echo $GLOBALS['x'];
    }

    show();

    $y=10;

    function show1(){
      global $y;
      echo "Wartość zmiennej \$y wynosi $y <hr>";
      //echo $GLOBALS['x'];
    }
    show1();

    #################################################################
    function sum1(){
      $number =10;
      echo "\$number1 wynosi: $number<br>";
      $number+=10;
    }
    sum1();//10
    sum1();//10

    function sum(){
      static $number =10;
      echo "\$number wynosi: $number<br>";
      $number+=10;
    }
    sum();//10
    sum();//10
    ##################################################################
    echo '<hr>';

    //argumenty
    function add($x,$y=1){
      return $x+$y;
    }

    echo add(2),'<br>';//3
    echo add(2,4),'<br>';//6

    ################################################################
    echo '<hr>';

    function multi(float $x, int $y){
      return $x*$y;
    }
    echo multi(2,3)."<br>";//6
    echo multi(2.5,3).'<br>';//7.5
    echo multi(3,2.5).'<br>';//6
     ?>
  </body>
</html>
