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

session_start();

$categorias = ['infantil', 'adolescente', 'adulto',];
// $categorias[] = 'infantil';
// $categorias[] = 'adolescente';
// $categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
//  Informativo de campo vazio
if (empty($nome)) {
    $_SESSION['mensagem-de-erro'] =  'Todos os campos devem ser preenchidos corretamente';
    header("location: index.php");
    return;
}
else if (empty($idade)) {
    $_SESSION['mensagem-de-erro'] =  'O campo idade não deve estar vazio';
    header("location: index.php");
    return;
    
}
// Fim teste campo vazio
else if (strlen($nome) < 3) {
    $_SESSION['mensagem-de-erro'] =  'O nome não deve conter menos de 3 caracteres';
    header("location: index.php");
    return;
    
}
else if (strlen($nome) > 30) {
    $_SESSION['mensagem-de-erro'] =  'O nome não deve conter mais que 30 caracteres';
    header("location: index.php");
    return;
    
}
// Checar se é uma string numérica
else if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] =  'A idade deve conter apenas números';
    header("location: index.php");
    return;

}



// teste de idade
if ($idade >= 6 && $idade <= 12) {
    for ($i=0; $i <= count($categorias); $i++) { 
        if ($categorias[$i] == 'infantil'){

            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome.  "compete na categoria infantil";
            header("location: index.php");    
            return;    
        }
    }
}elseif ($idade >= 13 && $idade <= 18 ) {
    for ($i = 0; $i <= count($categorias); $i++) { 
        if ($categorias[$i] == 'adolescente') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome.  " compete na categoria adolescente"; 
            header('location: index.php');           
            return;    
        }
    }
}elseif($idade >=19 && $idade <=50 ) {
    for ($i=0; $i <= count($categorias); $i++) { 
        if ($categorias[$i] == 'adulto'){
            
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria Adulto pois possui ".$idade." Anos";       
            header("location: index.php");     
            return;    
        }
    }
}else {
    $_SESSION['mensagem-de-erro'] =  'Desculpe, mas o atleta ' .$nome. ' não tem idade suficiente para participar';
    header("location: index.php");
    return;    
    // echo 'Não tem idade suficiente para participar';
}
 ?>