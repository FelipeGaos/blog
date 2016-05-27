<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'blogtest');


$site_description = "This is a blog";
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
define('PATH', '$root');
$address = ""; // absolute address of main site
$site_title = "Title";
$site_blog_title = "Blog Thing";
$site_blog_description = "All about things";
$site_admin_user = "admin";
$site_admin_pass = "admin";
