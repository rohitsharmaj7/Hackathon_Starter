<?php
  include "db/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Php BoilerPlate:CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Php:Crud(Create,Read,Update and delete)[BOILER_PLATE]</h1>
	</div>

	<div class="container mt-3">
		<table class="table table-striped table-bordered">
		 <tr>
		   <th>Add Operation</th>
	     </tr>
		 <tr>
		   <td><a href="index.php?source=add">Add record</a></td>
		 </tr>
		</table>
    </div>
    <?php 
        if(isset($_GET["source"]))
        {
            $source=$_GET["source"];
            
            switch($source)
            {
            case 'add':
               include 'includes/create_new_record.php';
               break;
            case 'update':
               include 'includes/update_a_record.php';
               break;
            case 'delete':
               include 'includes/delete_a_record.php';
               break;
            }
        }
    ?>
    <div class="container">
       <h1>Table After Operation</h1>
       <table class="table table-striped table-bordered">
       	 <tr>
       	   <th>Name</th>
       	   <th>Age</th>  
       	   <th>Update Operation</th>	   	 
       	   <th>delete Operation</th>	   	 
       	 </tr>
         
       	 	<?php
       	 	   $query="SELECT * FROM `user_details`";
       	 	   $read_query=mysqli_query($connection,$query);
       	 	   while($row=mysqli_fetch_assoc($read_query))
       	 	   {
       	 	   	 echo "<tr>";
                 echo "<td>".$row['name']."</td>";
                 echo "<td>".$row['age']."</td>";
                 echo "<td><a href='index.php?source=update&id={$row['id']}'>Update</a></td>";
       	         echo "<td><a href='index.php?source=delete&id={$row['id']}'>Delete</a></td>";
       	         echo "</tr>";
       	       }
       	    ?>
 
       </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>