<?php

include("../conexao/conectarbd.php");

$recid= filter_input(INPUT_GET, 'pedido');



  if(mysqli_query($conn, "DELETE FROM tb_pedido WHERE id_pedidos=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = '../projeto/consultar/consultarpedido.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>

