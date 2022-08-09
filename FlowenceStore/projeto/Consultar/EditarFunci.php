<?php

include("conectarbd.php");

$recid= filter_input(INPUT_POST, 'id_func');
$recnomefunci= filter_input(INPUT_POST, 'nomefunci');
$recdatanasci= filter_input(INPUT_POST, 'datanascifunci');
$recestadocivil= filter_input(INPUT_POST, 'estadocivil');
$recconjuge= filter_input(INPUT_POST, 'conjuge');
$recidade= filter_input(INPUT_POST, 'idade');
$recsexo= filter_input(INPUT_POST, 'sexo');
$recescolaridade= filter_input(INPUT_POST, 'escolaridade');
$recctps= filter_input(INPUT_POST, 'ctps');
$recserie= filter_input(INPUT_POST, 'serie');
$reccpf= filter_input(INPUT_POST, 'cpf');
$recpis= filter_input(INPUT_POST, 'pis');
$recrg= filter_input(INPUT_POST, 'rg');
$recdataexp= filter_input(INPUT_POST, 'dataexp');
$rectitulo= filter_input(INPUT_POST, 'tituloeleit');
$reccnh= filter_input(INPUT_POST, 'cnh');
$recendereco= filter_input(INPUT_POST, 'endereco');
$recnumero= filter_input(INPUT_POST, 'numero');
$reccidade= filter_input(INPUT_POST, 'cidade');
$recestado= filter_input(INPUT_POST, 'estado');
$reccep= filter_input(INPUT_POST, 'cep');
$rectelefone= filter_input(INPUT_POST, 'telefone');
$reccelular= filter_input(INPUT_POST, 'celular');
$recnaturalidade= filter_input(INPUT_POST, 'naturalidade');
$recnacionalidade= filter_input(INPUT_POST, 'nacionalidade');
$recemail= filter_input(INPUT_POST, 'email');
$recfuncao= filter_input(INPUT_POST, 'funcao');
$recsalario= filter_input(INPUT_POST, 'salariofun');
$rechorario= filter_input(INPUT_POST, 'horario');
$recdataadmi= filter_input(INPUT_POST, 'dataadmi');
$recdatademi= filter_input(INPUT_POST, 'datademi');
$recbanco= filter_input(INPUT_POST, 'banco');
$recagencia= filter_input(INPUT_POST, 'agencia');
$recconta= filter_input(INPUT_POST, 'conta');
$rectipoconta= filter_input(INPUT_POST, 'tipoconta');
$rectipopix= filter_input(INPUT_POST, 'tipopix');
$recchavepix= filter_input(INPUT_POST, 'chavepix');
$recusuario= filter_input(INPUT_POST, 'usuario');
$recsenha= filter_input(INPUT_POST, 'senha');
$recperfil= filter_input(INPUT_POST, 'perfil');






  if(mysqli_query($conn, "UPDATE tb_cidades SET nome='$recnome', estado='$recestado' WHERE id_cidades=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'Consultarcidade.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>