<?php
include 'includes/header.php';

$db = new Database();

// Create Query

$query = "select * from posts order by id desc";

//Run Query
$posts = $db->select($query);

// Create Query

$query = "select * from category";

//Run Query
$categories = $db->select($query);

if($posts) : ?>

  <?php while($row = $posts->fetch_assoc() ): ?>

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>
            <p><?php echo shortenText($row['body']); ?></p>
            <a href="post.php?id=<?php echo $row['id']; ?>" class="readmore">Read More</a>
          </div><!-- /.blog-post -->
  <?php endwhile; ?>

<?php else: ?>
    <p>There are no posts</p>
<?php endif; ?>

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>
<?php include 'includes/footer.php';?>
