<?php
include('../form/conexao/connect.php');


if(isset($_POST["nome"])){
    $nome = $_POST["nome"];
    $dataAniv = $_POST["dataAniv"];
    $fone = $_POST["fone"];
    $email = $_POST["email"];
    $id = $_POST["id"];

//Alteração
$alterar  = "UPDATE clientes ";
$alterar .= " SET ";
$alterar .= " nome = '{$nome}', ";
$alterar .= " dataAniv = '{$dataAniv}', ";
$alterar .= " fone = '{$fone}', ";
$alterar .= " email = '{$email}' ";
$alterar .= " WHERE id = {$id} ";

$operacao_alteracao = mysqli_query($conexao,$alterar);
    if(!$operacao_alteracao){
        die("Erro ao alterar!");
    } else {
        header("Location:../form/resultadoPesquisa.php");
    }

}

//Consulta da tabela clientes
$cliente ="SELECT * FROM clientes ";
    if(isset($_GET["codigo"])){
        $id = $_GET["codigo"];
        $cliente .= " WHERE id = {$id} ";
    }else{
        $cliente .= " WHERE id = 1";
    }

$con_cliente = mysqli_query($conexao,$cliente);
    if(!$con_cliente){
            die("Erro no banco de dados");
    }else{
            $info_cliente = mysqli_fetch_assoc($con_cliente);
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../form/estilo/style.css">
        <title>Editar</title>
    </head>
    <body>
    <div class="container">
        
        <form class="formulario" action="../form/alterar.php" method="POST">
            <input class="form-texto" type="text" value="<?php echo $info_cliente['nome']?>" name="nome" autofocus>
            <input class="form-texto" type="date" value="<?php echo $info_cliente['dataAniv']?>" name="dataAniv">
            <input class="form-texto" type="tel" value="<?php echo $info_cliente['fone']?>" name="fone">
            <input class="form-texto" type="email" value="<?php echo $info_cliente['email']?>"  name="email">

            <input type="hidden" name="id" value="<?php echo $info_cliente['id']?>">

            <input class="btn-cadastrar" type="submit" value="Alterar">
        </form>
    </div>

    
    </body>
</html>