<?php

include('../conexao/conectarbd.php');
 
$recid= filter_input(INPUT_POST, 'idproduto');
$recnomeprod= filter_input(INPUT_POST, 'nome_produto');
$reccategoria= filter_input(INPUT_POST, 'categoria');
$recqtde= filter_input(INPUT_POST, 'qtde');
$recvalorunit= filter_input(INPUT_POST, 'valor_unit');
$recimagem= filter_input(INPUT_POST, 'imagem');



  if(mysqli_query($conn, "UPDATE tb_cidades SET nome_produto='$recnomeprod', categoria='$reccategoria'
  , qtde='$recqtde' , valor_unit='$recvalorunit' , imagem='$recimagem'  WHERE id_cidades=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'Consultarcidade.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>