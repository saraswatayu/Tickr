<?php



$result = $_POST['action'];
error_log($result);

switch($result) {
	case "signIn":
		$email = $_POST['email'];
		error_log($email);
		$password = $_POST['password'];
		error_log($password);
		$success = signIn($email, $password);
		error_log($success);
		if ($success == 1) {
			error_log("correct password");
			header('Location: http://www.google.com/');
		} else {
			$message = "Username and/or Password incorrect.\\nTry again.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		header('Content-type: application/json');
		echo json_encode($success);
	break;

	case "buyStock":

	break;
}



function signIn($email, $password) {
	
	//connecting to the database
	$db = new mysqli("127.0.0.1", "root", "root", "tickr_database");
	//checking for errors 
	if($db->connect_errno > 0){
		error_log("ERROR!! DATABASE ERROR");
    	die('Unable to connect to database [' . $db->connect_error . ']');
	}
	//DB query
	$result = $db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
	//checking if any results 
	if (mysqli_num_rows($result) == 0) {
		//no results (incorrect login)
		return 0;
	} else {
		//yes results (correct login)...redirect them to the dashboard
		return 1;
	}

}

?>