<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  include_once('config.php');
  session_start();

  if(!empty($_POST['email']) && !empty($_POST['password']))
  {
    $email = $_POST['email'];
	$senha = $_POST['password'];


	$stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = ?");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$result = $stmt->get_result();


	$user = mysqli_fetch_assoc($result);

	if ($user && password_verify($senha, $user['senha_hash']))
	{
		$_SESSION['email'] = $email;
		$_SESSION['id'] = $user['id'];
		header('Location: index.php');
	  	exit;
	}
	else
	{
		header('Location: login.html?erro=1');
		exit;
	}

  }
  else
  {
    // header('Location: login.html');
    exit;
  }

?>
