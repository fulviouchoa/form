<?php
include('../form/conexao/connect.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../form/estilo/style.css">
        <title>Pesquisar</title>
    </head>
<body>
<nav class="barra-menu">
            <ul class="menu">
                <li><a href="../form/home.php">Home</a></li>
                <li><a href="../form/index.php">Cadastro Clientes</a></li>
                <li><a href="#">Contatos</a></li>
            </ul>
        </nav>
    <div class="container">
    
        
        <form class="formulario" action="../form/resultadoPesquisa.php" method="post">
        <label class="txt-formulario">Pesquisar Cliente</label>
            <input class="form-texto" type="search" name="pesquisa" placeholder=" Pesquisar" autofocus>
            <input class="btn-cadastrar" type="submit" value="Pesquisar">
        </form>
        
    </div>
    


</body>
</html>