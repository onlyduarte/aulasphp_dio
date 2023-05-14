<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    retornar ao Formulário principal
    <form action="index.php"><input type="submit" value="Retornar ao formulário"></form>
</body>
</html> -->


<?php 
include "servicos/mensagemSessao.php";
include "servicos/validacao.php";
include "servicos/categoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];
defineCategoriaCompetidor($nome, $idade);
header("location: index.php");

 ?>