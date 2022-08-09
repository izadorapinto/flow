<?php

include("../conexao/conectarbd.php");

$recid= filter_input(INPUT_GET, 'produto');



  if(mysqli_query($conn, "DELETE FROM tb_produto WHERE idproduto=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = '../projeto/consultar/consultarprod.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>