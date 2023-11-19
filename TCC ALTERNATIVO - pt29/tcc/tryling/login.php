<?php
session_start();
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
      <div class="logo">
      </div>  
      <a id="tryling" href="tryling.php">Tryling</a> 
    </nav>
  </header>

  <main>
    <div id="container-login">
        <h2 class="login-slogan">Seja muito bem vindo novamente!<h2>
         <div class="login">
              <form action="login.php" method="post">
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
              <input class="bot-log" type="submit" name="submit" value="Acessar">

        </div> 
      </form>
    </div>
  </main>
<?php 

if(isset($_POST['botao']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('configbd.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql ="SELECT * FROM $nome_tabela_1 WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) > 0)
        {
            session_start();
            $_SESSION['email'] = $email;
            echo "<meta HTTP-EQUIV='refresh' CONTENT='1.5;URL=planodecurso.php'>";
            exit();
        }
        else
        {
            echo "Esse usuário não existe";
        }
    }
    ?>


<script src="jstry.js"></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>
