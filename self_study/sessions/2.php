<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header('Location: 21.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
	<body>
		<h2>Форма входа</h2>
		<form method="post" action="21.php">
			Имя пользователя: <input type="text" name="username" required><br><br>
            Пароль пользователя: <input type="text" name="paassword" required><br><br>
			<input type="submit" value="Войти">
		</form>
        <?php
?>
	</body>
</html>