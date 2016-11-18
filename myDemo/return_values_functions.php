<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function addNumbers($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
      }


      $result = addNumbers(4,42);
        echo $result * 2;

    ?>
  </body>
</html>
