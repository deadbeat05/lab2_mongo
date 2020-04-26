<html>
	<head>
		<title>Main</title>
	</head>
	<body>
	<form method="GET" action="message.php">
		<label>Message from:</label>
		<select name="userName">
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
	<hr>
	
	<form method="GET" action="traffic.php">
		<label>Traffic to:</label>
		<select name="userName">
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
	<hr>
	
	<form method="GET" action="negativeBalance.php">
		<label>Users with negative score:</label>
		<input type="submit" value="Ok"/>
	</form>
	<hr>
	</body>
</html>