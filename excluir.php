<?php
    include('../form/conexao/connect.php');
//excluir o cliente 
if(isset($_POST['nome'])){
    $id = $_POST['id'];

    $exclusao = "DELETE FROM clientes WHERE id = {$id}";
    $con_exclusao = mysqli_query($conexao,$exclusao);
        if(!$con_exclusao){
            die("Erro ao excluir!");
        }else{
            header("Location:../from/resultadoPesquisa.php");
        }
} 



// Consulta ao Banco de dados
    if (isset($_GET['codigo'])){
        $id = $_GET['codigo'];
    $cliente ="SELECT * FROM clientes WHERE id = {$id}";
    $con_cliente = mysqli_query($conexao, $cliente);
        if(!$con_cliente){
            die("Erro no Banco de Dados!");
        }
    }else{
    header("Location:../form/resultadoPesquisa.php");
    }

    $info_cliente = mysqli_fetch_assoc($con_cliente);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../form/estilo/style.css">
        <title>Tela de Exclusão</title>
    </head>
    <body>
    <div class="container">
    <form class="formulario" action="../form/excluir.php" method="POST">
            <input class="form-texto" type="text" value="<?php echo $info_cliente['nome']?>" name="nome"  >
            <input class="form-texto" type="date" value="<?php echo $info_cliente['dataAniv']?>" name="dataAniv"  >
            <input class="form-texto" type="tel" value="<?php echo $info_cliente['fone']?>" name="fone" >
            <input class="form-texto" type="email" value="<?php echo $info_cliente['email']?>"  name="email" >

            <input type="hidden" name="id" value="<?php echo $info_cliente['id']?>">

            <input class="btn-cadastrar" type="submit" value="Excluir">
        </form>
         
    
    </div>




    </body>
</html>