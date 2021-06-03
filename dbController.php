<?php
		include 'userDAO.php';
		$controller = new userDAO();
		$controller->fetchData();
		$controller->register();

?>