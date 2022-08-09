<?php include_once "../conexao/conectarbd.php"; ?>
<html>
    <body>
        <?php
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirmar_senha = $_POST["confirmar_senha"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_cliente1(email, senha, confirmar_senha) VALUES ('$email', '$senha','$confirmar_senha' )";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../projeto/cadastroE1/index.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

