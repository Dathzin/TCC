<?php
session_start();
  include "configbd.php";
 
  $verif = mysqli_query($conexao, "select * from G1_usuario limit 1");
  
  if(mysqli_num_rows($verif) > 0){

  

?>
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
     
      <a id="tryling" href="tryling.php">Tryling</a> 
      <a id="profile" href="profile.php">meu perfil</a>
      
    </nav>
  </header>
<main>
<div id="container-5">
      <h2>Planos de curso</h2>
    <div id="plano-br">
      <h3>Português: PT-BR</h3>
        <div class="text-pt-en">
             <p>O Português é a nona língua mais falada em todo mundo, 
              para mais o Brasileiro. Sendo considerado difícil pelos 
              própios falantes, facilitamos esse desafio pra você! </p>
        </div>
      
            <div class="img-pais">
                <img src="assets/bandeira-brasil.png" alt="">
            </div>

        <div class="botao-plan">
        <button class="button-87" role="button">
          <a href="curso_pt.php">Começar</a>
        </button>
      </div>  
</div>

    <div id="plano-eua">
      <h3>Inglês: EN</h3>
        <div class="text-pt-en">
             <p>O Inglês é a língua Fundamental para o mercado de trabalho
              , não obstante, abre portas para conhecer diversos lugares do mundo.
               Se seus senhos vão além do Brasil, prepera-se e começa já!   </p>
        </div>
      
            <div class="img-pais">
                <img src="assets/bandeira-eua.png" alt="">
            </div>

          <div class="botao-plan">
              <button class="button-86" role="button">
                  <a href="curso_en.php">Começar</a>
              </button>
         </div>  
      
    </div>
</div>

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
<?php
}else{
  include "cadastro.php";
}


?>


</main>
</html>