<?php

$servidor            = "localhost";
$usuario_mysql       = "root";
$senha_mysql         = "";

$nome_banco_de_dados = "TCC_2023";

$nome_tabela_1       = "G1_usuario";
$nome_tabela_2       = "G1_cursos";
$nome_tabela_3       = "G1_salvos";


$conn = mysqli_connect($servidor, $usuario_mysql, $senha_mysql) or die ("Falha na conexão com MySQL");
	
mysqli_query($conn, "DROP DATABASE IF EXISTS $nome_banco_de_dados") or die ("BD $nome_banco_de_dados ainda não foi criado!");

mysqli_query($conn, "CREATE DATABASE $nome_banco_de_dados") or die ("Falha na criação do BD $nome_banco_de_dados");

mysqli_select_db($conn, $nome_banco_de_dados) or die ("Falha na selecao do BD $nome_banco_de_dados");

echo "<center><h1>Processamento de criação de BD e Tabelas realizado com sucesso!</h1>";
echo "<center><h3>Banco de dados <b> $nome_banco_de_dados </b> criado </h3>";

mysqli_query($conn, "CREATE TABLE $nome_tabela_1 (

                                           email      VARCHAR  (080),
                                           senha      VARCHAR  (025),
                                           nome       VARCHAR  (050),
                                              
                                            
											PRIMARY KEY(email)
											)
                                            COLLATE='utf8_general_ci'
                                            ENGINE=InnoDB") or die ("<br>ERRO_$nome_tabela_1");

echo "<center><h3>Tabela(s) <b> $nome_tabela_1 </b> criada(s) </h3>";

mysqli_query($conn, "CREATE TABLE $nome_tabela_2 (

                                           lingua        VARCHAR  (025),

                                          
                                        
                                            
											PRIMARY KEY(lingua)
											)
                                            COLLATE='utf8_general_ci'
                                            ENGINE=InnoDB") or die ("<br>ERRO_$nome_tabela_2");

echo "<center><h3>Tabela(s) <b> $nome_tabela_2 </b> criada(s) </h3>";
mysqli_query($conn, "CREATE TABLE $nome_tabela_3 (

                                           salvos       INT      (010),
                                           lingua       VARCHAR  (030),
                                           email        VARCHAR  (010),
                                                
                                            
											PRIMARY KEY(salvos)
											)
                                            COLLATE='utf8_general_ci'
                                            ENGINE=InnoDB") or die ("<br>ERRO_$nome_tabela_3");

echo "<center><h3>Tabela(s) <b> $nome_tabela_3 </b> criada(s) </h3>";



$consulta = "ALTER TABLE $nome_tabela_3 ADD CONSTRAINT lingua FOREIGN KEY (ligua) REFERENCES $nome_tabela_2 (ligua)";

$consulta = "ALTER TABLE $nome_tabela_3 ADD CONSTRAINT login_ FOREIGN KEY (email) REFERENCES $nome_tabela_1 (email)";


if (mysqli_query($conn, $consulta)) {
    echo "A chave estrangeira foi adicionada com sucesso.";
} else {
    echo "Ocorreu um erro na adição da chave estrangeira: " . mysqli_error($conn);
}



























?>