
<?php

session_start();

//ini_set ('display_errors',0); 

$servidor            = "localhost";
$usuario_mysql       = "root";
$senha_mysql         = "";

$nome_programa       = "iceal-tb_produtos.php";

$nome_banco_de_dados = "bd_mercado";
$nome_tabela_1       = "tb_produtos";

	
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario_mysql, $senha_mysql, $nome_banco_de_dados)
        or die ("<br>falha na conexão com MySQL ou na seleção do BD");


// Definir as variáveis session
if(!isset($_SESSION['pro_codpro']))   { $_SESSION['pro_codpro']  = null; }
if(!isset($_SESSION['pro_catego']))   { $_SESSION['pro_catego']  = null; }
if(!isset($_SESSION['pro_nompro']))   { $_SESSION['pro_nompro']  = null; }
if(!isset($_SESSION['pro_precox']))   { $_SESSION['pro_precox']  = null; }
if(!isset($_SESSION['pro_imagem']))   { $_SESSION['pro_imagem']  = null; }
if(!isset($_SESSION['pro_qtddis']))   { $_SESSION['pro_qtddis']  = null; }
if(!isset($_SESSION['pro_linkxx']))   { $_SESSION['pro_linkxx']  = null; }

if(!isset($_SESSION['botao']))        { $_SESSION['botao']       = null; }
if(!isset($_SESSION['msg']))          { $_SESSION['msg']         = null; }
if(!isset($_SESSION['consulta']))     { $_SESSION['consulta']    = "n";  }
if(!isset($_SESSION['arquivo']))      { $_SESSION['arquivo']     = null; }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Cadastro de Produtos </title>
    </head>
    <body>
              <h1> Cadastro de Produtos </h1>
              <form action="#" method="POST">
										 
						
                    Código do Produto: <input type="text" 
					                name="pro_codpro" 
									size="10" 
									maxlength="12" 
     								min="1" 
									max="9999999999"
									autocomplete="off" 
									value = "<?php echo $_SESSION['pro_codpro']; ?>"> <p>
								
                    Tcategoria do Produto: <input type="text" 
					                name="pro_catego" 
									size="2" 
									maxlength="2" 
     								min="" 
									max=""
									autocomplete="off" 
								    value = "<?php echo $_SESSION['pro_catego']; ?>"> *<p>
								
                    Nome do Produto: <input type="text" 
					                name="pro_nompro" 
									size="80" 
									maxlength="" 
     								min="" 
									max=""
									autocomplete="off" 
								    value = "<?php echo $_SESSION['pro_nompro']; ?>"> *<p>
								
                    Preço do produto: <input type="text" 
					                name="pro_precox" 
									size="10" 
									maxlength="10" 
     								min="" 
									max=""
									autocomplete="off" 
								    value = "<?php echo $_SESSION['pro_precox']; ?>"> *<p>
								

	                Nome do arquivo de imagem: <input type="text" 
					                name="pro_imagem" 
									size="50" 
									maxlength="50" 
     								min="" 
									max=""
									autocomplete="off" 
								    value = "<?php echo $_SESSION['pro_imagem']; ?>"> *<p>

	                Quantidade disponível: <input type="number" 
					                name="pro_qtddis" 
									size="7" 
									maxlength="5" 
     								min="1" 
									max="99999"
									autocomplete="off" 
								    value = "<?php echo $_SESSION['pro_qtddis']; ?>"> *<p>

	                Link de venda: <input type="text" 
					                name="pro_linkxx" 
									size="80" 
									maxlength="80" 
     								min="" 
									max=""
									autocomplete="off" 
								    value = "<?php echo $_SESSION['pro_linkxx']; ?>"> *<p>

									
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

