<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  session_start();

  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
  {
	  include_once('config.php');
          $email = $_POST['email'];
	  $senha = hash('sha256', $_POST['password']);

	  print_r('Email: ' . $email);
	  print_r('Senha: ' . $senha);

	  $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha_hash = '$senha'";

	  $result = $conexao->query($sql);

	  print_r($result);

	  if(mysqli_num_rows($result) < 1)
	  {
		  unset($_SESSION['email']);
		  unset($_SESSION['senha']);
		  header('Location: login.html');
	  }
	  else
	  {
		  $_SESSION['email'] = $email;
		  $_SESSION['senha'] = $senha;
		  header('Location: index.php');
		  exit;
	  }

  }
  else
  {
    header('Location: login.html');
    exit;
  }

?>
