<?php

include("../conexao/conectarbd.php");

$recid= filter_input(INPUT_GET, 'funcionario');



  if(mysqli_query($conn, "DELETE FROM tb_funcionario WHERE id_func=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = '../projeto/consultar/consultarfunci.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>