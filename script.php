<?php
session_start();

include "servicos/servicoMensagemSessao.php";
include "servicos/ServicosValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaComeptidor($nome,$idade);

header('location:index.php');