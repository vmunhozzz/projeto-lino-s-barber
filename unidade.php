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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

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
          <li class="nav-item"><a class="nav-link" href="#index.php">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="serviços.php">Serviços</a></li>
          <li class="nav-item"><a class="nav-link" href="unidade.php">Nossa Unidade</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- banner com  o texto -->
  <section id="inicio" class="position-relative">
    <img src="images/sobrebanner.jpg" class="img-fluid w-100" style="max-height: 500px; object-fit: cover;" alt="Banner Barbearia">
    <div class="position-absolute top-50 start-50 translate-middle text-white text-center px-3" style="text-shadow: 6px 6px 6px rgba(0,0,0,0.7);">
      <h1 class="display-4 fw-bold">Nossa Unidade!</h1>
      <p class="lead">Um passo de você!</p>
      <a href="https://booksy.com/pt-br/183335_linos-barber_barbearias_574975_araruna" target="_blank" class="btn btn-primary mt-3">Agendar agora</a>
    </div>
  </section>

<!-- unidade  -->
<section id="Unidade" class="py-5 bg-cor-fundo">
  <div class="container">
    <div class="row align-items-center gy-4">

  
      <div class="col-lg-6" data-aos="fade-right">
        <h2 class="mb-3">
          <i class="bi bi-geo-alt-fill me-2 text-danger"></i>Nossa Unidade
        </h2>
        <p class="mb-4">
          Venha nos visitar! A Lino's Barber está localizada em um ponto de fácil acesso e pronta para te atender com estilo e conforto.
        </p>
        <a href="https://www.google.com/maps/dir/?api=1&destination=-23.932113178546896,-52.49941362487888" 
           target="_blank" 
           class="btn btn-dark">
          <i class="bi bi-map-fill me-2"></i>Traçar rota
        </a>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="ratio ratio-16x9 shadow rounded">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.800622980697!2d-52.49941362487888!3d-23.932113178546896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed6fc894b0a5bf%3A0x4b32a5ca918162fd!2sLino%C2%B4s%20Barber!5e0!3m2!1sen!2sbr!4v1749079681401!5m2!1sen!2sbr" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>


<footer id="contato" class="bg-dark text-white py-4">
  <div class="container text-center">
    <p class="mb-1">Siga-nos nas redes sociais:</p>
    <a href="https://www.instagram.com/linosbarber21/" target="_blank" class="text-white me-3">
      <i class="bi bi-instagram fs-4"></i>
    </a>
    <a href="https://wa.me/5544999365764" target="_blank" class="text-white">
      <i class="bi bi-whatsapp fs-4"></i>
    </a>
    <p class="mt-3 mb-0">&copy; Lino's Barber 
      <?php echo date('Y'); ?>
       | Todos os direitos reservados.</p>
  </div>
</footer>


  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
