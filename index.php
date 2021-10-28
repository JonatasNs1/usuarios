
<?php
    require_once('bd/conexao.php');
    conexaoMysql();



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Categorias </title>
</head>
<body>
<div id="cadastro"> 
            <div id="cadastroTitulo"> 
                <h1> Cadastro de Usuarios </h1>
            </div>
            <div id="cadastroInformacoes">
        
                <form action="" name="frmCadastro" method="post" >
                   
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Nome: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="nome" value="" placeholder="Digite seu Nome" maxlength="100">
                        </div>
                    </div>
                
                    
                    <div class="enviar">
                        <div class="enviar">
                            <input type="submit" name="btnEnviar" value="">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div id="consulta">
            <table id="tableConsulta" >
                <tr>
                    <td id="tableTitulo" colspan="5">
                        <h1> Consulta de Categorias</h1>
                    </td>
                </tr>
                <tr id="linhas">
                    <td class="colunas"> Nome </td>
                    <td class="colunas"> Opções </td>
                </tr>
              
                <tr id="tblLinhas">
                    <td class="tblColunas registros"></td>
                    <td class="tblColunas registros">
                        
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                       
                        
                            <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                        
                    </td>
                </tr>
             
                
            </table>
          
    </div>
        
       
    </body>
</html>



