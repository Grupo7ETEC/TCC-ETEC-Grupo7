<?php 
    include 'verificalogin.php';
    include 'cabecalho.php';
?>
<title>Excluir voluntário</title>

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
            $idvoluntario = $_POST['idvoluntario'];
            
            $conexao = new mysqli($servername, $username, $password, $dbname);
            if ($conexao->connect_error) {
                die("Falha de conexão: " . $conexao->connect_error);
            }

            if(isset($_POST['btnExcluirV'])){

            $sql = "DELETE FROM voluntarios WHERE idvoluntario = '".$idvoluntario."';";
                     
            if ($conexao->query($sql) === TRUE) {
                echo "<div class='w3-center'><a href='listaVoluntarios.php'>
                        <button class='w3-btn w3-indigo w3-round-xlarge w3-center'>
                            <h1 style='font-weight:bold'>Voluntário excluído com sucesso!</h1>                            
                        </button></a>
                        <br></div>";
            } else {
                echo"<div class='w3-center'><a href='listaVoluntarios.php'>
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