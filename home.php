<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Pipoca</title>
    <link rel="icon" type="image/x-icon" href="./img/cine-logo-wtext.png">
    <link rel="stylesheet" href="./css/style-home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="./javaScript/script-home.js" defer></script>
</head>
<body>
    <header class="navbar">
        <button class="menu-btn"><i class="fas fa-bars"></i></button>
        
        <div class="logo">
          <a href="./index.php?action=logout">
            <img src="./img/cine-logo-wtext.png" alt="Cine Pipoca Logo">
          </a>
        </div>
        <div class="menu">
            <a href="#">Séries</a>
            <a href="#">Filmes</a>
            <a href="#">Animações</a>
            <a href="#">Novelas</a>
        </div>
        <input type="text" id="search-bar" placeholder="Buscar..." onkeyup="searchMovies()" class="search-bar">
        <button class="search-btn"><i class="fas fa-search"></i></button>
    </header>

      <div id="no-results-message" style="display: none; text-align: center; margin: 20px;">
          <h2>Nenhum resultado encontrado</h2>
      </div>
  
      <div class="row">
          <h3 class="title">Ação</h3>
          <div class="progress-bar"></div>
          <div class="container">
              <button class="handle left-handle">
                  <div class="text">&#8249;</div>
              </button>
              <div class="slider">
                  <img src="./img/filmes/ainda estou aqui.jpg" alt="Ainda Estou Aqui">
                  <img src="./img/filmes/As-vantagens-de-ser-inv.jpg" alt="As Vantagens de Ser Invisível">
                  <img src="./img/filmes/ayrton-senna.jpg" alt="Ayrton Senna">
                  <img src="./img/filmes/wolverine.jpg" alt="Wolverine">
                  <img src="./img/filmes/argo.jpg" alt="Argo">
                  <img src="./img/filmes/Barbie e o portal secreto.jpg" alt="Barbie e o Portal Secreto">
                  <img src="./img/filmes/breaking bad.jpg" alt="Breaking Bad">
                  <img src="./img/filmes/Clube da luta.jpg" alt="Clube da Luta">
                  <img src="./img/filmes/chucky.jpg" alt="Chucky">
                  <img src="./img/filmes/Chernobyl.jpg" alt="Chernobyl">
                  <img src="./img/filmes/coringa.jpg" alt="Coringa">
                  <img src="./img/filmes/dark.jpg" alt="Dark">
              </div>
              <button class="handle right-handle">
                  <div class="text">&#8250;</div>
              </button>
          </div>
      </div>
            <div class="row">
                  <h3 class="title">Title 2</h3>
                  <div class="progress-bar"></div>
                <div class="container">
                  <button class="handle left-handle">
                    <div class="text">&#8249;</div>
                  </button>
                  <div class="slider">
                    <img src="./img/filmes/ainda estou aqui.jpg" alt="Ainda Estou Aqui">
                    <img src="./img/filmes/As-vantagens-de-ser-inv.jpg" alt="As Vantagens de Ser Invisível">
                    <img src="./img/filmes/ayrton-senna.jpg" alt="Ayrton Senna">
                    <img src="./img/filmes/wolverine.jpg" alt="Wolverine">
                    <img src="./img/filmes/argo.jpg" alt="Argo">
                    <img src="./img/filmes/Barbie e o portal secreto.jpg" alt="Barbie e o Portal Secreto">
                    <img src="./img/filmes/breaking bad.jpg" alt="Breaking Bad">
                    <img src="./img/filmes/Clube da luta.jpg" alt="Clube da Luta">
                    <img src="./img/filmes/chucky.jpg" alt="Chucky">
                    <img src="./img/filmes/Chernobyl.jpg" alt="Chernobyl">
                    <img src="./img/filmes/coringa.jpg" alt="Coringa">
                    <img src="./img/filmes/dark.jpg" alt="Dark">
                  </div>
                  <button class="handle right-handle">
                    <div class="text">&#8250;</div>
                  </button>
                </div>
              </div>
            <div class="row">
                  <h3 class="title">Title 3</h3>
                  <div class="progress-bar"></div>
                <div class="container">
                  <button class="handle left-handle">
                    <div class="text">&#8249;</div>
                  </button>
                  <div class="slider">
                    <img src="./img/filmes/ainda estou aqui.jpg" alt="Ainda Estou Aqui">
                    <img src="./img/filmes/As-vantagens-de-ser-inv.jpg" alt="As Vantagens de Ser Invisível">
                    <img src="./img/filmes/ayrton-senna.jpg" alt="Ayrton Senna">
                    <img src="./img/filmes/wolverine.jpg" alt="Wolverine">
                    <img src="./img/filmes/argo.jpg" alt="Argo">
                    <img src="./img/filmes/Barbie e o portal secreto.jpg" alt="Barbie e o Portal Secreto">
                    <img src="./img/filmes/breaking bad.jpg" alt="Breaking Bad">
                    <img src="./img/filmes/Clube da luta.jpg" alt="Clube da Luta">
                    <img src="./img/filmes/chucky.jpg" alt="Chucky">
                    <img src="./img/filmes/Chernobyl.jpg" alt="Chernobyl">
                    <img src="./img/filmes/coringa.jpg" alt="Coringa">
                    <img src="./img/filmes/dark.jpg" alt="Dark">
                  </div>
                  <button class="handle right-handle">
                    <div class="text">&#8250;</div>
                  </button>
                </div>
              </div>
        </main>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>Fale Conosco</h4>
                <ul>
                    <li><a href="#">Email: contato@cinepipoca.com</a></li>
                    <li><a href="#">Telefone: (11) 4002-8922</a></li>
                    <li><a href="#">Endereço: Rua dos Cinemas, 123</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Sobre Nós</h4>
                <p>Cine Pipoca é uma plataforma de streaming dedicada a trazer os melhores filmes, séries, animações e novelas para você.</p>
            </div>
            
            <div class="footer-section">
                <h4>Redes Sociais</h4>
                <ul>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Cine Pipoca. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>