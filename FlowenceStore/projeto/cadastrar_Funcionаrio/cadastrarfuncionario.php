<?php include_once "../conexao/conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nomefunci = $_POST["nomefunci"];
        $datanascifunci = $_POST["datanascifunci"];
        $estadocivil = $_POST["estadocivil"];
        $conjuge = $_POST["conjuge"];
        $idade = $_POST["idade"];
        $sexo = $_POST["sexo"];
        $escolaridade = $_POST["escolaridade"];
        $ctps = $_POST["ctps"];
        $serie = $_POST["serie"];
        $cpf = $_POST["cpf"];
        $pis = $_POST["pis"];
        $rg = $_POST["rg"];
        $dataexp = $_POST["dataexp"];
        $tituloeleit = $_POST["tituloeleit"];
        $zona = $_POST["zona"];
        $secao = $_POST["secao"];
        $certreservista = $_POST["certreservista"];
        $cnh = $_POST["cnh"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $cep = $_POST["cep"];
        $telefone = $_POST["telefone"];
        $celular = $_POST["celular"];
        $naturalidade = $_POST["naturalidade"];
        $nacionalidade = $_POST["nacionalidade"];
        $email = $_POST["email"];
        $funcao = $_POST["funcao"];
        $salariofun = $_POST["salariofun"];
        $horario = $_POST["horario"];
        $dataadmi = $_POST["dataadmi"];
        $datademi = $_POST["datademi"];
        $banco = $_POST["banco"];
        $agencia = $_POST["agencia"];
        $conta = $_POST["conta"];
        $tipoconta= $_POST["tipoconta"];
        $tipopix = $_POST["tipopix"];
        $chavepix = $_POST["chavepix"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $perfil = $_POST["perfil"];
        
        
        


        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_funcionario(nomefunci, datanascifunci, estadocivil, conjuge, idade, sexo, escolaridade, ctps, serie, cpf, pis, rg, dataexp, tituloeleit, zona, secao, certreservista, cnh, endereco, numero, cidade, estado, cep, telefone, celular, naturalidade, nacionalidade, email, funcao, salariofun, horario, dataadmi, datademi, banco, agencia, conta, tipoconta, tipopix, chavepix,usuario,senha,perfil) VALUES ('$nomefunci', '$datanascifunci', '$estadocivil', '$conjuge', '$idade', '$sexo', '$escolaridade', '$ctps', '$serie', '$cpf', '$pis', '$rg', '$dataexp', '$tituloeleit', '$zona', '$secao', '$certreservista', '$cnh', '$endereco', '$numero', '$cidade', '$estado', '$cep', '$telefone', '$celular', '$naturalidade', '$nacionalidade', '$email', '$funcao', '$salariofun', '$horario', '$dataadmi', '$datademi', '$banco', '$agencia', '$conta','$tipoconta', '$tipopix', '$chavepix','$usuario','$senha','$perfil')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../View/indexmenu2.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
        
    </body>
</html>

