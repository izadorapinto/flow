<?php include_once "../conexao/conectarbd.php"; ?>
<html>
    <body>
        <?php
        $data_pedido = $_POST["data_pedido"];
        $data_entrega = $_POST["data_Entrega"];
        $nomecli = $_POST["nomecli"];
        $enderecocli = $_POST["enderecocli"];
        $cidadecli = $_POST["cidadecli"];
        $bairro = $_POST["bairro"];
        $cep = $_POST["cep"];
        $nomeprod = $_POST["nomeprod"];
        $qtde = $_POST["qtde"];
        $valor_total = $_POST["Valor_Total"];
        $tamanho = $_POST["Tamanho"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_pedido(data_pedido, data_entrega, nomecli, enderecocli, cidadecli, bairro, cep, nomeprod,qtde,
        Valor_Total, Tamanho) 
        VALUES ('$data_pedido', '$data_entrega', '$nomecli', '$enderecocli', '$cidadecli', '$bairro', '$cep',
         '$nomeprod','$qtde','$valor_total', '$tamanho')";
        if (mysqli_query($conn, $sql)) {
           echo "<script>alert('Seus dados foram salvos !'); window.location = '../home/index.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
        
    </body>
</html>



