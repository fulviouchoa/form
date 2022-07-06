<?php
include('../form/conexao/connect.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../form/estilo/style.css">
        <title>Formulário</title>
    </head>
<body>
<nav class="barra-menu">
            <ul class="menu">
                <li><a href="../form/home.php">Home</a></li>
                <li><a href="../form/pesquisar.php">Pesquisar Clientes</a></li>
                <li><a href="#">Contatos</a></li>
            </ul>
        </nav>
    <div class="container">
    
        <form class="formulario" action="../form/incluir.php" method="post">
        <label class="txt-formulario">Cadastrar Cliente</label>
            <input class="form-texto" type="text" name="nome" placeholder=" Nome Completo" required autofocus>
            <input class="form-texto" type="date" name="dataAniv" required>
            <input class="form-texto" type="tel" name="fone" placeholder=" (xx)xxxx-xxxx" required>
            <input class="form-texto" type="email" name="email" placeholder=" E-mail" required>
            <input class="btn-cadastrar" type="submit" value="Cadastrar">
        </form>
        
    </div>


</body>
</html>