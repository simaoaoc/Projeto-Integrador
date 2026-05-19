<?php
  include_once('config.php');
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./images/logo-pra-quem-precisa.png" type="image/x-icon">
    <title>Pra Quem Precisa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./images/logo-pra-quem-precisa.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php if (isset($_SESSION['email'])): $logado = $_SESSION['email'];?> <!-- Verifica qual menu exibir -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="doar.php">QUERO DOAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="como-ajudar.php">COMO AJUDAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quem-somos.php">QUEM SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">CONTATO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">INFORMAÇÕES DO USUÁRIO</a>
                    </li>
				</ul>
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link logout-btn" href="logout.php">SAIR</a>
                    </li>
                </ul>
                <?php else: ?> <!-- Verifica qual menu exibir -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="como-ajudar.php">COMO AJUDAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quem-somos.php">QUEM SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">CONTATO</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./login.html">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registro.html">CADASTRE-SE</a>
                    </li>
                </ul>
                <?php endif; ?> <!-- Verifica qual menu exibir -->


            </div>
        </div>
    </nav>

	<?php
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
			
      $stmt = $conexao->prepare("
        SELECT url 
        FROM imagens i 
        JOIN usuarios u ON i.id_usuario = u.id 
        WHERE u.email = ? 
        LIMIT 1;
      ");
					
      if(!$stmt){
        die("Erro no prepare: " . $conexao->error);
      }
					
      $stmt->bind_param("s", $_SESSION['email']);
					
      if(!$stmt->execute()){
        die("Erro no execute: " . $stmt->error);
      }
					
      $result = $stmt->get_result();
					
      if($result->num_rows == 0){
		$url = "images/user.png";
      }
      else
    {
    	$dados = $result->fetch_assoc();
    	$url = $dados['url'];
	}
	$stmt = $conexao->prepare("SELECT nome FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $_SESSION['email']);
	$stmt->execute();
    $result = $stmt->get_result();
	$dados = $result->fetch_assoc();
	$nome = $dados['nome'];

	$stmt = $conexao->prepare("SELECT cep FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $_SESSION['email']);
	$stmt->execute();
    $result = $stmt->get_result();
	$dados = $result->fetch_assoc();
	$cep = $dados['cep'];

	?>
    <main class="bg-blue">
        <h1>INFORMAÇÕES</h1>
        <form action="#" method="post">
            <div class="background-blue">
                <section class="main-content-user">
                    <article>
						<img src="<?php echo $url; ?>" alt="">	
                    </article>
                    <article>
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" placeholder="<?php echo $nome ?>">

                        <label for="cep">CEP</label>
                        <input type="number" name="cep" id="cep" placeholder="<?php echo $cep ?>">

                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="<?php echo $_SESSION['email'] ?>">
                    </article>

                </section>
            </div>
            <button type="submit" class="quero-doar">EDITAR</button>

        </form>
    </main>

    <footer>
        <h4>Nossas Principais Necessidades</h4>
        <div>
            <img src="./images/flip-flops.png" alt="">
            <img src="./images/blouse.png" alt="">
            <img src="./images/pants.png" alt="">
            <img src="./images/shoes.png" alt="">
        </div>
    </footer>

</body>

</html>
