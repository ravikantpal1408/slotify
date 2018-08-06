<?php
include("includes/config.php");

if(isset($_POST['loginButton'])) 
{
	//Login button was pressed
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];

	$result = $account->login($username, $password);
	
	if($result == 1) 
	{
		
		$row = mysqli_fetch_row($result);
		
		
		$_SESSION['userLoggedIn'] = $username;
		$_SESSION['role'] = $row[7];
		
		//echo $row[7];
		
		//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';

		header("Location: index.php");
	}

}
?>

