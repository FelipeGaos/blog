<?php
include 'init.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Page</title>
    <!-- Bootstrap core CSS -->
    
    <link href="../css/custom.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/custom.css" rel="stylesheet">
<!--  <script src="//cdn.ckeditor.com/4.5.9/full/ckeditor.js"></script> -->
      <script src="ckeditor/ckeditor.js"></script>
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="index.php">Dashboard</a>
            <a class="blog-nav-item" href="add_post.php">Add Posts</a>
            <a class="blog-nav-item" href="add_category.php">Add Category</a>
            <a class="blog-nav-item pull-right" href="../index.php">Visit Blog</a>

        </nav>
    </div>
</div>

<div class="container">
    <div class="logo"><img src="http://www.wipeandrestorekc.com/img/101013_wipey_greenStetho_330x215.gif"/></div>
    <div class="blog-header">
        <h2>Admin Area</h2>
    </div>

    <div class="row">
        <div class="col-sm-12 blog-main">

                    <!-------------------------------------->
  <?php if(isset($_GET['msg'])) : ?>
      <div class="alert alert-success"><?php echo htmlentities($_GET['msg']); ?> </div>
  <?php endif; ?>
