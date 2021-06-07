<?php
    include("cabecalho.php");
?>
<title>Formulário de Voluntário</title>

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
   
<div class="w3-padding w3-content">

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "abrigo";             
        
        $conexao = new mysqli($servername, $username, $password, $dbname);
        if ($conexao->connect_error) {
            die("Falha de conexão: " . $conexao->connect_error);
        }

        $sql = "INSERT INTO voluntarios (vnome, vendereco, vcep, vemail, vtelefone, vdia, vhorario)
            VALUES ('".$_POST['vnome']."', '".$_POST['vendereco']."', '".$_POST['vcep']."', '".$_POST['vemail']."', '".$_POST['vtelefone']."', '".$_POST['vdia']."', '".$_POST['vhorario']."')";
        
        if ($conexao->query($sql) === TRUE) {
            echo "<div class='banner w3-round-xlarge'>
                        <h1 style='font-weight:bold'>Obrigado!</h1>
                        <h2>Seu formulário foi enviado.</h2>
                        <h3>Nossa equipe entrará em contato.</h3>
                    </div>
                    <br>";
        } else {
            echo
            "<div class='banner w3-round-xlarge'>
                        <h1 style='font-weight:bold'>Erro!</h1>
                        <h2>Por favor, tente novamente.</h2>
                    </div>
                    <br>";
        }

        $conexao->close();
    ?>

</div>

</body>

<?php
    include("rodape.php");
?>