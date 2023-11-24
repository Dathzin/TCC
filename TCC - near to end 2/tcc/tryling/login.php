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
    <div id="container-login">
        <h2 class="login-slogan">Seja muito bem vindo novamente!<h2>
         <div class="login">
              <form action="planodecurso.php" method="$_POST">
              <ul>
                  <li class="list-log">
                      <label for="email" class="formtext" >E-mail:</label><br>
                          <input type="email" 
                          id="email" 
                          name="email" 
                          placeholder="email@email.com"
                          required> 
                  </li>
                  <li class="list-log">

                      <label for="senha" class="formtext" >Senha:</label><br>
                          <input 
                          type="password" 
                          id="senha" 
                          name="senha"
                          placeholder="senha" 
                          required>
                  </li>
                  </ul>

                   <h5 id="cadastr"><a href="cadastro.php"> Nâo possui conta?</a></h5>
                   
              <input 
                          class="bot-log"
                          type="submit" 
                          name="botao" 
                          value="Acessar">
        </div> 
      </form>
    </div>
  </main>

<script src="jstry.js"></script>
</body>
</html>
