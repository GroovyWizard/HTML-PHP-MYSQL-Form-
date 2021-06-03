<?php

				
class userDAO
{
	public $exists = TRUE;
	
	function fetchData(){
		include 'dbConnector.php';
		$selectDB = "USE wizardry_coop;";
		
		if ($connector->query($selectDB) === TRUE ) {
			echo "<br>" . "Database selected!" . "<br>";
			
		} else {
			echo "Error selecting database: " . $connector->error . "<br>";
			
		}


		$result = mysqli_query($connector, "
		SELECT id, name, email  
		FROM users 
		WHERE email LIKE '%test%' ");

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "id: " . $row["id"]. " - Email: " . $row["email"] . " - Name: " . $row["name"]. "<br>";
				$GLOBALS['exists'] = TRUE;
			}
		} else {
			echo "No results!";
			$GLOBALS['exists'] = FALSE;
		}
	}
	
	function register(){
		if ($GLOBALS['exists'] === TRUE) {
			echo "Email adress already in use!";		
		} else {
			echo "You may proceed!";	
		}
		
	}
	
	

}

?>