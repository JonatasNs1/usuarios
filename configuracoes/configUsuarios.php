<?php

const servidor = ('localhost');
const usuario = ('root');
const senha = ('bcd127');
const database =('dbUsuarios');

// define ('SRC', $_SERVER['DOCUMENT_ROOT'].'/usuarios/usuarios/'); 

define ('SRC', $_SERVER['DOCUMENT_ROOT'].'/ds2t20212/usuarios/'); 

const BD_MSG_EXCLUIR = "
<script> 
    alert('Registro excluido com sucesso do Banco de Dados'); 
    window.location.href='../index.php';
</script>";
const vazia = ('Preencha todos os dados, pois tem campos obrigatórios');
const ERRO = "ERRO: Não foi possivel manipular os dados no Banco de dados!!!"; 

const INSERIR = "Registro salvo com sucesso do banco de dados!";
const MAX_CARACTERES = "Não foi possivel fazer o cadastro, coloque um nome abaixo de 100 caracteres";
?>