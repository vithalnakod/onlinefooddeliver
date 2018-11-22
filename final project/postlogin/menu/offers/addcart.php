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
		$stmt = "INSERT INTO cart VALUES ('".$item."','".$cost."')";
		$us=mysqli_query($db,$stmt);
		
		if ($us) {
			echo '<script type="text/javascript" language="javascipt">alert("Item added to cart successfully");</script>';
			echo '<script type="text/javascript" language="javascipt">window.open("pOffers.html","_self");</script>';
		
		} else {
			echo '<h2 id = "done">"Sorry there was an error :( "</h2>';	
			echo '<div class="button">
					<a href="pOffers.html" class = "btn">Go to Sign Up Page"</a>
				  </div>';
		}
	}
?>
</html>