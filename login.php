<? php
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$host = $_SERVER['HTTP_HOST'];
	$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'index.html';
	header("Location: http://$host$uri/$extra");
	exit;
?>
