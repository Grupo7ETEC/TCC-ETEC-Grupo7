<?php
    include('verificalogin.php');
    include("cabecalho.php");
?>
<title>Lista de Voluntários</title>

    <style>
        /*BOTÕES*/
        button {
            text-align: center;
            font-size: 14px;
            margin: 4px 4px;
            text-decoration: none;
            border-radius: 4px;
            font-family: "Montserrat Alternates", sans-serif;
            font-weight:bold;            
}
        button:hover {
            color: black;
            opacity: 1
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p, 
        th {
            font-family: 'Montserrat Alternates', sans-serif;
        }

        h5   {
            font-family: 'Montserrat Alternates', sans-serif;
            font-weight:bold;
        }

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

    <div class="w3-center w3-margin-bottom">
        <a href="telaADM.php">
        <button class="w3-btn w3-large w3-amber w3-round-large w3-xlarge"><i class="fa fa-reply"></i>&nbsp;
            Voltar    
        </button></a>
    </div>

<div class="w3-container">
    <div class="w3-indigo w3-center w3-container w3-padding w3-round-xlarge" style="margin:auto; width:99%">
        <h2>Lista de Voluntários</h2>
    </div>

    <div class="w3-container w3-margin-top">
                <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-indigo">
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>CEP</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Melhor dia</th>
                        <th>Melhor horário</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
    
        <?php

            $servername = "localhost";
            $username = "root";
            $password = "usbw";
            $dbname = "abrigo";     

            $conexao = new mysqli($servername, $username, $password, $dbname);
            if ($conexao->connect_error) {
                die("Falha de conexão: " . $conexao->connect_error);
            }

            $result = mysqli_query($conexao, "SELECT * FROM voluntarios");
            if($result != null)

            while($dado = $result->fetch_object()) {
                echo '<tr>';
                echo '<td style="width: 2%">'.$dado->idvoluntario.'</td>';
                echo '<td style="width: 25%">'.$dado->vnome.'</td>';
                echo '<td style="width: 25%">'.$dado->vendereco.'</td>';
                echo '<td style="width: 5%">'.$dado->vcep.'</td>';
                echo '<td style="width: 10%">'.$dado->vemail.'</td>';
                echo '<td style="width: 10%">'.$dado->vtelefone.'</td>';
                echo '<td style="width: 10%">'.$dado->vdia.'</td>';
                echo '<td style="width: 10%">'.$dado->vhorario.'</td>';
                echo '<td style="width: 3%">
                        <form action="excluirVoluntario.php" method="post"> 
                        <input type="hidden" name="idvoluntario" value="'.$dado->idvoluntario.'">
                        <button name="btnExcluirV" class="w3-button w3-block w3-red w3-cell w3-round-large">
                        <i class="fa fa-user-times"></i> </button> </td>
                        </form>';
                echo '</tr>';         
           
            }          
        ?>
    </div>
        
</div>
       
</body>

<?php
    include("rodape.php");
?>