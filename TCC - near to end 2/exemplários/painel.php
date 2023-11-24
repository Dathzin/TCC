<?php

session_start();

//ini_set ('display_errors',0); 

$servidor            = "localhost";
$usuario_mysql       = "root";
$senha_mysql         = "";

$nome_programa       = "painel.php";
$nome_banco_de_dados = "TCC";

$nome_tabela_1       = "G1_usuario";
$nome_tabela_2       = "G1_teste_pro";
$nome_tabela_3       = "G1_cursos";
$nome_tabela_4       = "G1_salvos";

	
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario_mysql, $senha_mysql, $nome_banco_de_dados)
        or die ("<br>falha na conexão com MySQL ou na seleção do BD");


// Definir as variáveis session
if(!isset($_SESSION['email']))   { $_SESSION['emil']  = null; }
if(!isset($_SESSION['senha']))   { $_SESSION['senha']  = null; }
if(!isset($_SESSION['nome']))   { $_SESSION['nome']  = null; }
//if(!isset($_SESSION['lingua']))   { $_SESSION['lingua']  = null; }
//if(!isset($_SESSION['salvos']))   { $_SESSION['salvos']  = null; }
if(!isset($_SESSION['']))   { $_SESSION['']  = null; }
if(!isset($_SESSION['']))   { $_SESSION['']  = null; }

if(!isset($_SESSION['botao']))        { $_SESSION['botao']       = null; }
if(!isset($_SESSION['msg']))          { $_SESSION['msg']         = null; }
if(!isset($_SESSION['consulta']))     { $_SESSION['consulta']    = "n";  }
if(!isset($_SESSION['arquivo']))      { $_SESSION['arquivo']     = null; }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Cadastro de usuario </title>
    </head>
    <body>
              <h1> Cadastro de usuario </h1>
              <form action="#" method="POST">
										 
						
                    email:   <input type="text" 
					                name="" 
									size="50" 
									maxlength="82" 
     								min="1" 
									max="9999999999"
									autocomplete="off" 
									value = "email"> <p>
								
                    Senha:   <input type="password" 
					                name="" 
									size="15" 
									maxlength="25" 
     								min="1" 
									max="27"
									autocomplete="off" 
								    value = "senha"> <p>
								
                    nome de usuario:<input type="text" 
					                name="" 
									size="50" 
									maxlength="50" 
     								min="1" 
									max="50"
									autocomplete="off" 
								    value = "nome"> <p>
								
                 
										
										

					<fieldset>
						<legend>Linguagem escolhida:</legend>

						<div>
						  	<input type="radio" id="ENG" name="ENG"  
							value = "<?php echo $_SESSION['lingua']; ?>"> 
						    <label for="PT-BR">Português</label>
					      <br>
						</div>

						<div>
							<input type="radio" id="ENG" name="ENG"  
							value = "<?php echo $_SESSION['lingua']; ?>"> 
							<label for="ENG">Inglês</label>
						</div>
					</fieldset>
					<p> 

							                									
					<input type="submit" name="botao" value="Incluir">
					<input type="submit" name="botao" value="Consultar">
					<input type="submit" name="botao" value="Excluir">
					<input type="submit" name="botao" value="Alterar">
					<input type="submit" name="botao" value="Limpar">
					<input type="submit" name="botao" value="Último Código">
					<p>

					Mensagens do Sistema: <input size="100"
                                                 disabled
								                 value = "<?php echo $_SESSION['msg']; ?>"> *<p>
                    Campos com (*) deverão ser preenchidos!<p>
              </form>
    </body>
</html>

<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];

// Pega dados do formulário
$_SESSION['email'] = $email = filter_input(INPUT_POST, 'email');
$_SESSION['senha'] = $senha = filter_input(INPUT_POST, 'senha');
$_SESSION['nome'] = $nome = filter_input(INPUT_POST, 'nome');
$_SESSION['lingua'] = $lingua = filter_input(INPUT_POST, 'lingua');
//$_SESSION['salvos'] = $salvos = filter_input(INPUT_POST, 'salvos');
//$_SESSION[''] = $ = filter_input(INPUT_POST, '');
//$_SESSION[''] = $ = filter_input(INPUT_POST, '');
$_SESSION['botao']      = $botao      = filter_input(INPUT_POST, 'botao');


/*if ($_SESSION['consulta'] == "s") 
    { 
	    echo "<br>Arquivo: " ."../assets/img//" .  $_SESSION['arquivo'];
	    $arquivo = $_SESSION['arquivo'];
	    echo "<center><img src='../assets/img//$arquivo' width=450 height=350 />";
	}
*/
// LIMPAR 
if ($_SESSION['botao'] == "Limpar")
   {
	    session_destroy();
		$email = "email"; 
    	$senha = "senha"; 
		$nome = "nome"; 
		$lingua = "lingua"; 
        $salvos = "salvos"; 
		//$ = "";
		//$ = "";
				   
		$botao = "";
	    $_SESSION['consulta'] = "n";
	    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=$nome_programa'>";
   }

