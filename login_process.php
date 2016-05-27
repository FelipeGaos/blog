<?php
include 'core/init.php';

if(isset($_POST['do_login'])){
  // get Vars
  $username  = $_POST['username'];
  $password = ($_POST['password']);
  echo $username.'  '.$password;
  $user = new User;

  if($user->login($username, $password)){
    redirect('index.php', 'You have been logged in as '.$_SESSION['username'] ,'success');
  }
  else {
    redirect('index.php', 'Login is not valid!'.print_r($row),'error');
  }
}
else{
  redirect('index.php');
}
 ?>
