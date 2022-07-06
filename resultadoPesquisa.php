<?php
include('../form/conexao/connect.php');

$clientes = "SELECT * ";
$clientes .= "FROM clientes ";
    if(isset($_POST['pesquisa'])){
        $nome_cliente = $_POST['pesquisa'];
        $clientes .= " WHERE nome LIKE '%{$nome_cliente}%' ";
    }
$resultado =mysqli_query($conexao,$clientes);
    if(!$resultado){
        die("Erro na Pesquisa!");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../form/estilo/style.css">
        <title>Resultado da Pesquisa</title>
    </head>
    <body>
    <nav class="barra-menu">
            <ul class="menu">
                <li><a href="../form/home.php">Home</a></li>
                <li><a href="../form/index.php">Cadastro Clientes</a></li>
                <li><a href="../form/pesquisar.php">Pesquisar Clientes</a></li>
                <li><a href="#">Contatos</a></li>
            </ul>
        </nav>
        <div class="container">
        <div class="title">Lista de Clientes</div>
        <div class="container-resultado"> 
        <?php
            while($linha=mysqli_fetch_assoc($resultado)){
        ?>
                
                <ul class="lista-resultado">
                
                    <li class="resultado"><strong>Nome: </strong><?php echo $linha['nome'] ?></li>
                    <li class="resultado"><strong>Data de Aniversário: </strong><?php echo $linha['dataAniv'] ?></li>
                    <li class="resultado"><strong>Fone: </strong><?php echo $linha['fone'] ?></li>
                    <li class="resultado"><strong>E-mail: </strong><?php echo $linha['email'] ?></li>
                    <button class="btn-alterar"><a href="../form/alterar.php?codigo=<?php echo $linha['id'] ?>"><img src="../form/imagens/editar.png"></a></button>
                    <button class="btn-excluir"><a href="../form/excluir.php?codigo=<?php echo $linha['id'] ?>"><img src="../form/imagens/delete.png"></a></button>
                </ul>
               
                  
        <?php        
            }
        ?>
        
    
    </div>
    
    </div>



    </body>
</html>