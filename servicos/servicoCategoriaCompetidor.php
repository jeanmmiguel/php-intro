<?php

function defineCategoriaComepetidor(string $nome, string $idade) : ?string{

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

    if(validaNome($nome) && validaIdade($idade)){

        removerMensagemErro();
        if($idade >= 6  && $idade <= 12){

            for($i = 0; $i <= count($categorias); $i++){
                if($categorias[$i] == 'infantil'){
                setarMensagemdeSucesso( " o nadador ". $nome."compete na categoria".$categorias[$i]);
                return null;
            }
        
        }if($idade >= 13 && $idade <= 18){
            for($i = 0; $i <= count($categorias); $i++){
                if($categorias[$i] == 'adolescente')
                setarMensagemdeSucesso (" o nadador ". $nome."compete na categoria adolescnte");
                return null;
            }
        
        }else{
            for($i = 0; $i <= count($categorias); $i++){
                if($categorias[$i] == 'adulto')
                setarMensagemdeSucesso(" o nadador ". $nome."compete na categoria adulto");
                return null;
            }
        
        }
        


    }
    else{
        removerMensagemSucesso();
        return obterMensagemErro();
    }



}