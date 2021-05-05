<?php
    include("cabecalho.php");
?>

<title>Cadastro de animais</title>

<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: green;
        color: white;
        font-weight: bold;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: darkgreen;
    }      

    .center {
        margin: auto;
        width: 60%;
        padding: 10px;
    }
</style>

<body class="w3-white">
    <div class="banner" style="border-radius: 5px; background-color: white; padding: 20px;">
        <h2>Cadastro de animais para adoção</h2>
    </div>

    <div class="center" style="border-radius: 5px; background-color: white; padding: 20px;">
        <form action="cadastropet_action.php" method="post" enctype="multipart/form-data">
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
         
          <input type="submit" value="Cadastrar">
        </form>
      </div>
    
</body>

<?php
    include("rodape.php");
?>   
