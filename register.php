<?php
require('includes/header.php');


// create topic Object
//$topic = new Topic;
$db = new Database;
$user = new User;
$validate = new Validator;

if(isset($_POST['register'])){
  unset($_POST['register']);
  //Create Data Array
	$data = array();
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] = md5($_POST['password']);
	$data['password2'] = md5($_POST['password2']);
//
$field_array = array('name', 'email', 'username', 'password', 'password2');
if($validate->isRequired($field_array)){
    if($validate->isValidEmail($data['email'])){
      if($validate->passwordsMatch($data['password'],$data['password2'])){
          //if($user->nameAvailable($data)){
                    //Register User
            if($user->register($data)){
              redirect('index.php', 'You are registered and can now log in', 'success');
            } else {
              redirect('index.php', 'Something went wrong with registration', 'error');
            }
          //}
      } else {
        redirect('register.php', 'Your passwords did not match', 'error');
      }
    } else {
      redirect('register.php', 'Please use a valid email address', 'error');
    }
  }
  else {
    redirect('register.php', 'Please fill in all required fields', 'error');
  }
}
?>
<form role="form" method="post" action="register.php">
  <div class="form-group">
    <label >Register</label>
    <input name="name" type="text" class="form-control"  placeholder="Enter Name">
    <label >Username</label>
    <input name="username" type="text" class="form-control"  placeholder="Enter Username">
    <label >Email</label>
    <input name="email" type="email" class="form-control"  placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label >Password</label>
    <input name="password" type="password" class="form-control"  placeholder="Enter Password">
    <label >Confirm Password</label>
    <input name="password2" type="password" class="form-control"  placeholder="Confirm Password">
  </div>
  <div >
  <input name="register" type="submit" class="btn btn-default" value="Submit">
  <a href="index.php" class="btn btn-danger">Cancel</a>
  </div>
</form>
