<?php
$useremail  = $_REQUEST['email'];
$userpassword = $_REQUEST['password'];

$file = file("text.txt");

$email =trim(substr($file['0'],6));
$password = trim(substr($file['1'],9));


if($useremail ==  $email && $userpassword == $password){
		session_start();

		// $_SESSION['success']="success";
		header("Location: dashboard.php"); 
		exit();
}
else{
		session_start();

		$_SESSION['error']="error";
		header("Location: index.php"); 
		exit();


}

fclose($file);

?>