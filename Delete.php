
<?php include ('dbcon.php');  ?>


<?php


if (isset($_GET['id'])) {
	$id = intval(  $_GET['id']);


$query = "DELETE FROM review WHERE id = $_GET[id]";
//	echo "deleted id ".$id;
$result = mysqli_query($connection,$query);
// echo $query;
//$row= mysqli_affected_rows($query);

//echo "rows affected".$row;
if(!$result){
	die("Query Failed".mysqli_error());
}
 
else{
	header('location:index.php?delete_msg=you have deleted the Review.');
}

}



?> 


