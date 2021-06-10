<?php 
    include 'cabecalho.php';
?>
<title>Cadastro de animais</title>

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

            if(isset($_FILES['foto1'])) {

                $nomeFinal = time().'.jpg';
                $diretorio = "img/adocao/";

                move_uploaded_file($_FILES['foto1']['tmp_name'], $diretorio.$nomeFinal);
                
            $sql = "INSERT INTO animais (pet_nome, pet_especie, pet_sexo, pet_idade, pet_pelagem, pet_convive, pet_obs, pet_foto1)
                VALUES ('".$_POST['nome']."', '".$_POST['especie']."', '".$_POST['sexo']."', '".$_POST['idade']."', '".$_POST['pelagem']."', '".$_POST['convive']."', '".$_POST['obs']."','".$nomeFinal."')";
            
            if ($conexao->query($sql) === TRUE) {
                echo "<div class='w3-center'><a href='cadastropet.php'>
                        <button class='w3-btn w3-indigo w3-round-xlarge w3-center'>
                            <h1 style='font-weight:bold'>Cadastro efetuado com sucesso!</h1>                            
                        </button></a>
                        <br></div>";
            } else {
                echo"<div class='w3-center'><a href='cadastropet.php'>
                <button class='w3-btn w3-indigo w3-round-xlarge w3-center'>
                    <h1 style='font-weight:bold'>Erro! Por favor, tente novamente.</h1>                            
                </button></a>
                </div>";
            }
        }

        ?>

    </div>

</body>

<?php 
    include 'rodape.php';
?>