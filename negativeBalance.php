<html>
	<head>
		<title>Traffic</title>
	</head>
	<body>
		<?php
				$dbhost = 'localhost';
				$dbport = '27017';
				$dbname = 'lab2_Itech';
				$c_users = 'lab2_Itech.user';

				$conn = new MongoDB\Driver\Manager("mongodb://$dbhost:$dbport");

				$read = new MongoDB\Driver\Query([], []);
				$users = $conn->executeQuery($c_users , $read);
				
				foreach ($users as $user) {
					if($user->balance<0){
						echo "Name: $user->login <br> Balance: $user->balance";
					}
				}
			?>
	</body>
</html>