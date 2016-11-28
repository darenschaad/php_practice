<?php
if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

  if ($connection) {
    echo "We are connected";
  } else {
    die("Database connetion failed");
  }

  $query = "INSERT INTO users(username, password)" ;
  $query .= "VALUES ('$username', '$password')";

  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Query FAILED" . mysqli_error());
  }

  // if ($username && $password) {
  //   # code...
  //   echo $username;
  //   echo $password;
  // } else {
  //   echo "this field cannot be blank";
  // }
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="col-sm-6">
        <form class="" action="login_create.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="">
          </div>
          <input class="btn btn-danger" type="submit" name="submit" value="SUBMIT">
        </form>
      </div>

    </div>

  </body>
</html>
