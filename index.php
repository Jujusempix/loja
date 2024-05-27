<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="">
    <title>Piratex Store</title>
    
</head>
<body>
    <header>
        <nav class="nav">
          <a href="index.php" title="Home">
            <img class="logo" src="imagem/Piratex_logo.png" alt="Logo" title="Logo">
          </a>
          <ul class="nav-list">
            <li><a href="index.php" title="Home">Home</a></li>
            <li><a href="index.php?pg=equipe" title="Equipe">Equipe</a></li>
            <li><a href="index.php?pg=contato" title="Contato">Contato</a></li>
          </ul>
        </nav>
      </header>
    <main>
        <?php
            $pg = $_GET["pg"] ?? "home";

            $pg = "paginas/{$pg}.php";

            if (file_exists($pg)) {
                include $pg;
            } else {
                include "paginas/erro.php";
            }
        ?>
    </main>
    
</body>
<footer class="footer">
  <img class="logocavera" src="imagem/Copyright_logo.png" alt="logo cybertech" title="logo cybertech"/>
  <p>Created By Zé Hunter</p>
  <p>Copyright © Todos os direitos reservados - Julio Cezar</p>
</footer>
</html>