// INCLUIR -------------------------
if ($_SESSION['botao'] == "Incluir")
	{
	   
		  
		  $_SESSION['msg'] = "";
		  
	      if (($_SESSION['email']  == "")  or 
		      ($_SESSION['senha']  == "")  or
		      ($_SESSION['nome']  == "")  
		      //($_SESSION['']  == "")  or
		      //($_SESSION['']  == "")  or
		      //($_SESSION['']  == "")
			  )
		      {$_SESSION['msg']     = "";}
			  
        //-----------------------------------------------------------------------------
		
		
		if ($_SESSION['msg'] == "")
		{
			$inclusao = mysqli_query($conn, "INSERT INTO $nome_tabela_1 values 
			                                                    (
																 
																 '$email',
																 '$senha',
																 '$nome'
																
																 )");

			if ($inclusao)
			   { $_SESSION['msg'] = "Registro $ Incluído!"; }
			else
			   { $_SESSION['msg'] =  ">>> ERRO na inclusão do Registro $! <<<"; }
		}
		
		$_SESSION['botao'] = "";		  
		echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=$nome_programa'>"; 
	}

   // executa quando clica o botão Consultar
   if ($_SESSION['botao']  ==  "Consultar")     
    {
		$resultado = mysqli_query($conn, 'SELECT * FROM $nome_tabela_1 WHERE $email');
		
		$rowcount  = mysqli_num_rows($resultado);
			
		if ($rowcount)
			{ 
				$campo = mysqli_fetch_array($resultado);
				
				$_SESSION['email'] = $email = $campo['email'];
				$_SESSION['senha'] = $senha = $campo['senha'];
				$_SESSION['nome'] = $nome = $campo['nome'];
				$_SESSION['lingua'] = $lingua = $campo['lingua'];
				$_SESSION['salvos'] = $salvos = $campo['salvos'];
				
				$_SESSION['consulta']  = "s";
				$_SESSION['msg']       = "Registro $ Consultado!";
				$_SESSION['arquivo']   = $campo[''];
				
			} 
		else
			{ 
				$_SESSION['msg'] = "Registro não cadastrado!";
			}
    $_SESSION['botao'] = "";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=$nome_programa'>"; 
	}

if ($_SESSION['botao'] == "Excluir")
   {
        if ($_SESSION['consulta'] == "n") 
            { 
		        $_SESSION['msg'] = "Para Excluir é Necessário Consultar o Registro!"; 
			}
        else
			{
				$email = $_SESSION['email'];
				$sql = "DELETE FROM $nome_tabela_1 WHERE ='$email'";
				if (mysqli_query($conn, $sql))
					{
						$_SESSION['msg'] = "Registro $ Excluido!";
					}  
				else
					{ 
						$_SESSION['msg'] = "Registro $ Não Cadastrado!";
					}  
			}
	$_SESSION['botao'] = "";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=$nome_programa'>";       
   }

if ($_SESSION['botao'] == "Alterar")
   {
        if ($_SESSION['consulta'] == "n")
            { 
				$_SESSION['msg'] = "Para Alterar é Necessário Consultar o Registro!";
            } 
        else
            {
			  // Pega dados do formulário
				$_SESSION['email'] = $email = filter_input(INPUT_POST, 'email');
				$_SESSION['senha'] = $senha = filter_input(INPUT_POST, 'senha');
				$_SESSION['nome'] = $nome = filter_input(INPUT_POST, 'nome');
				$_SESSION['lingua'] = $lingua = filter_input(INPUT_POST, 'lingua');
				$_SESSION['salvos'] = $salvos = filter_input(INPUT_POST, 'salvos');	
				$_SESSION['botao']      = $botao      = filter_input(INPUT_POST, 'botao');

              $sql  = "UPDATE $nome_tabela_1 SET 
			                                      = '$email',
			                                      = '$senha',
			                                      = '$nome',
			                                      = '$lingua',
			                                      = '$salvos'
			                                
			                                

                                                 WHERE ='$email'";
										   
              mysqli_query($conn, $sql) or die ("ERRO NA ALTERACAO!");
              $_SESSION['msg'] = "Registro $ Alterado!";
             }
	 $_SESSION['botao'] = "";
	 echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=$nome_programa'>"; 
     }
	 
   if ($_SESSION['botao']  ==  "Último Código")     
    {
		$resultado = mysqli_query($conn, "SELECT * FROM $nome_tabela_1 ORDER BY  DESC LIMIT 1");
		
		$rowcount  = mysqli_num_rows($resultado);
			
		if ($rowcount)
			{ 
				$campo = mysqli_fetch_array($resultado);
				
				$_SESSION['email'] = $email = $campo['email'];
				$_SESSION['senha'] = $senha = $campo['senha'];
				$_SESSION['nome'] = $nome = $campo['nome'];
				$_SESSION['lingua'] = $lingua = $campo['lingua'];
				$_SESSION['salvos'] = $salvos = $campo['salvos'];
				$_SESSION['consulta']  = "s";
				$_SESSION['msg']       = "Registro $ Consultado!";
				$_SESSION['arquivo']   = $campo[''];
				
			} 
		else
			{ 
				$_SESSION['msg'] = "Registro não cadastrado!";
			}
    $_SESSION['botao'] = "";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=$nome_programa'>"; 
	}

	 if($_SESSION[''])
	 

?>
