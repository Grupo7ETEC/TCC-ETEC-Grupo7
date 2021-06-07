<?php
    include("cabecalho.php");
?>

    <style>
      
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a        {
            font-family: 'Montserrat Alternates', sans-serif;
        }

        b{
            font-family: 'Montserrat Alternates', sans-serif;
            font-weight:bold;
        }

        label  {
            font-family: 'Montserrat Alternates', sans-serif;
            font-size:1.2em;
            font-weight:bold;           
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

        input[type="submit"] {
            border: none;
            border-radius: 30px;
            font-size: 1.2em;
            padding: 10px 30px;
            margin: 20px 0;
            cursor: pointer;
            font-weight:bold;
            font-family: 'Montserrat Alternates', sans-serif;
        }

        input#nome,
        input#email,
        input#endereco,
        input#tel,
        input#cep,
        input#nom_animal,
        input#contato,
        input#horario {
            font-size: 1.2em;
        }
    </style>

    <body class="bg">

    <div class="banner w3-round-xlarge">
        <h2 style="font-weight:bold">Adote</h2>
        <h4>Se você se apaixonou por um de nossos animais e quer torná-lo o mais novo membro de sua família, o primeiro passo é preencher o formulário abaixo.<br>
    Nossa equipe entrará em contato para agendar uma entrevista. <br>Caso tenha qualquer dúvida, você pode enviar pelo formulário ou falar conosco através da seção de <a style="font-weight:bold" href='contato.php'>Contato</a>.</h4>
    </div>
    <!--Formulário-->
    <main>
        <form action="formularioadocao_action.php" method="POST" id="contato" class="w3-container w3-padding">

            <fieldset id="id_adotante">
                <legend class="w3-indigo">
                    <h3>Identificação do Adotante</h3>
                </legend>
                <p> <label for="nome" class="w3-text-pink">Nome:</label> 
                    <input type="text" name="nome" id="nome" size="50" maxlength="100" placeholder="Digite o nome completo." class="w3-input" required/>
                </p>
                <p><label for="endereco" class="w3-text-pink">Endereço:</label> <input type="text" name="endereco"
                        id="endereco" size="80" maxlength="60" placeholder="Digite o endereço." class="w3-input" required/></p>
                <p><label for="cep" class="w3-text-pink">CEP:</label><input type="text" name="cep" id="cep" size="10"
                        maxlength="9" placeholder="XXXXX-XXX" class="w3-input" required/></p>
                <p><label for="email" class="w3-text-pink">Email:</label><input type="email" name="email" id="email"
                        size="80" maxlength="60" placeholder="Digite um email válido." class="w3-input" required></p>
                <p><label for="tel" class="w3-text-pink">Tel./Cel.:</label><input type="text" name="tel" id="tel"
                        size="12" maxlength="13" placeholder="00 00000-0000" class="w3-input" required></p>
                <p><label for="contato" class="w3-text-pink">Quando podemos entrar em contato com você?</label> 
                    <input type="text" name="contato" id="contato"  maxlength="100" placeholder="Digite o dia da semana." class="w3-input"/></p>
                <p><label for="horario" class="w3-text-pink">Qual o melhor horário?</label>
                    <input type="text" name="horario" id="horario" maxlength="100" placeholder="Manhã, tarde ou noite." class="w3-input"/></p> 
                <!--
                    <input type="checkbox" name="contato[]" value="contato[]" id="idsegunda" class="w3-check" />
                    <label for="idsegunda" class="labelSimples">Segunda-feira</label>
                    <input type="checkbox" name="contato[]" value="contato[]" id="idterca" class="w3-check" />
                    <label for="idterca" class="labelSimples">Terça-feira</label>
                    <input type="checkbox" name="contato[]" value="contato[]" id="idquarta" class="w3-check" />
                    <label for="idquarta" class="labelSimples">Quarta-feira </label>
                    <input type="checkbox" name="contato[]" value="contato[]" id="idquinta" class="w3-check" />
                    <label for="idquinta" class="labelSimples">Quinta-feira</label>
                    <input type="checkbox" name="contato[]" value="contato[]" id="idsexta" class="w3-check" />
                    <label for="idsexta" class="labelSimples">Sexta-feira</label>
                    <input type="checkbox" name="contato[]" value="contato[]" id="idsabado" class="w3-check" />
                    <label for="idsabado" class="labelSimples">Sábado</label>
                    <input type="checkbox" name="contato[]" value="contato[]" id="s_email" class="w3-check">
                    <label for="s_email" class="labelSimples">Prefiro por email</label>

                </p>
                <p>Qual o melhor horário?
                    <textarea name="hr" id="hr" cols="30" rows="10"
                        placeholder="Digite o melhor horário para entrarmos em contato"></textarea>
                </p> -->
            </fieldset>

            <fieldset id="id_animal">
                <legend class="w3-indigo">
                    <h3>Meu novo Pet</h3>
                </legend>
                <p><label for="nom_animal" class="w3-text-pink">Nome:</label><input type="text" name="nom_animal"
                        id="nom_animal" size="60" maxlength="40" placeholder="Digite o nome do escolhido"
                        class="w3-input"></p><br>
                <p style="font-size: 1.2em">Tipo:&nbsp;&nbsp; 
                    <input type="radio" name="tipo" id="cachorro" value="cachorro" checked>
                    <label for="cachorro" class="labelSimples w3-margin-right" class="w3-check">Cachorro</label>
                    <input type="radio" name="tipo" id="gato" value="gato" checked>
                    <label for="gato" class="labelSimples" class="w3-check">Gato</label>
                </p><br>
                <p style="font-size: 1.2em"> Ainda não escolhi:&nbsp;&nbsp; 
                    <select name="duvida" id="duvida">
                        <option value="" default>Nenhum item selecionado.</option>
                        <option value="visita">Quero fazer uma visita.</option>
                        <option value="mais">Quero mais informações.</option>
                        <option value="adotar">Quero adotar mais de um animal.</option>
                    </select>
                </p><br>
                <p style="font-size: 1.2em"> <b>Preciso de ajuda:</b><br>
                    <textarea name="ajuda" id="ajuda" cols="80" rows="5"
                        placeholder="Digite mais informações sobre o que você procura ou dúvidas sobre os animais e nossa organização."></textarea>

                </p>
            </fieldset>

            <fieldset id="termoadocao">
                <legend class="w3-indigo">
                    <h3>Antes de enviar o formulário...</h3>
                </legend>
                
                <p style="font-size: 1.2em">Leia nosso termo de adoção:</p><br>
                <a style="font-weight:bold; font-size:1.2em" href="documento/Termo de Adoção.pdf" download="Termo de Adoção.pdf">Clique para baixar</a><br>
                <!--<p>Documento de Adoção</p>
                <a href="documento/Termo_Adoção.pdf" download="termoadoao.pdf">Clique para baixar</a>-->

                <!--<p>Estou de acordo?
                    <input type="radio" name="choice" id="sim" value="sim" checked required>
                    <label for="sim" class="labelSimples">Sim</label>
                    <input type="radio" name="choice" id="nao" value="nao" checked>
                    <label for="nao" class="labelSimples">Não</label>
                </p> -->
                <br>
                <p><input type="checkbox" name="termook" value="" id="termook" class="w3-check" required/>
                <label for="termook" class="labelSimples">Declaro que li e estou de acordo com o Termo de Adoção.</label></p>

            </fieldset>
            <input type="submit" value="Enviar" id="btn-enviar" class="w3-btn w3-indigo w3-margin-left">
        </form>
    </main>        
    
</body>

<?php 
    include("rodape.php");
?>
