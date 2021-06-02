
<?php

$servername = "localhost";
$username = "admin";
$password = "admin";

//Class to connect on DB.
$connector = new mysqli($servername, $username, $password);

if ($connector->connect_error) {
	die("WARNING! Connection failed: " . $connector -> connect_error);
} else {
	echo "Connection has been Sucessfully stablished";
}





?>