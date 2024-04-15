<!doctype html>

<html>
    <head>
    <title> insert page </title>
</head>

<body>
    <center>



<?php

$conn= mysqli_connect("localhost","root","","cinemofil");

//below code for connection 
/*
if($con){
    echo "Connection Successfull";
}else{
    die(mysqli_error($con));
}
*/
if($conn === false ){
    die("ERROR: could not connect.".mysqli_connect_error());
}

$username =$_REQUEST['username'];
$email =$_REQUEST['email'];
$moviename =$_REQUEST['moviename'];
$review =$_REQUEST['review'];
echo " welcome you " .$username;

$sql = "INSERT INTO review VALUES ('NULL','$username','$email','$moviename','$review')";

if(mysqli_query($conn, $sql)){
    echo "<h3> data stored in a database successfully.</h3>";
    echo $username. " says ".$review;
} else{
    echo "ERROR: Oops! sorry $sql.". mysqli_error($conn);
}



// mysqli_close($conn);






// $con = new mysqli('localhost','root','','cinemofil');


//  check the connection once if success then change the condition 
// the below code is for connection 
/*if($con){
    echo "Connecction Successfull";
}else{
    die(mysqli_error($con));

}
*/
/*if(!$con){
    die(mysqli_error($con));
}

*/


?>

</center>
</body>
</html>