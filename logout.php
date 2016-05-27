<?php include('core/init.php'); ?>

<?php
if(isset($_SESSION['username'])){
	//Create User Object
	$user = new User;

	if($user->logout() ){
		redirect('index.php','You are now logged out','success');
	}
} else {
	redirect('index.php', 'An error ocurred for user '.$_SESSION['username'], 'error');
}
