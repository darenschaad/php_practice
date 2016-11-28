<?php include "db.php";?>
<?php include "functions.php" ?>
<?php
  createRecord();
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
        <h1 class="text-center">Create</h1>
        <form class="" action="login_create.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="">
          </div>
          <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
        </form>
      </div>

    </div>

  </body>
</html>
