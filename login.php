<?php
session_start();

if (isset($_POST['username'])) {

if ( $_POST['username'] == 'inte' && $_POST['password'] == '2047') {
$_SESSION['logged_in'] = 'true';
} else {
echo '
<br><i>Incorrect login details. Please try again.</i><br />';
}
}

if (! (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true') ) {
echo '


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Recipes To Go &rarr; Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="resources/styles/style.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>

			 <h1>Please enter your login details here</h1>			
					<p></p>
		

	<form action="' . $_SERVER['PHP_SELF'] . '"method="POST">
	
<p>Username</p> <input type="text" name="username" />
<p>Password</p> <input type="password" name="password" /><br>

<input type="submit" value="Login" />&nbsp;<input type="reset" value="Clear">
</form>
<br><br><br><br><br>
</body>
</html>

';
exit;
}
?>