<?php
include('verificalogin.php');

include("cabecalho.php");
?>

<title>Cadastro de animais</title>

    <style>

    label {
        font-family: 'Montserrat Alternates', sans-serif;
        font-weight:bold;
        font-size: 1.2em;
    }
     
        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-family: 'Montserrat Alternates', sans-serif;
        font-size:1.2em;
    }

    input[type="submit"] {
            border: none;
            border-radius: 30px;
            font-size: 1.2em;
            padding: 10px 30px;
            margin: 20px 0;
            cursor: pointer;
            font-family: 'Montserrat Alternates', sans-serif;
            font-weight:bold;
        }

    input[type="file"] {
            border: none;
            cursor: pointer;
            font-family: 'Montserrat Alternates', sans-serif;
        }
   
    .center {
        margin: auto;
        width: 60%;
        padding: 10px;
    }

    fieldset {
            background-color: #c5c6d0;
            color: #000;
            border: none;
            border-radius: 10px;
            margin-bottom: 10px;
        }

    fieldset legend {
            font-weight: bold;
            letter-spacing: .05em;
            padding: 8px;
            margin-left: 8px;
            border-radius: 8px;
        }
    
    </style>

<body class="bg">  

    <div class="w3-center"> 
        <div class="w3-button w3-red w3-center w3-margin-bottom w3-round-large">
            <p>
            <i class="fa fa-sign-out w3-large"></i>&nbsp;
            <a href="logout.php" class="w3-large">Sair</a></p>
        </div>  
        
        <h2 class="banner w3-round-xlarge" style="width:60%; margin:auto">Cadastro de animais para adoção</h2>        
    </div>
    <div class="center">

        <form action="cadastropet_action2.php" method="post" enctype="multipart/form-data">
          
          <fieldset id="cadastropet">
            <legend class="w3-indigo">
                <h3>Dados do animal</h3>
            </legend>
                <label for="nome">Nome</label><br>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome do animal" required>
            <br>    
            <label for="especie">Espécie</label><br>
            <select id="especie" name="especie">
                <option value="cao">Cão</option>
                <option value="gato">Gato</option>
            </select>
            <br>
            <label for="sexo">Sexo</label><br>
            <select id="sexo" name="sexo">
                <option value="femea">Fêmea</option>
                <option value="macho">Macho</option>
            </select>
            <br>
            <label for="idade">Idade</label><br>
            <input type="text" id="idade" name="idade" placeholder="Exemplo: 1 ano, 2 meses..." required>
            <br>
            <label for="pelagem">Pelagem</label><br>
            <input type="text" id="pelagem" name="pelagem" placeholder="Exemplo: preto, branco, caramelo, rajado..." required>
            <br>
            <label for="convive">Convive com</label><br>
            <input type="text" id="convive" name="convive" placeholder="Exemplo: crianças, outros gatos, outros cães..." required>
            <br>
            <label for="obs">Observações</label><br>
            <input type="text" id="obs" name="obs"><br>
            <br>
            <label for="foto1">Insira uma foto:</label><br>
            <br>
            <input type="file" id="foto1" name="foto1"><br>
            <br>
        </fieldset>
            <div class="w3-center">
                <input type="submit" value="Cadastrar" class="w3-indigo w3-btn">
          </div>
        </form>
      </div>

</body>

<?php
    include("rodape.php");
?>