<html>
	<head>
		<title>Main</title>
	</head>
	<body>
	<form method="GET" action="message.php">
		<label>Message from:</label>
		<select name="userMessage">
			<?php
				$dbhost = 'localhost';
				$dbport = '27017';
				$dbname = 'lab2_Itech';
				$c_users = 'lab2_Itech.user';

				$conn = new MongoDB\Driver\Manager("mongodb://$dbhost:$dbport");

				$read = new MongoDB\Driver\Query([], []);
				$users = $conn->executeQuery($c_users , $read);
				
				foreach ($users as $user) {
						echo "<option>";
						echo $user->login;
						echo "</option>";
				}
			?>
		</select>
		<input type="submit" value="Ok"/>
	</form>
	
	<!--<?php
		$dbhost = 'localhost';
		$dbport = '27017';
		$dbname = 'lab2_Itech';
		$c_users = 'lab2_Itech.user';

		$conn = new MongoDB\Driver\Manager("mongodb://$dbhost:$dbport");

		$read = new MongoDB\Driver\Query([], []);
		$users = $conn->executeQuery($c_users , $read);
		
		foreach ($users as $user) {
				print_r ($user);
		}
	?>-->
	</body>
</html>