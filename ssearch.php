<?php  //Start the Session
	session_start();
 	require('connect.php');
	//3. If the form is submitted or not.
	//3.1 If the form is submitted
	if (isset($_POST['username'])){
		//3.1.1 Assigning posted values to variables.
		// $username = htmlspecialchars($_POST['username'] , ENT_QUOTES, 'UTF-8');
		$username = urlencode($_POST['username']);
		// echo '<div>' . $_GET['input'] . '</div>';
		echo '<div>' . $username . '</div>';
		// crack = <script src="js/xss.js"></script>
	}
?>