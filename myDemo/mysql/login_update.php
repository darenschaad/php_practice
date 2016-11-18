<?php include "db.php";?>
<?php  include "functions.php";?>

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
          <div class="form-group">

            <select name="id">
              <?php
                showAllData();
              ?>
            </select>

          </div>
          <input class="btn btn-danger" type="submit" name="submit" value="UPDATE">
        </form>
      </div>

    </div>

  </body>
</html>
