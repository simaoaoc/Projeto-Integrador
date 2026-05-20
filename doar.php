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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./images/logo-pra-quem-precisa.png" type="image/x-icon">
    <title>Quero Doar - Pra Quem Precisa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
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
$stmt = $conexao->prepare("
SELECT o.id_ong, o.nome_fantasia, o.whatsapp, o.instagram, i.url
FROM ongs o
LEFT JOIN imagens i
on o.id_ong = i.id_ong
ORDER BY o.id_ong;");

$stmt->execute();
$result = $stmt->get_result();
$ong = $result->fetch_assoc();

?>
    <main class="donate-page pb-5">
        <section class="container py-4">
            <h1>SELECIONE A ONG E FAÇA SUA DOAÇÃO</h1>

            <div class="donate-board p-4 rounded-4 shadow-lg">
                <div class="row mb-4">
                    <div class="col-12 col-md-6">
                        <span class="text-white small"><i class="bi bi-geo-alt-fill me-1"></i>CEP 06653-180</span>
                        <a href="#" class="ms-3 text-white text-decoration-underline">Alterar</a>
                    </div>
                </div>

                <div class="row g-3">
                    <!-- ONG cards -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="card ong-card rounded-4 shadow-sm border-0">
                            <div class="card-body text-center">
                                <h3 class="ong-title"><?php echo $ong['nome_fantasia'] ?></h3>
								<a href="#" class="abrir-ong" 
                                   data-id="<?php echo $ong['id_ong'] ?>"
                                   data-img="<?php echo $ong['url'] ?>">
                                   <img src="<?php echo $ong['url'] ?>" class="img-fluid ong-img">
                                </a>
                                <p class="ong-distance text-secondary mb-3"><i class="bi bi-geo-alt-fill text-danger"></i> 2,3 km</p>
                                <h5 class="fw-bold">Necessidades</h5>
                                <ul class="list-unstyled ong-list mb-3">
                                    <li><span class="dot bg-danger"></span> Blusa de Moletom</li>
                                    <li><span class="dot bg-warning"></span> Bermuda</li>
                                    <li><span class="dot bg-success"></span> Camiseta</li>
                                </ul>
                                <p class="mb-2">Entre em Contato</p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="<?php echo $ong['instagram'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/instagram.jpg" alt="Instagram" class="contact-icon-img"></a>
                                    <a href="<?php echo $ong['whatsapp'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/whatsapp.jpg" alt="WhatsApp" class="contact-icon-img"></a>
                                </div>
                            </div>
                        </div>
					</div>

					<?php $ong = $result->fetch_assoc(); ?>
					<div class="col-12 col-sm-6 col-lg-4">
                        <div class="card ong-card rounded-4 shadow-sm border-0">
                            <div class="card-body text-center">
                                <h3 class="ong-title"><?php echo $ong['nome_fantasia'] ?></h3>
								<a href="#" class="abrir-ong" 
                                   data-id="<?php echo $ong['id_ong'] ?>"
                                   data-img="<?php echo $ong['url'] ?>">
                                   <img src="<?php echo $ong['url'] ?>" class="img-fluid ong-img">
                                </a>
                                <p class="ong-distance text-secondary mb-3"><i
                                        class="bi bi-geo-alt-fill text-danger"></i> 2,3 km</p>
                                <h5 class="fw-bold">Necessidades</h5>
                                <ul class="list-unstyled ong-list mb-3">
                                    <li><span class="dot bg-danger"></span> Blusa de Moletom</li>
                                    <li><span class="dot bg-warning"></span> Bermuda</li>
                                    <li><span class="dot bg-success"></span> Camiseta</li>
                                </ul>
                                <p class="mb-2">Entre em Contato</p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="<?php echo $ong['instagram'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/instagram.jpg" alt="Instagram" class="contact-icon-img"></a>
                                    <a href="<?php echo $ong['whatsapp'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/whatsapp.jpg" alt="WhatsApp" class="contact-icon-img"></a>
                                </div>
                            </div>
                        </div>
					</div>

					<?php $ong = $result->fetch_assoc(); ?>

					<div class="col-12 col-sm-6 col-lg-4">
                        <div class="card ong-card rounded-4 shadow-sm border-0">
                            <div class="card-body text-center">
                                <h3 class="ong-title"><?php echo $ong['nome_fantasia'] ?></h3>
								<a href="#" class="abrir-ong" 
                                   data-id="<?php echo $ong['id_ong'] ?>"
                                   data-img="<?php echo $ong['url'] ?>">
                                   <img src="<?php echo $ong['url'] ?>" class="img-fluid ong-img">
                                </a>
                                <p class="ong-distance text-secondary mb-3"><i
                                        class="bi bi-geo-alt-fill text-danger"></i> 2,3 km</p>
                                <h5 class="fw-bold">Necessidades</h5>
                                <ul class="list-unstyled ong-list mb-3">
                                    <li><span class="dot bg-danger"></span> Blusa de Moletom</li>
                                    <li><span class="dot bg-warning"></span> Bermuda</li>
                                    <li><span class="dot bg-success"></span> Camiseta</li>
                                </ul>
                                <p class="mb-2">Entre em Contato</p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="<?php echo $ong['instagram'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/instagram.jpg" alt="Instagram" class="contact-icon-img"></a>
                                    <a href="<?php echo $ong['whatsapp'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/whatsapp.jpg" alt="WhatsApp" class="contact-icon-img"></a>
                                </div>
                            </div>
                        </div>
					</div>

					<?php $ong = $result->fetch_assoc(); ?>

					<div class="col-12 col-sm-6 col-lg-4">
                        <div class="card ong-card rounded-4 shadow-sm border-0">
                            <div class="card-body text-center">
                                <h3 class="ong-title"><?php echo $ong['nome_fantasia'] ?></h3>
								<a href="#" class="abrir-ong" 
                                   data-id="<?php echo $ong['id_ong'] ?>"
                                   data-img="<?php echo $ong['url'] ?>">
                                   <img src="<?php echo $ong['url'] ?>" class="img-fluid ong-img">
                                </a>
                                <p class="ong-distance text-secondary mb-3"><i
                                        class="bi bi-geo-alt-fill text-danger"></i> 2,3 km</p>
                                <h5 class="fw-bold">Necessidades</h5>
                                <ul class="list-unstyled ong-list mb-3">
                                    <li><span class="dot bg-danger"></span> Blusa de Moletom</li>
                                    <li><span class="dot bg-warning"></span> Bermuda</li>
                                    <li><span class="dot bg-success"></span> Camiseta</li>
                                </ul>
                                <p class="mb-2">Entre em Contato</p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="<?php echo $ong['instagram'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/instagram.jpg" alt="Instagram" class="contact-icon-img"></a>
                                    <a href="<?php echo $ong['whatsapp'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/whatsapp.jpg" alt="WhatsApp" class="contact-icon-img"></a>
                                </div>
                            </div>
                        </div>
					</div>

					<?php $ong = $result->fetch_assoc(); ?>

					<div class="col-12 col-sm-6 col-lg-4">
                        <div class="card ong-card rounded-4 shadow-sm border-0">
                            <div class="card-body text-center">
                                <h3 class="ong-title"><?php echo $ong['nome_fantasia'] ?></h3>
								<a href="#" class="abrir-ong" 
                                   data-id="<?php echo $ong['id_ong'] ?>"
                                   data-img="<?php echo $ong['url'] ?>">
                                   <img src="<?php echo $ong['url'] ?>" class="img-fluid ong-img">
                                </a>
                                <p class="ong-distance text-secondary mb-3"><i
                                        class="bi bi-geo-alt-fill text-danger"></i> 2,3 km</p>
                                <h5 class="fw-bold">Necessidades</h5>
                                <ul class="list-unstyled ong-list mb-3">
                                    <li><span class="dot bg-danger"></span> Blusa de Moletom</li>
                                    <li><span class="dot bg-warning"></span> Bermuda</li>
                                    <li><span class="dot bg-success"></span> Camiseta</li>
                                </ul>
                                <p class="mb-2">Entre em Contato</p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="<?php echo $ong['instagram'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/instagram.jpg" alt="Instagram" class="contact-icon-img"></a>
                                    <a href="<?php echo $ong['whatsapp'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/whatsapp.jpg" alt="WhatsApp" class="contact-icon-img"></a>
                                </div>
                            </div>
                        </div>
					</div>

					<?php $ong = $result->fetch_assoc(); ?>

					<div class="col-13 col-sm-6 col-lg-4">
                        <div class="card ong-card rounded-4 shadow-sm border-0">
                            <div class="card-body text-center">
                                <h3 class="ong-title"><?php echo $ong['nome_fantasia'] ?></h3>
								<a href="#" class="abrir-ong" 
                                   data-id="<?php echo $ong['id_ong'] ?>"
                                   data-img="<?php echo $ong['url'] ?>">
                                   <img src="<?php echo $ong['url'] ?>" class="img-fluid ong-img">
                                </a>
                                <p class="ong-distance text-secondary mb-3"><i
                                        class="bi bi-geo-alt-fill text-danger"></i> 2,3 km</p>
                                <h5 class="fw-bold">Necessidades</h5>
                                <ul class="list-unstyled ong-list mb-3">
                                    <li><span class="dot bg-danger"></span> Blusa de Moletom</li>
                                    <li><span class="dot bg-warning"></span> Bermuda</li>
                                    <li><span class="dot bg-success"></span> Camiseta</li>
                                </ul>
                                <p class="mb-2">Entre em Contato</p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="<?php echo $ong['instagram'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/instagram.jpg" alt="Instagram" class="contact-icon-img"></a>
                                    <a href="<?php echo $ong['whatsapp'] ?>" class="contact-icon text-decoration-none"><img
                                            src="./images/whatsapp.jpg" alt="WhatsApp" class="contact-icon-img"></a>
                                </div>
                            </div>
                        </div>
					</div>

					<?php $ong = $result->fetch_assoc(); ?>


                </div>
            </div>
        </section>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const heading = document.querySelector('.donate-heading');
            if (!heading) return;
            const text = heading.textContent.trim();
            heading.textContent = '';
            text.split('').forEach((char, index) => {
                const span = document.createElement('span');
                span.textContent = char;
                span.style.setProperty('--i', index);
                heading.appendChild(span);
            });
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        document.querySelectorAll('.abrir-ong').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();

                const imagem = this.getAttribute('data-img');

                swal({
                    title: "Detalhes da ONG",
                    text: "Veja mais informações abaixo:",
                    content: {
                        element: "img",
                        attributes: {
                            src: imagem,
                            style: "width:100%; border-radius:10px;"
                        }
                    },
                    button: "Fechar"
                });
            });
        });
    </script>
</body>

</html>
