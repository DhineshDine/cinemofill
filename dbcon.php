<?php


define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "cinemofil");

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if (!$connection){
	die("connection Failed");

} 

/*else{
	echo "yess";
}
*/


?>