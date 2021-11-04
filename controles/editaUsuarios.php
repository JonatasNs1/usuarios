<?php

   





    require_once('../configuracoes/configUsuarios.php');


require_once(SRC .'bd/listarUsuarios.php');
    
    
    $idUsuarios = $_GET['id'];
  
    $dadosUsuarios = busca($idUsuarios);
    
    if($exibirUsuarios=mysqli_fetch_assoc($dadosUsuarios)){
      
        session_start();
        
      
        $_SESSION['usuarios'] = $exibirUsuarios;
        
        // echo('foi a busca');
        header('location:../index.php');
    }else{
        echo ("
                <script>
                  alert('ERRO');
                 window.history.back();
                 </script>
            ");
    }










?>