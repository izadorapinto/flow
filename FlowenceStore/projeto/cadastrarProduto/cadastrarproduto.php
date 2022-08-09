<?php include_once "../conexao/conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome_produto = $_POST["nome_produto"];
        $categoria = $_POST["categoria"];
        $qtde = $_POST["qtde"];
        $valor_unit = $_POST["valor_unit"];
        $imagem = $_POST["imagem"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$db_flowencestore');
        $sql = "INSERT INTO tb_produto(nome_produto, categoria, qtde, valor_unit, imagem ) VALUES ('$nome_produto', '$categoria','$qtde', '$valor_unit','$imagem')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../projeto/cadastrarProduto/index.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>
