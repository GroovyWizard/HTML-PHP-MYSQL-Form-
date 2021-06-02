<?php

				
class userDAO
{

	function fetchData(){
		include 'dbConnector.php';
		$selectDB = "USE wizardry_coop;";
		
		if ($connector->query($selectDB) === TRUE ) {
			echo "Database selected!";
			echo "";
		} else {
			echo "Error selecting database: " . $connector->error;
			echo"";
		}


		$result = mysqli_query($connector, "SELECT email FROM users");

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "email: " . $row["email"];
			}
		} else {
			echo "No results!";
		}
	}
}

?>