<?php
    include("cabecalho.php");
?>

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
            background: linear-gradient(to right,#007fff,#00BFFF);
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
        p {
            font-family: 'Montserrat Alternates', sans-serif;
        }

        h5   {
            font-family: 'Montserrat Alternates', sans-serif;
            font-weight:bold;
        }
        
      </style>

<body class="bg">

<div>
    <div class="banner w3-round-xlarge">
        <h2 style="font-weight:bold">A razão de existirmos!</h2>
        <h4>Conheça nossas fofurinhas, que foram resgatadas da rua ou de situações de maus-tratos. Foram castrados, vacinados e tratados com muito carinho por nossa equipe. Agora estão saudáveis e aguardando uma nova família. <br>Adote! ♥ </h4>
    </div>
    <!--Início do conteúdo-->    
    <br>
    <div class="w3-indigo w3-center w3-container w3-padding w3-round-xlarge" style="margin:auto; width:99%">
        <h2>Nossos Gatinhos</h2>
    </div>
    <div class="w3-row-padding w3-margin-top">

        <?php

            $servername = "localhost";
            $username = "root";
            $password = "usbw";
            $dbname = "abrigo";     

            $conexao = new mysqli($servername, $username, $password, $dbname);
            if ($conexao->connect_error) {
                die("Falha de conexão: " . $conexao->connect_error);
            }

            $result1 = mysqli_query($conexao, "SELECT * FROM animais WHERE pet_especie = 'gato'");
            if($result1 != null)

            while($dado1 = $result1->fetch_object()) {

            echo '<div class="w3-quarter w3-padding">
                        <div class="w3-card w3-white" class="box">
                            <img src="img/adocao/'.$dado1->pet_foto1.'" alt="Foto de '.$dado1->pet_nome.'" style="width: 100%;" class="w3-opacity w3-hover-opacity-off"/>
                            
                            <div class="w3-container w3-center">
                                <h5>'.$dado1->pet_nome.'</h5>
                                <h6>'.$dado1->pet_sexo.'</h6>
                                <h6>Idade: '.$dado1->pet_idade.'</h6>
                                <h6>Convive com: '.$dado1->pet_convive.'</h6>';
                                if($dado1->pet_obs!=null) {
                                    echo '<h6>'.$dado1->pet_obs.'</h6>';
                                }
                                echo '<a href="formularioadocao.php"><button class="w3-btn w3-large w3-indigo w3-round-large">Quero Adotar</button></a>
                            </div>
                        </div>
                 </div>';     
            }          
        ?>
    </div>

    <div class="w3-indigo w3-center w3-container w3-padding w3-round-xlarge" style="margin:auto; width:99%; margin-top: 50px">
        <h2>Nossos Cachorrinhos</h2>
    </div>
    <div class="w3-row-padding w3-margin-top">

        <?php

            $servername = "localhost";
            $username = "root";
            $password = "usbw";
            $dbname = "abrigo";     

            $conexao = new mysqli($servername, $username, $password, $dbname);
            if ($conexao->connect_error) {
                die("Falha de conexão: " . $conexao->connect_error);
            }

            $result2 = mysqli_query($conexao, "SELECT * FROM animais WHERE pet_especie = 'cao'");
            if($result2 != null)

            while($dado2 = $result2->fetch_object()) {

            echo '<div class="w3-quarter w3-padding">
                        <div class="w3-card w3-white" class="box">
                            <img src="img/adocao/'.$dado2->pet_foto1.'" alt="Foto de '.$dado2->pet_nome.'" style="width:100%" class="w3-opacity w3-hover-opacity-off"/>
                            
                            <div class="w3-container w3-center">
                            <h5>'.$dado2->pet_nome.'</h5>
                            <h6>'.$dado2->pet_sexo.'</h6>
                            <h6>Idade: '.$dado2->pet_idade.'</h6>
                            <h6>Convive com: '.$dado2->pet_convive.'</h6>';
                            if($dado2->pet_obs!=null) {
                                echo '<h6>'.$dado2->pet_obs.'</h6>';
                            }
                            echo '<a href="formularioadocao.php"><button class="w3-btn w3-large w3-indigo w3-round-large">Quero Adotar</button></a>
                            </div>
                        </div>
                 </div>';     
            }          
        ?>

</div>
       
</body>

<?php
    include("rodape.php");
?>