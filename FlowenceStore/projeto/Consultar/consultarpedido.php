<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Cidades</title>
        <link type="text/css" rel="stylesheet" href="estilo.css">
    
    </head>

     <body>
                <h1>Consultar Clientes Cadastrados</h1>
                <table
                   width="100%"
                   border="1" 
                   bordercolor="black"
                   cellspacing="2" 	
                   cellpadding="5"
                   >
                    <tr>
                        <td align="center"> <strong>ID</strong></td>	
                        <td align="center"> <strong>Data do Pedido</strong></td>		
                        <td align="center"> <strong>Data da Entrega</strong></td>
                        <td align="center"> <strong>Nome do Cliente</strong></td>		
                        <td align="center"> <strong>Endereço do Cliente</strong></td>
                        <td align="center"> <strong>Cidade do Cliente</strong></td>		
                        <td align="center"> <strong>Bairro</strong></td>
                        <td align="center"> <strong>CEP</strong></td>		
                        <td align="center"> <strong>Nome do Produto</strong></td>
                        <td align="center"> <strong>Quantidade</strong></td>		
                        <td align="center"> <strong>Valor Total</strong></td>
                        <td align="center"> <strong>Tamanho</strong></td>		
                        
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conexao/conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_pedido");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_pedidos"]?></td>
                                <td align="center"><?=$campo["data_pedido"]?></td>
                                <td align="center"><?=$campo["data_entrega"]?></td>
                                <td align="center"><?=$campo["nomecli"]?></td>
                                <td align="center"><?=$campo["enderecocli"]?></td>
                                <td align="center"><?=$campo["cidadecli"]?></td>
                                <td align="center"><?=$campo["bairro"]?></td>
                                <td align="center"><?=$campo["cep"]?></td>
                                <td align="center"><?=$campo["nomeprod"]?></td>
                                <td align="center"><?=$campo["qtde"]?></td>
                                <td align="center"><?=$campo["valor_total"]?></td>
                                <td align="center"><?=$campo["tamanho"]?></td>
                                <td align="center"><a href="EditarPedido.php?editarid=<?php echo $campo ['id_pedidos'];?>">Editar</a></td>
                                <td align="center"><i><a href="excluir_pedido.php?p=excluir&pedido=<?php echo $campo['id_pedidos'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                    <a href="indexmenu.html"><input type="button" class="botoes" value="Cancelar"/></a>
    </body>
</html>

