<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./imagem/vaporzin.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/8b28da4c90.js" crossorigin="anonymous"></script>

  <title>Vapor Store</title>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
      <div class="container-fluid titulo-robo">
        <a class="navbar-brand" href="index.php?pg=home"><img class="logo" src="./imagem/VaporStorelogo.png" alt="Piratex"></a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php?pg=loja">Loja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php?pg=equipe">Equipe</a>
            </li>
            <li class="nav-item">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-dark fs-2" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Contato</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-theme="dark">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">ENTRE EM CONTATO!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label text-white fs-3">Nome completo:</label>
              <input type="text" class="form-control" id="recipient-name" placeholder="Digite seu nome">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label text-white fs-3">E-mail:</label>
              <input type="text" class="form-control" id="recipient-name" placeholder="exemplo@exem.com">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label text-white fs-3">Mensagem:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
          <button type="button" class="btn btn-danger">ENVIAR</button>
        </div>
      </div>
    </div>
  </div>
  <main>
    <?php
    $pg = $_GET["pg"] ?? "home";

    $pg = "paginas/{$pg}.php";

    if (file_exists($pg)) {
      include $pg;
    } else {
      include "paginas/Erro.php";
    }
    ?>
  </main>

</body>
<footer class="footer">
  <img class="logocavera" src="imagem/Copyright_logo.png" alt="logo cybertech" title="logo cybertech" />
  <p>Created By Zé Hunter</p>
  <p>Copyright © Todos os direitos reservados - Julio Cezar</p>
</footer>

</html>