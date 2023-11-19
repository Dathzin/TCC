<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tryling</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-Vu5FpJWdQnpJCEsIcnusE/bV/ZyMMlKKyGONqGTkBqNzrL3L/sC2e2Yvx8uB7SBi" crossorigin="anonymous">
</head>
  

  <!--<link rel="stylesheet" href="style.css">-->
<body>
  <header class="header">
    <nav class="navigation">
      <div class="logo">
      </div>  
      <a id="tryling" href="tryling.php">Tryling</a> 
    </nav>
  </header>

  <main>
    <div id="container-1" >      
        <h2 id="slogan-principal"> Aprenda qualquer idioma com você mesmo</h2>
        
            <p class="text-box1">
              Na Tryling, você aprende do seu jeito e do seu tempo. Oferecemos planos de curso para vários idiomas.Escolha a rota que deseja desbravar o mundo, aprendendosuas línguas.
            </p>
        
        <div id="img-world">
                    <a href="cadastro.php">
                      <button href="cadastro.php" id="button-cad">
                         <span> Começe já </span>
                      </button>
                    </a>
                    <a href="login.php">
                      <button href="login.php" id="button-log">
                        <span> Já tenho conta </span>
                      </button>
                    </a>
                    <img src="assets/world-map-1.png" alt="imagem mundial pontilhada">
        </div>
    </div>
    <div id="nacional-imgs">
                <h2>Planos Disponíveis</h2>
         <div class="img-flag">
            <img src="assets/BR.png" alt="bandeira do brasil">
         </div>
       
         <div class="img-flag">
            <img src="assets/EUA.png" alt="bandeira do estados unidos da américa">
         </div>
       
         <div class="img-flag"> 
            <img src="assets/JP.png" alt="bandeira do japão">
         </div>
     </div>
    <div id="container-2">
      <div id="text-box2">
           <p> 
           É um site de planos de curso para o aprendizado de idiomas. 
           Ademais, um programa gratuito para todos visando a 
           possibilidade de uma variedade linguística. Perfeita para interessados
           em uma forma de começar por conteúdos específicos de 
           certo idioma para qualquer fim. 
           <p>  
      </div> 
      <div id="img-2">
      <img src="assets/livros-home.png" alt="livros-empilhados">
      </div>
      <div id="text-box3">
           <p> 
            Desenvolvemos essa ideia como tentativa de auxílio para o 
           aprendizado de línguas estrangeiras. A Tryling, acima de tudo, 
           procura oferecer um plano sem cobrança. Através dos nossos 
           planos de curso, disponibilizaremos a oportunidade dos 
           usuários serem autônomos e de estudarem em seus tempos.
           <p> 
      </div>         
    </div>
    
  </main>
<footer>
 <div id="footer_content">
  <div id="footer_contats">
    <h1>Tryling</h1>
    <p> Aprenda qualquer idioma com você mesmo</p>
    <div id="footer_social_media">

      <a href="#" class="footer-link" id="instagram">
        <i class="fa-brands fa-instagram"></i>
      </a>
      <a href="#" class="footer-link" id="whatsapp">
        <i class="fa-brands fa-whatsapp"></i>
      </a>
      <a href="#" class="footer-link" id="discord">
        <i class="fa-brands fa-discord"></i>
      </a>
   
   </div>
    </div>

    
   <ul class="footer_list">
      <li>
          <h3>Cursos Disponíveis</h3>
      </li>
      <li>
          <a href="#" class="footer-link">Japonês</a>
      </li>
      <li>
          <a href="#" class="footer-link">Inglês</a>
      </li>
      <li>
          <a href="#" class="footer-link">Português</a>
      </li>
    </ul>
  
    <ul class="footer_list">
      <li>
        <h3>Quem Somos?</h3>
      </li>
      <li>
        <a href="#" class="footer-link">Colaboradores</a>
      </li>
      <li>
        <a href="#" class="footer-link">Projetos</a>
      </li>
      <li>
        <a href="#" class="footer-link">Sobre nós</a>
      </li>
    </ul>
  
  

    <div id="footer_subscribe">
        <h3>Cadastre-se</h3>

          <p>
              Escreva seu email para registrar-se
              na Tryling
          </p>

            <div id="input_group">
                  <input type="email" id="email">
                  <button>
                    <i class="fa-solid fa-user"></i>
                  </button>
            </div>
    </div>
 </div>
 <div id="footer_copyright">
          &#169
          2023 all rights reserve
 </div>
</footer>
<script src="jstry.js"></script>

</body>
</html>
