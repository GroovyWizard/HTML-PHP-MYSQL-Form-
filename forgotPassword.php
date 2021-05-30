
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="Forgot Password"
            content="Screen to retrieve your password."
        />
        <link rel="stylesheet" href="styles.css" />
        <title>Page Title</title>
    </head>
		<body>
			<link rel="stylesheet" href="style.css">
			<div class="container">
				<div class="left">
					<div class="header">
						<h2 class="animation a1">Forgot your password? No problem!</h2>
						<h4 class="animation a2">Insert your Email and we will send a security code to reset your password</h4>
					</div>
					<form action="validate.php" method="get"  class="form">
						<input type="text" name="email" class="form-field animation a3" placeholder="Email"> <br>
						<p class="animation a5">
							
							<a href="index.php" class="forgotusr"> Do you have your password? <br> CLICK HERE TO LOGIN</a></p>
						<input type="submit" class="animation a6">
					</form>
				</div>
			</div>
			<div class="right"></div>
		</body>
</html>

<?php
?>