<?php
    include("cabecalho.php");
?>

    <style>
       
        p {
            font-size: 1.2em;
            text-align: left;
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
        }

        input#nome,
        input#email,
        input#endereco,
        input#tel,
        input#cep,
        input#nom_animal {
            font-size: 1.2em;
        }
    </style>

    <div class="banner">
        <h2>Adote</h2>
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil vitae dolore
            nostrum atque accusamus ullam doloremque, quia possimus hic.
            Quas sapiente ad saepe quibusdam quo voluptatum, quam iste error provident?</h3>
    </div>
    <!--Formulário-->
    <main>
        <form action="formularioadocao_action.php" method="POST" id="contato" class="w3-container">

            <fieldset id="id_adotante">
                <legend class="w3-lime">
                    <h3>Identificação do Adotante</h3>
                </legend>
                <p><label for="nome" class="w3-text-pink">Nome:</label> <input type="text" name="nome" id="nome"
                        size="50" maxlength="100" placeholder="Digite o nome completo." class="w3-input" />
                </p>
                <p><label for="endereco" class="w3-text-pink">Endereço:</label> <input type="text" name="endereco"
                        id="endereco" size="80" maxlength="60" placeholder="Digite o endereço." class="w3-input" /></p>
                <p><label for="cep" class="w3-text-pink">CEP:</label><input type="text" name="cep" id="cep" size="10"
                        maxlength="9" placeholder="XXXXX-XXX" class="w3-input" /></p>
                <p><label for="email" class="w3-text-pink">Email:</label><input type="email" name="email" id="email"
                        size="80" maxlength="60" placeholder="Digite um email válido." class="w3-input "></p>
                <p><label for="tel" class="w3-text-pink">Tel./Cel.:</label><input type="text" name="tel" id="tel"
                        size="12" maxlength="13" placeholder="00 00000-0000" class="w3-input"></p>
                <p><label for="contato" class="w3-text-pink">Quando podemos entrar em contato com você?</label> 
                    <input type="text" name="contato" id="contato" size="50" maxlength="100" placeholder="Digite o dia da semana." class="w3-input"/>
                <p><label for="horario" class="w3-text-pink">Qual o melhor horário?</label> 
                    <input type="text" name="horario" id="horario" size="50" maxlength="100" placeholder="Manhã, tarde ou noite." class="w3-input"/>
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
                <legend class="w3-lime">
                    <h3>Meu novo Pet</h3>
                </legend>
                <p><label for="nom_animal" class="w3-text-pink">Nome:</label><input type="text" name="nom_animal"
                        id="nom_animal" size="60" maxlength="40" placeholder="Digite o nome do escolhido"
                        class="w3-input"></p>
                <p>Tipo:
                    <input type="radio" name="tipo" id="cachorro" value="cachorro" checked>
                    <label for="cachorro" class="labelSimples" class="w3-check">Cachorro</label>
                    <input type="radio" name="tipo" id="gato" value="gato" checked>
                    <label for="gato" class="labelSimples" class="w3-check">Gato</label>
                </p>
                <p> Ainda não escolhi:
                    <select name="duvida" id="duvida">
                        <option value="" default>Nenhum item selecionado.</option>
                        <option value="visita">Quero fazer uma visita.</option>
                        <option value="mais">Quero mais informações.</option>
                        <option value="adotar">Quero adotar mais.</option>
                    </select>
                </p>
                <p> Preciso de ajuda:
                    <textarea name="ajuda" id="ajuda" cols="100" rows="10"
                        placeholder="Digite mais informações sobre o que você procura ou dúvidas sobre os animais e nossa organização."></textarea>

                </p>
            </fieldset>

            <fieldset id="termoadocao">
                <legend class="w3-lime">
                    <h3>Antes de enviar o formulário...</h3>
                </legend>
                <p>Leia nosso termo de adoção</p>
                <a href="documento/Termo de Adoção.pdf" download="termoadoao.pdf">Click para baixar</a>
                <p>Documento de Adoção</p>
                <a href="documento/Termo_Adoção.pdf" download="termoadoao.pdf">Click para baixar</a>

                <p>Estou de acordo?
                    <input type="radio" name="choice" id="sim" value="sim" checked required>
                    <label for="sim" class="labelSimples">Sim</label>
                    <input type="radio" name="choice" id="nao" value="nao" checked>
                    <label for="nao" class="labelSimples">Não</label>
                </p>
            </fieldset>
            <input type="submit" value="Enviar" id="btn-enviar" class="w3-btn w3-lime">
        </form>
    </main>
        
    <script src="http://code.jquery.com/jquery-1.12.0.min.js">
    </script>
    <script>
        $(".btn-menu").click(function () {
            $(".menu").show();
        })
        $(".btn-fechar").click(function () {
            $(".menu").hide();
        })
    </script>
</body>

<?php 
    include("rodape.php");
?>

</html>
