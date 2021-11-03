<?php



require_once('../configuracoes/config.php');
require_once(SRC .'bd/excluirUsuarios.php');


 
$idUsuarios = $_GET['id'];


if(excluir($idUsuarios)){
   echo(BD_MSG_EXCLUIR);
}else{
    echo ("
    ERRO: Não foi possivel;
        ");
}




?>