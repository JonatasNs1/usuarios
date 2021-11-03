<?php

    function conexaoMysql(){

        $servidor = 'localhost';
        $usuario = 'root';
        $senha = 'bcd127';
        $database = 'dbUsuarios';

        // $conexao = mysqli_connect($servidor, $usuario, $senha, $database)

        if($conexao = mysqli_connect($servidor, $usuario, $senha, $database)){
            return $conexao;
            // echo('foi a conexao');
        }else{
            echo('Não foi a conexão');
        }
    }



?>