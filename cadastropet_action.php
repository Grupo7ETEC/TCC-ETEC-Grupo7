<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Cadastro de animais para adoção</title>
    </head>
    <body>
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
            <a href="cadastropet.html">
            <h1 class ="w3-button w3-blue">Cadastro realizado com sucesso! </h1>
        </a>
        ';
        } else {
            echo '
            <a href="cadastropet.html">
                <h1 class="w3-button w3-blue">ERRO!</h1>
            </a>
            ';
        }
    }
     
    ?>
    </div>
    </body>
    </html>