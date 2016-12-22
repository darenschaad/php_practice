<?php include "db.php";?>
<?php include "functions.php" ?>
<?php
  createRecord();
?>
<?php include "includes/header.php" ?>

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
<?php include "includes/footer.php" ?>
      
