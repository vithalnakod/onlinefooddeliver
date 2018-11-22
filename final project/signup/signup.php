<html>

<head>
	<link rel="stylesheet" type="text/css" href="Success.css">
</head>
<header></header>

<?php
	extract($_POST);
	$db=mysqli_connect('localhost:3306','root','','login');
	
	if(isset($db))
	{
		$stmt = "INSERT INTO login_user_data VALUES ('".$name."','".$email."','".$password."', '".NULL."')";
		$us=mysqli_query($db,$stmt);
		
		if ($us) {
			echo '<h2 id = "done">"Signed in Successfully"</h2>';
			echo '<div class="button">
					<a href="../login/login.html" class = "btn">Go to Login Page</a>
				  </div>';	
		} else {
			echo '<h2 id = "done">"Sorry there was an error :( "</h2>';	
			echo '<div class="button">
					<a href="signup.html" class = "btn">Go to Sign Up Page"</a>
				  </div>';
		}
	}
?>
</html>