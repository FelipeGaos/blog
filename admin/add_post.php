<?php
include 'includes/header.php';

$db = new Database();

if(isset($_POST['submit'])){
  // assign vars
  $title = mysqli_real_escape_string($db->link, $_POST['title']);
  $body = mysqli_real_escape_string($db->link, $_POST['body']);
  $category = mysqli_real_escape_string($db->link, $_POST['category']);
  $author = mysqli_real_escape_string($db->link, $_POST['author']);
  $tags = mysqli_real_escape_string($db->link, $_POST['tags']);

  if($title == '' || $body == '' || $category == '' || $author == '' ){
    $error = "Please fill out all required fields";
  }
  else{
    $query = "insert into posts (title, body, category, author, tags) values('$title', '$body', $category, '$author', '$tags')";

    $insert_row = $db->insert($query);

  }
}
?>
<?php

// Create Query
$query = "select * from category";
//Run Query
$categories = $db->select($query);

?>
<form role="form" method="post" action="add_post.php">
  <div class="form-group">
    <label >Post Title</label>
    <input name="title" type="text" class="form-control"  placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label >Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body" rows="8" cols="40"></textarea>
    <script>
                // Replace the <textarea id="body"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('body', {
		"extraPlugins" : 'imagebrowser',
		"imageBrowser_listUrl" : "/images/images_list.json"
	});
    </script>
  </div>
  <div class="form-group">
    <label >Category</label>
    <select name="category" class="form-control">
      <?php while($row= $categories->fetch_assoc() ) :?>
        <?php if($row['id'] == $post['category']){
          $selected = 'selected';
        }
        else{
          $selected = '';
        }
        ?>
      <option <?php echo $selected ?> value="<?php echo $row['id']; ?>"><?php echo $row['name'] ;?></option>
    <?php endwhile; ?>
      </select>  </div>
  <div class="form-group">
    <label >Author</label>
    <input name="author" type="text" class="form-control"  placeholder="Enter Author">
  </div>
  <div class="form-group">
    <label >Tags</label>
    <input name="tags" type="text" class="form-control"  placeholder="Enter Tags">
  </div>

  <div >
  <input name="submit" type="submit" class="btn btn-default" value="Submit">
  <a href="index.php" class="btn btn-default">Cancel</a>
  </div>
</form>

<?php
include 'includes/footer.php';
?>
