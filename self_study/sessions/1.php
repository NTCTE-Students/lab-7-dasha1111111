<?php
session_start();

    $username = 'student';
    $_SESSION['username'] = $username;
?>
<!DOCTYPE html>
<html>
	<body>
		<h2>Добро пожаловать!</h2>
		<p>Привет, <?php print($_SESSION['username']); ?>!</p>

	</body>
</html>