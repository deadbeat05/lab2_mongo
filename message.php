<html>
	<head>
		<title>Message</title>
	</head>
	<body>
		<?php
				$dbhost = 'localhost';
				$dbport = '27017';
				$dbname = 'lab2_Itech';
				$c_users = 'lab2_Itech.user';
			
				$conn = new MongoDB\Driver\Manager("mongodb://$dbhost:$dbport");

				$filter = ['login' => $_GET['userMessage']];
				$option = [];
				$read = new MongoDB\Driver\Query($filter, $option);
				$users = $conn->executeQuery($c_users , $read);
				
				foreach($users as $user){
					echo $user->message;
				}
			?>
	</body>
</html>