
<?php include ('header.php');  ?>
<?php include ('dbcon.php');  ?>



<?php

if (isset($_GET['id'])) {
	$id = $_GET['id'];

 

	$query = " select * from review where id = 
	'$id'";

 $result = mysqli_query($connection, $query);

if (!$result) {
	die("query failed".mysqli_error());
} else{

	$row = mysqli_fetch_assoc($result);

	// print_r($row);
    // it prints array and its values
}

}

?>


<?php

if (isset($_POST['Update'])) {

if (isset($_GET['id_new'])) {
    $idnew = $_GET['id_new'];
}



	$username = $_POST['username'];
	$email = $_POST['email'];
	$moviename = $_POST['moviename'];
	$review = $_POST['review'];

	$query = "UPDATE review SET `username` = '$username', `email`='$email',`moviename`='$moviename',`review`='$review' where `id` = '$idnew'";


//UPDATE `review` SET `id`='[value-1]',`username`='[value-2]',`email`='[value-3]',`moviename`='[value-4]',`review`='[value-5]' WHERE 1


	$result = mysqli_query($connection,$query);

	if (!$result) {
		die("query failed".mysqli_error());
	} else{
		header('location:index.php?update_msg=you have successfully Updated the review.');
	}
	
}

?>

<form action="update.php?id_new=<?php echo $id;?>"  method="post">


<div class="form-group" >


	
		<p>
			<label for="UserName">UserName:</label>
			<input type="text" name="username" id="UserName" class="form-control" value="<?php echo $row['username'] ?>">    </p>
			
<p>
			<label for="Email">Email:</label>
			<input type="Email" name="email" id="email" class="form-control" value="<?php echo $row['email']?> " >    
		</p>

            <p>
			<label for="MovieName">MovieName:</label>
			<input type="text" name="moviename" id="MovieName" class="form-control" value="<?php echo $row['moviename'] 
		?>"  >     </p>
            <p>
			<label for="review">Review:</label>
			<input type="text" name="review" id="review" class="form-control" value="<?php  echo $row['review'] ?>" >     </p>	
        </div>
			<div  > 
			<button type="submit" class="btn btn-success"  name = "Update">UPDATE</button>


		</div>

		</form>
	



<?php include ('footer.php');  ?>