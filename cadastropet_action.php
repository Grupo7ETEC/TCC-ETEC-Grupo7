<?php
    include("cabecalho.php");
?>

<title>Cadastro de animais</title>

<!-- Configuração do rodapé para páginas em que ele não estava ficando fixo no fim da página-->
<style>
.rodape {
    width: 100%; 
    float:center;
    background: linear-gradient(to right,#ffc107,#ffdb4d);
    padding: 10px;
    border-top: 7px solid #3f51b5;
    margin-top: 16px;
    position: fixed;
    height: 130px;
    bottom: 0px;
    left: 0px;
    right: 0px;
    margin-bottom: 0px;
}
</style>

<body class="bg">
 
<div class="w3-padding w3-content w3-third w3-display-middle">

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "abrigo"; 
        $imagem = $_FILES["foto1"];

            $nomeFinal = time().'.jpg';
            if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
                $tamanhoImg = filesize($nomeFinal);
                $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));      
            
        
        $conexao = new mysqli($servername, $username, $password, $dbname);
        if ($conexao->connect_error) {
            die("Falha de conexão: " . $conexao->connect_error);
        }

        $sql = "INSERT INTO animais (pet_nome, pet_especie, pet_sexo, pet_idade, pet_pelagem, pet_convive, pet_obs, pet_foto1)
            VALUES ('".$_POST['nome']."', '".$_POST['especie']."', '".$_POST['sexo']."', '".$_POST['idade']."', '".$_POST['pelagem']."', '".$_POST['convive']."', '".$_POST['obs']."', '$mysqlImg')";
        
        if ($conexao->query($sql) === TRUE) {
            echo '
            <a href="cadastropet.php">
            <h1 class ="w3-center w3-btn w3-round-xlarge w3-indigo">Cadastro realizado com sucesso! </h1>
        </a>
        ';
        } else {
            echo '
            <a href="cadastropet.php">
                <h1 class="w3-center w3-btn w3-round-xlarge w3-indigo">Erro! Tente novamente.</h1>
            </a>
            ';
        }
    }

    $conexao->close();
     
    ?>
    </div>      
       
</body>

<?php  
    include("rodape.php");
?>
