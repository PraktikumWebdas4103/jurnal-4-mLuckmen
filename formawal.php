<form action="proses.php" method="POST">
	Username : <input type="text" name="username[]"><br>
	Password : <input type="password" name="password[]"><br>
	<input type="submit" name="submit1" value="submit">
</form>
<?php
	if (isset($_POST['submit1'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
	}
?>
