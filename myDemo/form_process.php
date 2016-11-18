<?php

  if(isset($_POST['submit'])) {

    $names = ["Daren", "Edwin"];

    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo "<br>";
    echo $password;

    // if (strlen($username) < 5) {
    //   echo "Username has to be longer than five characters long";
    // }
    if(!in_array($username, $names)) {
      echo "Sorry";
    } else {
      echo "Yup";
    }

  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    ?>
  </body>
</html>
