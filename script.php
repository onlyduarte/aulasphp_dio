<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- retornar ao Formulário principal -->
    <form action="index.php"><input type="submit" value="Retornar ao formulário"></form>
</body>
</html>


<?php 
$categorias = ['infantil', 'adolescente', 'adulto',];
// $categorias[] = 'infantil';
// $categorias[] = 'adolescente';
// $categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
//  Informativo de campo vazio
if (empty($nome)) {
    echo "O campo nome não pode estar vazio";
    return;
}
if (empty($idade)) {
    echo "O campo idade não pode estar vazio";
    return;
}
// Fim teste campo vazio
if (strlen($nome) < 3) {
    echo "O nome deve conter entre 3 e 30 caracteres";
    return;
}
if (strlen($nome) > 30) {
    echo "O nome deve conter entre 3 e 30 caracteres";
    return;
}
// Checar se é uma string numérica
if (!is_numeric($idade)) {
    echo "Informe um número para idade";
    return; 
}



// teste de idade
if ($idade >= 6 && $idade <= 12) {
    for ($i=0; $i <= count($categorias); $i++) { 
        if ($categorias[$i] == 'infantil')
            echo "O nadador ",$nome,  "compete na categoria infantil";        
        }
    }elseif ($idade >= 13 && $idade <= 18 ) {
        for ($i = 0; $i <= count($categorias); $i++) { 
            if ($categorias[$i] == 'adolescente') {
            echo "O nadador ",$nome,  "compete na categoria adolescente";            
        }
    }
    }elseif($idade >=19 && $idade <=50 ) {
    for ($i=0; $i <= count($categorias); $i++) { 
        if ($categorias[$i] == 'adulto')
            echo "O nadador ",$nome,  " compete na categoria Adulto pois possui a ",$idade," Anos";            
    }
    }else {
    echo 'Não tem idade suficiente para participar';
}
 ?>