<?php  //Start the Session
	session_start();
 	require('connect.php');
	//3. If the form is submitted or not.
	//3.1 If the form is submitted
	if (isset($_POST['username']) and isset($_POST['password'])){
		//3.1.1 Assigning posted values to variables.
		$username = $_POST['username'];
		$password = $_POST['password'];
		//3.1.2 Checking the values are existing in the database or not
		//$query = "SELECT * FROM `user` WHERE username='".$username."' and password='".$password."'";
		// crack = ' or 'a'='a
		$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
		// crack = ' or 'a'='a
		// crack2 = ';DROP TABLE user
		 
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);
		//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
		if ($count > 0){
			// echo "$count";
			// header("location:wanted.php");
			$user = "";
			foreach ($result as $result):
				// echo $result['username'] ."\t". $result['password'] ."<br>";
				$user = $user.$result['username'] ."\t". $result['password'] ."\n";
			endforeach;
			echo '<script>';
			echo 'console.log('. json_encode( $user ) .')';
			echo '</script>';
			echo "<script>alert('Hi Login Succesfull');document.location='wanted.php'</script>";
		}
		else{
			echo "<script>alert('Incorrect Username or Password');document.location='sql.php'</script>";
		}
	}
?>