// Pega dados do formulário
$_SESSION['pro_codpro'] = $pro_codpro = filter_input(INPUT_POST, 'pro_codpro');
$_SESSION['pro_catego'] = $pro_catego = filter_input(INPUT_POST, 'pro_catego');
$_SESSION['pro_nompro'] = $pro_nompro = filter_input(INPUT_POST, 'pro_nompro');
$_SESSION['pro_precox'] = $pro_precox = filter_input(INPUT_POST, 'pro_precox');
$_SESSION['pro_imagem'] = $pro_imagem = filter_input(INPUT_POST, 'pro_imagem');
$_SESSION['pro_qtddis'] = $pro_qtddis = filter_input(INPUT_POST, 'pro_qtddis');
$_SESSION['pro_linkxx'] = $pro_linkxx = filter_input(INPUT_POST, 'pro_linkxx');
$_SESSION['botao']      = $botao      = filter_input(INPUT_POST, 'botao');


if ($_SESSION['consulta'] == "s") 
    { 
	    echo "<br>Arquivo: " ."../assets/img/produtos/" .  $_SESSION['arquivo'];
	    $arquivo = $_SESSION['arquivo'];
	    echo "<center><img src='../assets/img/produtos/$arquivo' width=450 height=350 />";
	}

// LIMPAR -------------------------
if ($_SESSION['botao'] == "Limpar")
   {
	    session_destroy();
		$pro_codpro = ""; 
    	$pro_catego = ""; 
		$pro_nompro = ""; 
		$pro_precox = ""; 
        $pro_imagem = ""; 
		$pro_qtddis = "";
		$pro_linkxx = "";
				   
		$botao = "";
	    $_SESSION['consulta'] = "n";
	    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=$nome_programa'>";
   }

