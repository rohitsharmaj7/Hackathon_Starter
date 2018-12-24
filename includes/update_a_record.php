<?php
  $id=$_GET['id'];
  $query="SELECT * FROM `user_details` WHERE `id`='$id'";
  $select_particular_user=mysqli_query($connection,$query);
  while($row=mysqli_fetch_assoc($select_particular_user))
  {
?>
<div class="container">
	<form method="post">
		<label for="Name">Name</label>
		<input type="text" name="updated_name" value="<?php echo $row['name']; ?>">
		<label for="Age">Age</label>
		<input type="number" name="updated_age" value="<?php echo $row['age']; ?>">
		<input type="submit" name="updateRecord">
	</form>
</div>
<?php
  }
?>
<?php
  if(isset($_POST['updateRecord']))
  {
    $id=$_GET['id'];
    $name=$_POST['updated_name'];
    $age=$_POST['updated_age'];
    $query="UPDATE `user_details` SET `name`='$name',`age`='$age' WHERE `id`='$id'";
    $update_query=mysqli_query($connection,$query);
    if(!$update_query)
    {
      die("query failed".mysqli_error($connection)); 
    }
    header('location:index.php');
  }
?>