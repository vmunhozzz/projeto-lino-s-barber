<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lino's Barber</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/logo branca-150x120.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">
</head>
<body>

<?php
$hora = date("H");
if ($hora < 12) {
  $saudacao = "Bom dia";
} elseif ($hora < 18) {
  $saudacao = "Boa tarde";
} else {
  $saudacao = "Boa noite";
}
?>
<div class="text-center bg-dark py-2 text-ligth">
  <p class="mb-0"><?= $saudacao ?>! Bem-vindo à Lino's Barber.</p>
</div>

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
        <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
        <li class="nav-item"><a class="nav-link" href="serviços.php">Serviços</a></li>
        <li class="nav-item"><a class="nav-link" href="unidade.php">Nossa Unidade</a></li>
        <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="py-5" id="contato">
  <div class="container">
    <h2 class="text-center mb-4">Agende seu horário</h2>
    <form action="enviar.php" method="POST" class="row g-3" id="formulario-contato">
      <div class="col-md-6">
        <label for="nome" class="form-label">Nome completo</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="col-md-6">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" required>
      </div>
      <div class="col-md-6">
        <label for="servico" class="form-label">Serviço desejado</label>
        <select class="form-select" id="servico" name="servico" required>
          <option selected disabled value="">Escolha...</option>
          <option>Corte de cabelo</option>
          <option>Barba</option>
          <option>Combo (corte + barba)</option>
          <option>Coloração</option>
          <option>Outros</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="data" class="form-label">Data do agendamento</label>
        <input type="date" class="form-control" id="data" name="data" required>
      </div>
      <div class="col-md-6">
        <label for="mensagem" class="form-label">Observações</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-dark px-5">Enviar</button>
      </div>
    </form>
  </div>
</section>

<footer class="bg-dark text-white py-4">
  <div class="container text-center">
    <p class="mb-1">Siga-nos nas redes sociais:</p>
    <a href="https://www.instagram.com/seuusuario" target="_blank" class="text-white me-3">
      <i class="bi bi-instagram fs-4"></i>
    </a>
    <a href="https://wa.me/5599999999999" target="_blank" class="text-white">
      <i class="bi bi-whatsapp fs-4"></i>
    </a>
    <p class="mt-3 mb-0">&copy; Lino's Barber 2025 | Todos os direitos reservados.</p>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>


<script>
const form = document.getElementById('formulario-contato');

form.addEventListener('submit', function (e) {
  e.preventDefault();

  const campos = ['nome', 'email', 'telefone', 'servico', 'data'];
  let valido = true;

  campos.forEach(id => {
    const campo = document.getElementById(id);
    if (!campo.value.trim()) {
      campo.classList.add('is-invalid');
      valido = false;
    } else {
      campo.classList.remove('is-invalid');
    }
  });

  if (!valido) {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Por favor, preencha todos os campos obrigatórios.',
      confirmButtonText: 'OK'
    });
  } else {
    Swal.fire({
      title: 'Deseja confirmar o envio?',
      text: "Verifique se todos os dados estão corretos.",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sim, enviar',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          icon: 'success',
          title: 'Sucesso!',
          text: 'Agendamento enviado com sucesso!',
          confirmButtonText: 'OK'
        }).then(() => {
          form.reset();
        });

  
      }
    });
  }
});
</script>

</body>
</html>
