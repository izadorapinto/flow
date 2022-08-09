<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Produto</title>
        <link type="text/css" rel="stylesheet" href="estilo.css">
    
    </head>

     <body>
                <h1>Consultar Produto</h1>
                <table
                   width="100%"
                   border="1" 
                   bordercolor="black"
                   cellspacing="2" 	
                   cellpadding="5"
                   >
                    <tr>
                        <td align="center"> <strong>ID</strong></td>	
                        <td align="center"> <strong>Nome do Produto</strong></td>		
                        <td align="center"> <strong>Categoria</strong></td>
                        <td align="center"> <strong>Quantidade</strong></td>
                        <td align="center"> <strong>Valor Unitario</strong></td> 
                        <td align="center"> <strong>Imagem</strong></td> 
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conexao/conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_produto");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["idproduto"]?></td>
                                <td align="center"><?=$campo["nome_produto"]?></td>
                                <td align="center"><?=$campo["categoria"]?></td>
                                <td align="center"><?=$campo["qtde"]?></td>
                                <td align="center"><?=$campo["valor_unit"]?></td>
                                <td align="center"><?=$campo["imagem"]?></td>
                                <td align="center"><a href="editar_prod.php?editarid=<?php echo $campo ['id_func'];?>">Editar</a></td>
                                <td align="center"><i><a href="excluir_prod.php?p=excluir&produto=<?php echo $campo['idproduto'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                    <a href="indexmenu.html"><input type="button" class="botoes" value="Cancelar"/></a>
    </body>
</html>
