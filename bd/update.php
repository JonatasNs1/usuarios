<?php
    require_once('../bd/conexaoUsuarios.php');

    // function edita($arrayCategoria){
    //     $sql = "update tblcategorias set
    //         nome = '".$arrayCategoria['nome']."'
      
    //     where idcategorias = ".$arrayCategoria['id'];
    //     $conexao = conexaoMysql();

    //    if( mysqli_query($conexao, $sql)){
    //        return true;
    //    }else{
    //         return false;
    //    }
    // }


function edita($arrayUsuarios)
{
    $sql = "update tblUsuarios set 
            nome = '".$arrayUsuarios['nome']."',
           login = '".$arrayUsuarios['login']."',
           senha = '".$arrayUsuarios['senha']."'
    
        where idUsuarios= ".$arrayUsuarios['id'];
        $conexao = conexaoMysql();

        if(mysqli_query($conexao,$sql)){
            return true;
        }else{
            return false;
        }
    

}


?>

