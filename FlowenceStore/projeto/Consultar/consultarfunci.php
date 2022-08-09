<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Funcionários</title>
        <link type="text/css" rel="stylesheet" href="estilo.css">
    
    </head>

     <body>
                <h1>Consultar Funcionários</h1>
                <table
                   width="100%"
                   border="1" 
                   bordercolor="black"
                   cellspacing="2" 	
                   cellpadding="5"
                   >
                    <tr>
                        <td align="center"> <strong>ID</strong></td>	
                        <td align="center"> <strong>Nome</strong></td>		
                        <td align="center"> <strong>Estado</strong></td>
                        <td align="center"> <strong>CPF</strong></td>
                        <td align="center"> <strong>Função</strong></td> 
                        <td align="center"> <strong>RG</strong></td> 
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conexao/conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_funcionario");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_func"]?></td>
                                <td align="center"><?=$campo["nomefunci"]?></td>
                                <td align="center"><?=$campo["estado"]?></td>
                                <td align="center"><?=$campo["cpf"]?></td>
                                <td align="center"><?=$campo["funcao"]?></td>
                                <td align="center"><?=$campo["rg"]?></td>
                                <td align="center"><a href="EditarFuncionario.php?editarid=<?php echo $campo ['id_func'];?>">Editar</a></td>
                                <td align="center"><i><a href="excluir_funci.php?p=excluir&funcionario=<?php echo $campo['id_func'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                    <a href="indexmenu.html"><input type="button" class="botoes" value="Cancelar"/></a>
    </body>
</html>
