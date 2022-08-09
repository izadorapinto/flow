<?php

include('../conexao/conectarbd.php');
 
$recid= filter_input(INPUT_POST, 'id_pedidos');
$recdtpedido= filter_input(INPUT_POST, 'data_pedido');
$recdtentrega= filter_input(INPUT_POST, 'data_entrega');
$recnome= filter_input(INPUT_POST, 'nomecli');
$recendereco= filter_input(INPUT_POST, 'enderecocli');
$reccidade= filter_input(INPUT_POST, 'cidadecli');
$recbairro= filter_input(INPUT_POST, 'bairro');
$reccep= filter_input(INPUT_POST, 'cep');
$recnomeprod= filter_input(INPUT_POST, 'nomeprod');
$recqtde= filter_input(INPUT_POST, 'qtde');
$recvalorto= filter_input(INPUT_POST, 'valor_total');
$rectamanho= filter_input(INPUT_POST, 'tamanho');


   



  if(mysqli_query($conn, "UPDATE tb_pedido SET data_pedido='$recdtpedido', data_entrega='$recdtentrega', nomecli='$recnome'"
          . ", enderecocli='$recendereco', cidadecli='$reccidade',bairro='$recbairro',cep='$reccep',nomeprod='$recnomeprod'"
          . ",qtde='$recqtde',valor_total='$recvalorto',tamanho='$rectamanho' WHERE id_pedidos=$recid")) 
          
  { echo "<script>alert('Dados alterado com sucesso!'); window.location = 'consultarpedido.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>