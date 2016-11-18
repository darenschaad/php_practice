<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      function greetings($name){
        echo "Hello " . $name . "<br>";
      }

      function addNumbers($number1, $number2){
        echo $number1 + $number2;
      }
      greetings("John Wayne");
      addNumbers(21.2, 2.123)
    ?>
  </body>
</html>
