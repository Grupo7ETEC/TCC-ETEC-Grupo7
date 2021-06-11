<?php
include('verificalogin.php');

include("cabecalho.php");
?>
<title>Administrador</title>

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

    <div class="w3-center">
        <div class="w3-btn w3-red w3-center w3-margin-bottom w3-round-large">
            <p>
            <i class="fa fa-sign-out w3-large"></i>&nbsp;
            <a href="logout.php" class="w3-large">Sair do sistema</a></p>
        </div>  
    </div>

    <div class="w3-center" style="margin-top:60px">
        <h2 style="font-weight:bold">Gerenciar animais</h2>
    </div>
   
    <div class="w3-row-padding w3-center w3-margin-top"> 
    <div class="w3-half">
        <a href="cadastropet.php"><button class="w3-btn w3-indigo w3-right w3-round-xlarge w3-large">
            <i class="fa fa-plus w3-xxlarge"></i>
            <p style="font-weight:bold">Cadastrar animais</p>
        </button></a>
    </div>
   
    <div class="w3-half">
        <a href="excluirpet.php"><button class="w3-btn w3-indigo w3-left w3-round-xlarge w3-large">
            <i class="fa fa-times w3-xxlarge"></i>
            <p style="font-weight:bold">Excluir cadastro</p>
        </button></a> 
    </div>
    </div>

    <div class="w3-center" style="margin-top:60px;">
        <h2 style="font-weight:bold">Gerenciar voluntários</h2>
    </div>

    <div class="w3-center w3-margin-top">
        <a href="listaVoluntarios.php"><button class="w3-btn w3-indigo w3-center w3-round-xlarge w3-large">
            <i class="fa fa-group w3-xxlarge"></i>
            <p style="font-weight:bold">Visualizar voluntários</p>
        </button></a>
    </div>
    

</body>

<?php
    include("rodape.php");
?>