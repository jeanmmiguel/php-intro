<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';


$nome = 'jean';
$idade = 18;

if($idade >= 6  && $idade <=12){

    for($i = 0; $i <= count($categorias);$i++){
        if($categorias[$i] == 'infantil')
        echo " o nadador ". $nome."compete na categoria".$categorias[$i];
    }

}else if($idade >= 13 && $idade <=18){
    for($i = 0; $i <= count($categorias);$i++){
        if($categorias[$i] == 'adolescente')
        echo " o nadador ". $nome."compete na categoria adolescnte";
    }

}else{
    for($i = 0; $i <= count($categorias);$i++){
        if($categorias[$i] == 'adulto')
        echo " o nadador ". $nome."compete na categoria adulto";
    }

}

?>