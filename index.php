<?php 
$categorias = ['infantil', 'adolescente', 'adulto',];
// $categorias[] = 'infantil';
// $categorias[] = 'adolescente';
// $categorias[] = 'idoso';
// print_r($categorias)
$nome = 'Eduardo';
$idade = 20;

if ($idade >= 6 && $idade <= 12) {
    for ($i=0; $i <= count($categorias); $i++) { 
        if ($categorias[$i] == 'infantil')
            echo "O nadador ",$nome,  "compete na categoria infantil";        
        }
    }elseif ($idade >= 13 && $idade <= 18 ) {
        for ($i=0; $i <= count($categorias) ; $i++) { 
            if ($categorias[$i] == 'adolescente') {
            echo "O nadador ",$nome,  "compete na categoria adolescente";            
        }
    }
}elseif($idade <=5 || $idade >=40 ) {
    echo 'Não tem idade suficiente para participar';
}else {
    for ($i=0; $i <= count($categorias) ; $i++) { 
        if ($categorias[$i] == 'adulto') {
            echo "O nadador ",$nome,  " compete na categoria Adulto pois possui a ",$idade," Anos" ;            
        }
    }
}
?>