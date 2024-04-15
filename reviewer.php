

<?php
//include ('index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CineMoFil</title>
	
</head>
<body>
	<center>
		<h1>Daily Review</h1>
		
		<div id=""></div>
		<div class="form-group" > 

		<form action="c.php" method="post" >   
		  <p>
			<label for="UserName">UserName:
			</label>
			<input type="text" name="username" id="UserName" placeholder="Enter Your UserName" autocomplete="off">    </p>
			
<p>
			<label for="Email">Email:</label>
			<input type="email" name="email" id="email" placeholder="Enter Your Email" autocomplete="off"/>     </p>

            <p>
			<label for="MovieName">MovieName:</label>
			<input type="text" name="moviename" id="MovieName" placeholder="Name of the film" autocomplete="off" />     </p>
            <p>
			<label for="review">Review:</label>
			<input type="text" name="review" id="review" placeholder="Write Here !!!" autocomplete="off" />     </p>	
        </div>
			<div class="btn btn-primary" > 
			<button type="submit"  name = "insert">Insert</button>
			


		</div>

		</form>
	</center>
</body>


</html>
