<?php
session_start();



$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){

    $_SESSION['mensagem-de-erro'] = 'o nome nao pode ser vazio';
    header('location:index.php');
    

}
if(strlen($nome) < 3){
     
    $_SESSION['mensagem-de-erro'] = 'o nome nao pode conter menos de tres caracteres';
    header('location:index.php');
}
else if(strlen($nome) > 40){
    
    $_SESSION['mensagem-de-erro'] = 'o nome nao pode ser  conter mais de 40 caracteres';
    header('location:index.php');
}
else if(!is_numeric($idade)){

    $_SESSION['mensagem-de-erro'] = 'Informe um numero para a idade';
    header('location:index.php');
}

if($idade >= 6  && $idade <= 12){

    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
        $_SESSION['mensagem-de-sucesso'] = " o nadador ". $nome."compete na categoria".$categorias[$i];
        header('location:index.php');
    }

}if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
        $_SESSION['mensagem-de-sucesso'] =  " o nadador ". $nome."compete na categoria adolescnte";
    }

}else{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
        $_SESSION['mensagem-de-sucesso'] =  " o nadador ". $nome."compete na categoria adulto";
    }

}

?>