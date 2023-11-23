  <?php 


//ini_set ('display_errors',0); 

$servidor            = "localhost";
$usuario_mysql       = "root";
$senha_mysql         = "";

$nome_programa       = "cadastro.php";
$nome_banco_de_dados = "TCC_2023";

$nome_tabela_1       = "G1_usuario";
$nome_tabela_2       = "G1_teste_pro";
$nome_tabela_3       = "G1_cursos";
$nome_tabela_4       = "G1_salvos";

	
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario_mysql, $senha_mysql, $nome_banco_de_dados)
        or die ("<br>falha na conexão com MySQL ou na seleção do BD");


// Definir as variáveis session
if(!isset($_SESSION['email']))        { $_SESSION['email']      = null; }
if(!isset($_SESSION['senha']))        { $_SESSION['senha']      = null; }
if(!isset($_SESSION['nome']))         { $_SESSION['nome']       = null; }
if(!isset($_SESSION['msg']))          { $_SESSION['msg']        = null; }
if(!isset($_SESSION['botao']))        { $_SESSION['botao']      = null; }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tryling</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="css/bootstrap.min.css" media="all" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-Vu5FpJWdQnpJCEsIcnusE/bV/ZyMMlKKyGONqGTkBqNzrL3L/sC2e2Yvx8uB7SBi" crossorigin="anonymous">
</head>
<body>
<header class="header">
    <nav class="navigation">
      <div class="logo">
      </div>  
      <a id="tryling" href="tryling.php">Tryling</a> 
    </nav>
  </header>
<main>
  <div id="container-cadastro">
  <h2 class="cadastro-slogan"> Começe na Tryling gratuitamente </h1>
    <div class="cadastro">
   
      <form action="cadastro.php" method="post">
        
      <ul>
            <li class="list-cad">
                <label for="email" class="formtext" >E-mail:</label><br>
                    <input type="email" 
                    id="email" 
                    name="email" 
                    placeholder="email@email.com"
                    required>
                    
              </li>
            <li class="list-cad">
              <label for="nome" class="formtext" >Nome:</label><br>
                    <input type="text" 
                    id="nome" 
                    name="nome" 
                    placeholder="Nome"
                    required>
                    
            </li>
            <li class="list-cad">
              <label for="senha" class="formtext" >Senha:</label><br>
                    <input 
                    type="password" 
                    id="senha" 
                    name="senha"
                    placeholder="Senha" 
                    required>
                    <br>
                </li>
                </ul>
          <h5 id="cadastr"><a href="login.php"> ja possui conta?</a></h5>
          
            <input class="bot-cad" 
                   type="submit" 
                   name="botao" 
                   value="Vamos lá!"> 
      

</form>

<?php
/*
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
$_SESSION['nome'] = $nome;
*/
// Pega dados do formulário
$_SESSION['email']    = $email  = filter_input(INPUT_POST, 'email');
$_SESSION['senha']    = $senha  = filter_input(INPUT_POST, 'senha');
$_SESSION['nome']     = $nome   = filter_input(INPUT_POST, 'nome');
$_SESSION['botao']    = $botao  = filter_input(INPUT_POST, 'botao');

if ($_SESSION['botao'] == "Limpar")
   {
	    session_destroy();
		$email   = "email"; 
    $senha   = "senha"; 
		$nome    = "nome"; 
		//$lingua  = "lingua"; 
    //$salvos  = "salvos"; 
		//$ = "";
		//$ = "";
				   
		$botao = "";
	    $_SESSION['consulta'] = "n";
	    echo "<meta HTTP-EQUIV='refresh' CONTENT='2.5;URL=$nome_programa'>";
   }

   
// INCLUIR -------------------------
if ($_SESSION['botao'] == "Vamos lá!")
{
   
    
      if (($_SESSION['email']  == $email )  or 
        ($_SESSION['senha']  == $senha )  or
        ($_SESSION['nome']  == $nome )  
        //($_SESSION['']  == "")  or
        //($_SESSION['']  == "")  or
        //($_SESSION['']  == "")
      )
      //-----------------------------------------------------------------------------
  
  

    $inclusao = mysqli_query($conn, "INSERT INTO $nome_tabela_1 values 
                                                        (
                               
                               '$email',
                               '$senha',
                               '$nome'
                              
                               )");

    if ($inclusao){;}
    else{;}
  
  //$_SESSION['botao'] = "Cadastrar" or "Limpar";		

  if(isset($_SESSION['botao']) && !empty($_SESSION['email']) && !empty($_SESSION['senha']))
    {
        include_once('configbd.php');
        $email = $_SESSION['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM $nome_tabela_1 WHERE email = '$email'";
        $result = $conexao->query($sql);
      
        if (mysqli_num_rows($result) > 0) {
            // O usuário já existe, exiba uma mensagem de erro
            echo '<script>
                    document.getElementById("mensagem-erro").innerHTML = "Usuário já existe.";
                  </script>';
        } else {
            // O usuário não existe, continue com o restante do seu código
            echo "Esse usuário não existe";

        /*if(mysqli_num_rows($result) > 0)
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
        */
    }
    }
  echo "<meta HTTP-EQUIV='refresh' CONTENT='3.5;URL=tryling.php'>"; 
}

?>
</main>

</body>
</html>