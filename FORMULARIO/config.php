<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = ''; 
    $dbname = 'cadastro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);
    if($conexao->connect_errno){
        echo "Erro";
    }
    else
    {
        echo "Conexao com sucesso";
    }

?>