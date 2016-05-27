<?php include 'includes/header.php';
$db = new Database();

// Create Query
$id = $_REQUEST['id'];
$query = "select * from posts where id = $id";

//Run Query
$post = $db->select($query)->fetch_assoc();

// Create Query

$query = "select * from category";

//Run Query
$categories = $db->select($query);

?>

<div class="blog-post">
    <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>
        <p class="blog-post-meta"><?php echo formatDate($post['date']); ?> by <a href="#"><?php echo $post['author']; ?></a></p>
        <p><?php echo $post['body']; ?></p>

    </div><!-- /.blog-post -->

</div><!-- /.blog-post -->

<?php include 'includes/footer.php';?>
