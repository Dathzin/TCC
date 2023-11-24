<?php

   // print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('configbd.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // <br>;
        // print_r('Senha: ' . $senha);


        $sql ="SELECT * FROM $nome_tabela_1 WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            echo "Não exixte";
        }
    }
    else
    {
        echo "Existe algo";
    }
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0.5;URL=planodecurso.php'>";
?>