<?php
include('../form/conexao/connect.php');

if(isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $dataAniv = $_POST['dataAniv'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];

    $result=mysqli_query($conexao, "INSERT INTO clientes (nome,dataAniv,fone,email) VALUES ('$nome', '$dataAniv', '$fone', '$email')");
    if(!$result){
        die("Erro no Cadastramento");
    }

    header("Location:../form/index.php");

}

?>
