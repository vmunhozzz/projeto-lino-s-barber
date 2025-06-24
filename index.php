<?php
$pagina = basename($_SERVER['PHP_SELF']);
$navItems = [
  'Início' => 'index.php',
  'Sobre' => 'sobre.php',
  'Serviços' => 'serviços.php',
  'Nossa Unidade' => 'unidade.php',
  'Contato' => 'contato.php'
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lino's Barber</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="short cut icon" href="images/logo branca-150x120.png">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>

  <!-- banner do index -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo branca-150x120.png" alt="Logo da Barbearia" class="logo-navbar">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Abrir menu de navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav gap-3">
          <?php foreach ($navItems as $nome => $link): ?>
            <li class="nav-item">
              <a class="nav-link <?= $pagina == $link ? 'active' : '' ?>" href="<?= $link ?>"><?= $nome ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- banner com o texto -->
  <section id="inicio" class="position-relative">
    <img src="images/lnsbfr.jpg" class="img-fluid w-100" style="max-height: 500px; object-fit: cover;" alt="Banner Barbearia">
    <div class="position-absolute top-50 start-50 translate-middle text-white text-center px-3" style="text-shadow: 1px 1px 6px rgba(0,0,0,0.7);">
      <h1 class="display-4 fw-bold" data-aos="fade-down">Estilo e Confiança</h1>
      <p class="lead" data-aos="fade-up">Cortes modernos, clássicos e atendimento de primeira.</p>
      <a href="https://booksy.com/pt-br/183335_linos-barber_barbearias_574975_araruna" target="_blank" class="btn btn-primary mt-3" data-aos="zoom-in">Agendar agora</a>
    </div>
  </section>

<section id="sobre" class="container" data-aos="fade-up">
  <div class="row align-items-center">
    <div class="col-md-6 mb-4 mb-md-0">
      <img src="images/ambiente.jpg" alt="Barbearia moderna" class="sobre-img" />
    </div>
    <div class="col-md-6">
      <h2>Sobre a Barbearia</h2>
      <p class="lead">Um espaço onde tradição e modernidade se encontram para criar estilos únicos e autênticos.</p>
      <p>Fundada com paixão e dedicação, nossa barbearia oferece uma experiência completa para quem valoriza qualidade e estilo. Desde cortes clássicos até as últimas tendências, nossa equipe está preparada para realçar sua personalidade.</p>
      <p class="texto-destaque fst-italic">"Mais que um corte, uma experiência que conecta você com sua melhor versão."</p>
      <a href="sobre.html" class="btn btn-primary mt-3">Saiba mais</a>
    </div>
  </div>
</section>

<!-- serviços -->
<section id="servicos" class="container my-5">
  <h2 class="text-center mb-4" data-aos="fade-up">Nossos Serviços</h2>
  <div class="row text-center">
    <div class="col-12 col-md-4" data-aos="fade-right">
      <div class="card shadow-sm">
        <div class="card-body">
          <i class="bi bi-scissors fs-1 text-primary"></i>
          <h5 class="card-title mt-3">Corte de Cabelo</h5>
          <p class="card-text">Cortes modernos e clássicos para todos os estilos.</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 mt-4 mt-md-0" data-aos="zoom-in">
      <div class="card shadow-sm">
        <div class="card-body">
          <i class="bi bi-person-lines-fill fs-1 text-primary"></i>
          <h5 class="card-title mt-3">Barba</h5>
          <p class="card-text">Modelagem e cuidados completos para sua barba.</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 mt-4 mt-md-0" data-aos="fade-left">
      <div class="card shadow-sm">
        <div class="card-body">
          <i class="bi bi-brush fs-1 text-primary"></i>
          <h5 class="card-title mt-3">Pé e Risco</h5>
          <p class="card-text">Detalhes que fazem a diferença no visual.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- agendar -->
<section class="container my-5" data-aos="zoom-in-up">
  <div class="position-relative rounded overflow-hidden">
    <img src="images/WhatsApp Image 2025-06-02 at 20.52.46-900x450.jpg" class="img-fluid w-100 rounded agendamento-img" alt="Agendamento" loading="lazy">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
      <div class="d-grid">
        <a href="https://booksy.com/pt-br/183335_linos-barber_barbearias_574975_araruna" target="_blank" class="btn btn-primary btn-lg shadow-lg">Agende seu horário</a>
      </div>
    </div>
  </div>
</section>


<footer id="contato" class="bg-dark text-white py-4" data-aos="fade-up">
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
<script>
  AOS.init();
</script>

</body>
</html>