// INCLUIR -------------------------
if ($_SESSION['botao'] == "Incluir")
	{
	    //Testar se campos estão em branco------------------------------
		  
		  $_SESSION['msg'] = "";
		  
	      if (//($_SESSION['pro_codpro']  == "")  or 
		      ($_SESSION['pro_catego']  == "")  or
		      ($_SESSION['pro_nompro']  == "")  or
		      ($_SESSION['pro_precox']  == "")  or
		      ($_SESSION['pro_imagem']  == "")  or
		      ($_SESSION['pro_qtddis']  == "")  or
		      ($_SESSION['pro_linkxx']  == ""))
		      {$_SESSION['msg']      = "Campos com (*) deverão ser preenchidos!";}
			  
        //-----------------------------------------------------------------------------
		
		if ($_SESSION['msg'] == "")
		{
			$inclusao = mysqli_query($conn, "INSERT INTO $nome_tabela_1 values 
			                                                    (
																 
																 '$pro_codpro',
																 '$pro_catego',
																 '$pro_nompro',
																 '$pro_precox',
																 '$pro_imagem',
																 '$pro_qtddis',
																 '$pro_linkxx'
																 
																 )");

			if ($inclusao)
			   { $_SESSION['msg'] = "Registro $pro_codpro Incluído!"; }
			else
			   { $_SESSION['msg'] =  ">>> ERRO na inclusão do Registro $pro_codpro! <<<"; }
		}
		
		$_SESSION['botao'] = "";		  
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=$nome_programa'>"; 
	}

   // executa quando clica o botão Consultar
   if ($_SESSION['botao']  ==  "Consultar")     
    {
		$resultado = mysqli_query($conn, "SELECT * FROM $nome_tabela_1 WHERE pro_codpro='$pro_codpro'");
		
		$rowcount  = mysqli_num_rows($resultado);
			
		if ($rowcount)
			{ 
				$campo = mysqli_fetch_array($resultado);
				
				$_SESSION['pro_codpro'] = $pro_codpro = $campo['pro_codpro'];
				$_SESSION['pro_catego'] = $pro_catego = $campo['pro_catego'];
				$_SESSION['pro_nompro'] = $pro_nompro = $campo['pro_nompro'];
				$_SESSION['pro_precox'] = $pro_precox = $campo['pro_precox'];
				$_SESSION['pro_imagem'] = $pro_imagem = $campo['pro_imagem'];
				$_SESSION['pro_qtddis'] = $pro_qtddis = $campo['pro_qtddis'];
				$_SESSION['pro_linkxx'] = $pro_linkxx = $campo['pro_linkxx'];
				
				$_SESSION['consulta']  = "s";
				$_SESSION['msg']       = "Registro $pro_codpro Consultado!";
				$_SESSION['arquivo']   = $campo['pro_imagem'];
				
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
				$pro_codpro = $_SESSION['pro_codpro'];
				$sql = "DELETE FROM $nome_tabela_1 WHERE pro_codpro='$pro_codpro'";
				if (mysqli_query($conn, $sql))
					{
						$_SESSION['msg'] = "Registro $pro_codpro Excluido!";
					}  
				else
					{ 
						$_SESSION['msg'] = "Registro $pro_codpro Não Cadastrado!";
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
				$_SESSION['pro_codpro'] = $pro_codpro = filter_input(INPUT_POST, 'pro_codpro');
				$_SESSION['pro_catego'] = $pro_catego = filter_input(INPUT_POST, 'pro_catego');
				$_SESSION['pro_nompro'] = $pro_nompro = filter_input(INPUT_POST, 'pro_nompro');
				$_SESSION['pro_precox'] = $pro_precox = filter_input(INPUT_POST, 'pro_precox');
				$_SESSION['pro_imagem'] = $pro_imagem = filter_input(INPUT_POST, 'pro_imagem');
				$_SESSION['pro_qtddis'] = $pro_qtddis = filter_input(INPUT_POST, 'pro_qtddis');
				$_SESSION['pro_linkxx'] = $pro_linkxx = filter_input(INPUT_POST, 'pro_linkxx');
				$_SESSION['botao']      = $botao      = filter_input(INPUT_POST, 'botao');

              $sql  = "UPDATE $nome_tabela_1 SET 
			                                     pro_codpro = '$pro_codpro',
			                                     pro_catego = '$pro_catego',
			                                     pro_nompro = '$pro_nompro',
			                                     pro_precox = '$pro_precox',
			                                     pro_qtddis = '$pro_qtddis',
			                                     pro_linkxx = '$pro_linkxx',
			                                     pro_imagem = '$pro_imagem'

                                                 WHERE pro_codpro='$pro_codpro'";
										   
              mysqli_query($conn, $sql) or die ("ERRO NA ALTERACAO!");
              $_SESSION['msg'] = "Registro $pro_codpro Alterado!";
             }
	 $_SESSION['botao'] = "";
	 echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=$nome_programa'>"; 
     }
	 
   if ($_SESSION['botao']  ==  "Último Código")     
    {
		$resultado = mysqli_query($conn, "SELECT * FROM $nome_tabela_1 ORDER BY pro_codpro DESC LIMIT 1");
		
		$rowcount  = mysqli_num_rows($resultado);
			
		if ($rowcount)
			{ 
				$campo = mysqli_fetch_array($resultado);
				
				$_SESSION['pro_codpro'] = $pro_codpro = $campo['pro_codpro'];
				$_SESSION['pro_catego'] = $pro_catego = $campo['pro_catego'];
				$_SESSION['pro_nompro'] = $pro_nompro = $campo['pro_nompro'];
				$_SESSION['pro_precox'] = $pro_precox = $campo['pro_precox'];
				$_SESSION['pro_imagem'] = $pro_imagem = $campo['pro_imagem'];
				$_SESSION['pro_qtddis'] = $pro_qtddis = $campo['pro_qtddis'];
				$_SESSION['pro_linkxx'] = $pro_linkxx = $campo['pro_linkxx'];
				
				$_SESSION['consulta']  = "s";
				$_SESSION['msg']       = "Registro $pro_codpro Consultado!";
				$_SESSION['arquivo']   = $campo['pro_imagem'];
				
			} 
		else
			{ 
				$_SESSION['msg'] = "Registro não cadastrado!";
			}
    $_SESSION['botao'] = "";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=$nome_programa'>"; 
	}

	 
	 

?>






