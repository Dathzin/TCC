<?php

$servidor            = "localhost";
$usuario_mysql       = "root";
$senha_mysql         = "";

$nome_banco_de_dados = "bd_mercado";

$nome_tabela_1       = "tb_produtos";


$conn = mysqli_connect($servidor, $usuario_mysql, $senha_mysql) or die ("Falha na conexão com MySQL");
	
mysqli_query($conn, "DROP DATABASE $nome_banco_de_dados") or die ("BD $nome_banco_de_dados ainda não foi criado!");

mysqli_query($conn, "CREATE DATABASE $nome_banco_de_dados") or die ("Falha na criação do BD $nome_banco_de_dados");

mysqli_select_db($conn, $nome_banco_de_dados) or die ("Falha na selecao do BD $nome_banco_de_dados");

echo "<center><h1>Processamento de criação de BD e Tabelas realizado com sucesso!</h1>";
echo "<center><h3>Banco de dados <b> $nome_banco_de_dados </b> criado </h3>";

mysqli_query($conn, "CREATE TABLE $nome_tabela_1 (

                                            pro_codpro     INT      (010),
                                            pro_catego     VARCHAR  (001),
                                            pro_nompro     VARCHAR  (030),
                                            pro_precox     VARCHAR  (010),
                                            pro_imagem     VARCHAR  (050),
											pro_qtddis     VARCHAR  (005),
											pro_linkxx     VARCHAR  (080),
                                            
											PRIMARY KEY(pro_codpro)
											)
                                            COLLATE='utf8_general_ci'
                                            ENGINE=InnoDB") or die ("<br>ERRO_$nome_tabela_1");

echo "<center><h3>Tabela(s) <b> $nome_tabela_1 </b> criada(s) </h3>";
?>