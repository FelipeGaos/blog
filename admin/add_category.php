<?php
include 'includes/header.php';

$db = new Database();

if(isset($_REQUEST['submit'])){
  // assign vars
  $name = mysqli_real_escape_string($db->link, $_POST['name']);
  // check if name is empty
  if($name == ''){
    $error = "Please fill out all required fields";
  }
  else{
    echo "inserting...";
    $query = "insert into category (name) values('$name')";
    $insert_row = $db->insert($query);
  }
}
else{

}
?>


<form class="form-horizontal" role="form" method="post" action="add_category.php" >
  <div class="form-group">
    <label class="control-label">Category Name</label>
    <div >
      <input type="name" name="name" class="form-control" placeholder="Enter Category Name">
    </div>
  </div>
  <div class="form-group">
    <div >
      <input name="submit" type="submit" class="btn btn-default" value="Submit">
      <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
  </div>
  <br>
</form>

<?php
include 'includes/footer.php';
?>
