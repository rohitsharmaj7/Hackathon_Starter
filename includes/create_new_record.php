<div class="container">
	<form method="post">
		<label for="Name">Name</label>
		<input type="text" name="name">
		<label for="Age">Age</label>
		<input type="number" name="age">
		<input type="submit" name="addRecord">
	</form>
</div>
<?php
  if(isset($_POST['addRecord']))
  {
  	echo $name=$_POST['name'];
  	echo $age=$_POST['age'];
    $query="INSERT INTO `user_details`(`name`,`age`) VALUES('$name','$age')";
    $add_query=mysqli_query($connection,$query);
    if(!$add_query)
    {
      die("query failed".mysqli_error($connection)); 
    }
    header('location:index.php');
  }
?>