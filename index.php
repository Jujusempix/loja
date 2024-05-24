<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.scss">
    <link rel="icon" type="image/png" href="">
    <title>Piratex Store</title>
    
</head>
<body>
    <header class="header">
        <a href="index.php" title="Home" class="header-logo">
          <img class="logo" src="imagem/Piratex_logo.png" alt="Logo" title="Logo">
        </a>
  
        <nav class="header-nav">
          <ul class="nav-list">
            <li><a href="index.php" title="Home">Home</a></li>
            <li><a href="index.php?pg=loja" title="Loja">Loja</a></li>
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
  <p>Created By Zé Crânio</p>
  <p>Todos os direitos reservados a Julio Cezar</p>
</footer>
</html>