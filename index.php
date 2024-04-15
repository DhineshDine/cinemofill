<?php include ('header.php');
?>

<?php 
include('dbcon.php');
?>


		<div class="box1">
		<h2>ALL REVIEWERS</h2>
		
		<a href="reviewer.php" class="btn btn-add">INSERT</a>

		</div>
 

		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th> 
					<th>username</th>
					<th>email</th>
					<th>moviename</th>
					<th>review</th>
					<th>update</th>
					<th>Delete</th>
					
				</tr>
			</thead>  
			<tbody>

<?php

$query = "select * from review ";

$result = mysqli_query($connection, $query);

if (!$result) {
	die("query failed".mysqli_error());
} else{

	// insead of below print we use while 
    // print_r($result);

    while ($row = mysqli_fetch_assoc($result)) {
    	?>

<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['username'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['moviename'];?></td>
					<td><?php echo $row['review'];?></td>
					<td><a href="Update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update</a></td>
					<td><a href="Delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
					
				</tr>

    	<?php
    }

}

?>

				

			</tbody>

		</table>

<?php


if (isset($_GET['message'])) {
	echo "<h6>".$_GET['message']."</h6>";
}


?>


<?php

if (isset($_GET['insert_msg'])) {
	echo "<h6>".$_GET['insert_msg']."</h6>";
}


?>


<?php

if (isset($_GET['update_msg'])) {
	echo "<h6>".$_GET['update_msg']."</h6>";
}


?>

<?php

if (isset($_GET['delete_msg'])) {
	echo "<h6>".$_GET['delete_msg']."</h6>";
}


?>

<?php
include ('footer.php');
?>
