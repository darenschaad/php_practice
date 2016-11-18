<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function init(){
        say_Something();
        calculate();
      }
      function say_Something(){
        echo "Hello Daren, do you like bowling?" . "<br>";
      }
      function calculate(){
        echo 34 * 2 ;
      }
      init();

    ?>
  </body>
</html>
