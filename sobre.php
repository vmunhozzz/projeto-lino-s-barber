<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lino's Barber</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/logo branca-150x120.png">
</head>
<body>

  <!-- banner -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="images/logo branca-150x120.png" alt="Logo da Barbearia" class="logo-navbar">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Abrir menu de navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav gap-3">
          <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="serviços.php">Serviços</a></li>
          <li class="nav-item"><a class="nav-link" href="unidade.php">Nossa Unidade</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- banner com o texto -->
  <section id="inicio" class="position-relative">
    <img src="images/sobrebannerprc.jpeg" class="img-fluid w-100" style="max-height: 500px; object-fit: cover;" alt="Banner Barbearia">
    <div class="position-absolute top-50 start-50 translate-middle text-white text-center px-3" style="text-shadow: 6px 6px 6px rgba(0,0,0,0.7);">
      <h1 class="display-4 fw-bold" data-aos="fade-down">Sobre a Lino's Barber</h1>
      <p class="lead" data-aos="fade-up" data-aos-delay="200">O seu estilo começa aqui!</p>
      <a href="https://booksy.com/pt-br/183335_linos-barber_barbearias_574975_araruna" target="_blank" class="btn btn-primary mt-3" data-aos="zoom-in" data-aos-delay="400">Agendar agora</a>
    </div>
  </section>

  <!-- sobre -->
  <section id="sobre" class="container py-5">
    <div class="row align-items-center">
      
      <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
        <img src="images/sobrefoto1.png" alt="Barbearia moderna" class="sobre-img img-fluid rounded">
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <h2>Sobre a Barbearia</h2>
        <p class="lead">Aqui, cada detalhe importa — do som ambiente ao acabamento final do corte. Unimos técnicas clássicas ao que há de mais moderno no universo masculino para transformar o simples em especial.</p>
        <p>Aliamos técnicas refinadas, ambiente exclusivo e uma curadoria de produtos premium para proporcionar uma experiência completa de cuidado masculino.</p>
        <p class="texto-destaque fst-italic">"Cuidar de si é atitude. Aqui, cada corte tem propósito."</p>
        <p>Com ambiente acolhedor, atendimento personalizado e produtos de primeira linha, garantimos que cada visita seja inesquecível. Venha descobrir por que somos referência quando o assunto é cuidado masculino.</p>
      </div>
    </div>
  </section>

  
  <footer id="contato" class="bg-dark text-white py-4">
    <div class="container text-center">
      <p class="mb-1">Siga-nos nas redes sociais:</p>
      <a href="https://www.instagram.com/linosbarber21/" target="_blank" class="text-white me-3">
        <i class="bi bi-instagram fs-4"></i>
      </a>
      <a href="https://wa.me/5544999365764" target="_blank" class="text-white">
        <i class="bi bi-whatsapp fs-4"></i>
      </a>
      <p class="mt-3 mb-0">&copy; Lino's Barber 2025 | Todos os direitos reservados.</p>
    </div>
  </footer>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>AOS.init();</script>
</body>
</html>
