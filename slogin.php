<?php  //Start the Session
	session_start();
 	require('connect.php');
	//3. If the form is submitted or not.
	//3.1 If the form is submitted
	if (isset($_POST['username']) and isset($_POST['password'])){

		$stmt = $connection->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
		$stmt->bind_param("ss", $_POST['username'], $_POST['password']);
		//set paramters and execute
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($stmt->execute()) {
		    // header("location:wanted.php");
		
			$res = $stmt->get_result();
			$row = $res->fetch_assoc();
			// $count = mysqli_num_rows($row);
			if ($row != null) {
				# code...
				$user = "";
				$user = $user.$row['username'] ."\t". $row['password'] ."\n";
				echo '<script>';
				echo 'console.log('. json_encode( $user ) .')';
				echo '</script>';
				echo "<script>alert('Hi Login Succesfull');document.location='wanted.php'</script>";
				// printf("username = %s \n", $row['username']);
				// printf("password = %s \n", $row['password']);
			}
			else{
				echo "<script>alert('Incorrect Username or Password');document.location='sql.php'</script>";
			}
		}
		else{
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}
		//fetching result would go here, but will be covered later
		$stmt->close();
	}
?>