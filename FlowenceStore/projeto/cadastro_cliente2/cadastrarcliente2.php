<?php include_once "../Conexao/conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nomecli = $_POST["nomecli"];
        $datanasccli = $_POST["datanasccli"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $endereco = $_POST["endereco"];
        $celular = $_POST["celular"];
        $bairro = $_POST["bairro"];
        $cep = $_POST["cep"];
        $estado = $_POST["estado"];
        $numero = $_POST["numero"];
        $cidade = $_POST["cidade"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_cliente2(nomecli, datanasccli, telefone, cpf, rg, endereco, celular, bairro, cep, estado,
        numero, cidade) VALUES ('$nomecli', '$datanasccli', '$telefone','$cpf', '$rg', '$endereco', '$celular', '$bairro', '$cep',
         '$estado', '$numero', '$cidade')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../projeto/cadastro_cliente2/cadastrocliente2.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>