<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="sistema-cadastros";

    $conexao=mysqli_connect($servidor,$usuario,$senha,$banco);
    if(!$conexao){
        die("Erro na conecção com o Banco de dados");
    }
?>