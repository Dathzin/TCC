<?php 


    $servidor            = "localhost";
    $usuario_mysql       = "root";
    $senha_mysql         = "";
    $nome_banco_de_dados = "TCC_2023";

    $conexao = new mysqli($servidor, $usuario_mysql, $senha_mysql, $nome_banco_de_dados);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "<b><h3>Usuário cadastrado com sucesso!</b></h3>";
    }
    ?>
