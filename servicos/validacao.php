<?php 
function validaNome(string $nome) : bool{
    if (empty($nome)) {
        setarMensagemErro('Todos os campos devem ser preenchidos corretamente');
        return false;
    }
    // Fim teste campo vazio
    else if (strlen($nome) < 3) {
        setarMensagemErro('O nome não deve conter menos de 3 caracteres');
        return false;
        
    }
    else if (strlen($nome) > 30) {
        setarMensagemErro('O nome não deve conter mais que 30 caracteres');
        return false;
        
    }
    return true;
}

function validaIdade($idade) : bool {
    
    if (empty($idade)) {
        setarMensagemErro('O campo idade não deve estar vazio');
        return false;
        
    }
    // Checar se é uma string numérica
    else if (!is_numeric($idade)) {
        setarMensagemErro('A idade deve conter apenas números');
        return false;
        
    }
    return true;
}
    
    ?>