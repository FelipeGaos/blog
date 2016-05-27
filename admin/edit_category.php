<?php
include 'includes/header.php';

$db = new Database();

// Create Query
$id = $_REQUEST['id'];
$query = "select * from category where id = $id";

//Run Query
$category = $db->select($query)->fetch_assoc();

?>
<?php
if(isset($_POST['submit'])){
  // assign vars
  $name = mysqli_real_escape_string($db->link, $_POST['name']);
  if($name == '' ){
    $error = "Please fill out all required fields";
  }
  else{
    $query = "update category set name = '$name' where id = ".$id;
    $update_row = $db->update($query);
  }
}
////////////////////////////////////

if(isset($_POST['delete'])){

  $query = "delete from category where id = $id";
  $delete_row  = $db->delete($query);  
}
 ?>

<form class="form-horizontal" role="form" method="post" action="edit_category.php?id=<?php echo $id; ?>" >
  <div class="form-group">
    <label class="control-label">Category Name</label>
    <div >
      <input name="name" type="name" class="form-control" placeholder="Enter Category Name" value="<?php echo $category['name'] ?>"" >
    </div>
  </div>
  <div class="form-group">
    <div >
      <button name="submit" type="submit" class="btn btn-default">Submit</button>
      <a href="index.php" class="btn btn-default">Cancel</a>
      <input name="delete" type="submit" class="btn btn-danger" value="Delete">
    </div>
  </div>

  <br>
</form>

<?php
include 'includes/footer.php';
?>
