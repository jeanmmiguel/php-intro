<?php


function validaNome(string $nome) : bool{

    if(empty($nome)){
    setarMensagemErro('o nome nao pode ser vazio');
        return false;
        
        
        }
       else if(strlen($nome) < 3){
         setarMensagemErro('o nome nao pode conter menos de tres caracteres');
         return false;
        }
        else if(strlen($nome) > 40){
        setarMensagemErro('o nome nao pode ser  conter mais de 40 caracteres');
        return false;
        }

       return true;

}
function validaIdade(string $idade) : bool{
    
     if(!is_numeric($idade)){
         
       setarMensagemErro('Informe um numero para a idade');
        return false;
        }
    return true;


}
