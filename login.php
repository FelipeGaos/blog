<?php
include 'includes/header.php';
?>
<p>
  Username: admin</p>
  <p>
  Password: admin
</p>
<form role="form" method="post" action="login_process.php">
    <div class="form-group">
      <label>Username</label>
      <input name="username" type="text" class="form-control" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input name="password" type="password" class="form-control" placeholder="Enter Password">
    </div>
    <button name="do_login" type="submit" class="btn btn-primary">Login</button> <a  class="btn btn-default" href="register.html"> Create Account</a>
  </form>

<?php include 'includes/footer.php';?>
