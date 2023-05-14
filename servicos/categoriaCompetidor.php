<?php 
// $categorias[] = 'infantil';
// $categorias[] = 'adolescente';
// $categorias[] = 'idoso';

function defineCategoriaCompetidor(string $nome, string $idade) : ?string{
$categorias = ['infantil', 'adolescente', 'adulto',];
    if (validaNome($nome)&& validaIdade($idade)) {     
// teste de idade
removerMensagemErro();
if ($idade >= 6 && $idade <= 12) {
    for ($i=0; $i <= count($categorias); $i++) { 
        if ($categorias[$i] == 'infantil'){

            setarMensagemSucesso("O nadador ".$nome.  "compete na categoria infantil");   
            return null;    
        }
    }
}elseif ($idade >= 13 && $idade <= 18 ) {
    for ($i = 0; $i <= count($categorias); $i++) { 
        if ($categorias[$i] == 'adolescente') {
            setarMensagemSucesso("O nadador " .$nome.  " compete na categoria adolescente"); 
            return null;    
        }
    }
}elseif($idade >=19 && $idade <=50 ) {
    for ($i=0; $i <= count($categorias); $i++) { 
        if ($categorias[$i] == 'adulto'){
            
            setarMensagemSucesso("O nadador " .$nome. " compete na categoria Adulto pois possui ".$idade." Anos");       
            return null;    
        }
    }
}else {
    $_SESSION['mensagem-de-erro'] =  'Desculpe, mas o atleta ' .$nome. ' não tem idade suficiente para participar';
    return null;    
}
    }
    else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}

?>