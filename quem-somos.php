<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" href="./images/logo-pra-quem-precisa.png" type="image/x-icon">


    <link rel="stylesheet" href="./css/styles.css">

    <title>Quem Somos - Pra Quem Precisa</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./images/logo-pra-quem-precisa.png" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
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
                        <a class="nav-link" href="user.html">INFORMAÇÕES DO USUÁRIO</a>
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

    <!-- CONTEÚDO -->
    <main class="quem-somos-real">

        <!-- TÍTULO -->
        <section class="titulo-quem">

            <h1>QUEM SOMOS</h1>

            <p>
                Um projeto universitário criado para conectar doações de roupas
                a quem realmente precisa, de forma simples, rápida e local.
            </p>

        </section>

        <!-- IMAGEM -->
        <section class="banner-quem">
            <img src="./images/home2.png" alt="">
        </section>

        <!-- TEXOS -->
        <section class="conteudo-quem">

            <article>

                <h2>Por Que o Projeto Existe</h2>

                <p>
                    Este projeto foi desenvolvido por 8 alunos do 4º semestre da faculdade UNIVESP,
                    com o objetivo de criar uma solução com impacto social real.
                </p>

                <p>
                    Escolhemos trabalhar com a doação de roupas por ser um tema amplo e essencial.
                    Muitas peças deixam de ser utilizadas enquanto outras pessoas enfrentam necessidades básicas.
                </p>

                <p>
                    A proposta do projeto é facilitar essa conexão, ajudando a distribuir melhor as doações
                    dentro da própria região de quem doa.
                </p>

            </article>

            <article>

                <h2>Quem Está Por Trás</h2>

                <p>
                    O projeto foi idealizado e desenvolvido por 8 estudantes do 4º semestre da UNIVESP,
                    como parte de uma iniciativa acadêmica voltada à criação de soluções tecnológicas
                    com impacto social.
                </p>

                <p>
                    A equipe é formada por alunos com diferentes habilidades,
                    atuando em conjunto no desenvolvimento da plataforma,
                    design da interface e definição da experiência do usuário.
                </p>

            </article>

            <!-- INTEGRANTES -->
            <section class="box-integrantes">

                <h3>Integrantes</h3>

                <div class="cards-integrantes">

                    <div class="card-integrante">
                        <i class="bi bi-person-circle"></i>
                        <h4>Bruno Castro</h4>
                        <span>atribuição</span>
                    </div>

                    <div class="card-integrante">
                        <i class="bi bi-person-circle"></i>
                        <h4>Cristiany da Silva</h4>
                        <span>atribuição</span>
                    </div>

                    <div class="card-integrante">
                        <i class="bi bi-person-circle"></i>
                        <h4>Emerson Mendes</h4>
                        <span>atribuição</span>
                    </div>
                    <div class="card-integrante">
                        <i class="bi bi-person-circle"></i>
                        <h4>João Santos</h4>
                        <span>atribuição</span>
                    </div>
                    <div class="card-integrante">
                        <i class="bi bi-person-circle"></i>
                        <h4>Jonatas de Morais</h4>
                        <span>atribuição</span>
                    </div>
                    <div class="card-integrante">
                        <i class="bi bi-person-circle"></i>
                        <h4>Leandro da Cunha</h4>
                        <span>atribuição</span>
                    </div>
                    <div class="card-integrante">
                        <i class="bi bi-person-circle"></i>
                        <h4>Simão Cirilo</h4>
                        <span>atribuição</span>
                    </div>
                    <div class="card-integrante">
                        <i class="bi bi-person-circle"></i>
                        <h4>Tatiana da Silva</h4>
                        <span>atribuição</span>
                    </div>

                </div>

            </section>

            <!-- IMPACTO -->
            <article>

                <h2>Impacto</h2>

                <p>
                    Nosso objetivo é gerar impacto positivo por meio da tecnologia,
                    incentivando a doação consciente e fortalecendo instituições locais.
                </p>

            </article>

            <!-- CTA -->
            <section class="cta-quem">

                <h2>Pronto para fazer a diferença?</h2>

                <a href="doar.html">QUERO DOAR</a>

            </section>

        </section>

    </main>

    <!-- RODAPÉ -->
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
