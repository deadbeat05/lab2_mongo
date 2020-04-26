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
				$c_network = 'lab2_Itech.network';
			
				$conn = new MongoDB\Driver\Manager("mongodb://$dbhost:$dbport");

				$filter = ['login' => $_GET['userName']];
				$option = [];
				$read = new MongoDB\Driver\Query($filter, $option);
				$users = $conn->executeQuery($c_users , $read);
				
				foreach($users as $user){
					$filter = ['clientIp' => $user->ip];
					$option = [];
					$read = new MongoDB\Driver\Query($filter, $option);
					$traffics = $conn->executeQuery($c_network , $read);
					foreach($traffics as $traffic){
						echo "Traffic for $user->login:<br>
								Input traffic: $traffic->amountOfInputTraffic <br> 
								Output traffic: $traffic->amountOfOutputTraffic";
					}
				}
			?>
	</body>
</html>