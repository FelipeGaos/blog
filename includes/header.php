<?php
include 'core/init.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $site_title; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
</head>





<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="index.php">Home</a>
            <a class="blog-nav-item" href="posts.php">All Posts</a>
            <?php if(!isLoggedIn() ) : ?>
              <a class="blog-nav-item pull-right" href="login.php">Login</a>
              <a class="blog-nav-item" href="register.php"></a>
            <?php else : ?>
            <a class="blog-nav-item pull-right" href="admin/index.php">Admin</a>
            <a class="blog-nav-item pull-right" href="logout.php">Logout</a>
          <?php endif; ?>
        </nav>
    </div>
</div>

<div class="container">
    <div class="logo"><img src=""/></div><br>
    <div class="blog-header"><br>
        <h1 class="blog-title"><?php echo $site_blog_title; ?></h1>
        <p class="lead blog-description"><?php echo $site_blog_description; ?></p>




    <div class="row">
        <div class="col-sm-8 blog-main">
          <?php displayMessage(); ?>
