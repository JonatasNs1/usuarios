<?php
    
    function conexaoMysql(){
        $user = 'localhost';
        $usuario = 'root';
        $senha = 'bcd127';
        $database = 'dbUsuarios';
        
        
        if($conexao = mysqli_connect($user, $usuario, $senha, $database)){
            return $conexao;
//            echo('foi a conexao com sucesso');
        }else{
            
            echo('não foi a conexao');
        }
    }




?>