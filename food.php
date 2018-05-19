<?php
	session_start();
	if(!$_SESSION['isLogged']) {
  		header("location:login"); 
  		die(); 
	}
?>
<html>
    <head>
		<title>HOME</title>
    	<?php
			require('./headnav.php');
			require('./scripts.php');
		?>
    </head>
    <body>
	    <div class="container main-con">
			TEST HOMEPAGE
		</div>
		<div class="container main2-con">
				Test Secondpage
			</div>
	</body>
</html>