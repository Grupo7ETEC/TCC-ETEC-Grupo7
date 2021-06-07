    <?php
        include("cabecalho.php");
    ?>

    <title>Formulário Voluntário</title>
    
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
        <h2 style="font-weight:bold">Seja Voluntário</h2>
        <h4>Para ser um voluntário em nosso projeto, basta se cadastrar no formulário abaixo.<br> Entraremos em contato quando necessário, e você sempre poderá decidir se quer participar ou não da atividade.<br> Agradecemos seu interesse e disposição!</h4>
    </div>

    <!--Formulário-->
    <main>
        <form method="POST" id="contato" class="w3-container" action="voluntario_action.php">

            <fieldset id="id_voluntário">
                <legend class="w3-indigo">
                    <h3>Identificação do Voluntário</h3>
                </legend>
                <p> <label for="nome" class="w3-text-pink">Nome:</label> 
                    <input type="text" name="vnome" id="vnome" size="50" maxlength="100" placeholder="Digite o nome completo." class="w3-input" />
                </p>
                <p> <label for="endereco" class="w3-text-pink">Endereço:</label> 
                    <input type="text" name="vendereco" id="vendereco" size="80" maxlength="60" placeholder="Digite o endereço." class="w3-input" />
                </p>
                <p> <label for="cep" class="w3-text-pink">CEP:</label>
                    <input type="text" name="vcep" id="vcep" size="10" maxlength="9" placeholder="XXXXX-XXX" class="w3-input"/>
                </p>
                <p> <label for="email" class="w3-text-pink">Email:</label>
                    <input type="email" name="vemail" id="vemail" size="80" maxlength="60" placeholder="Digite um email válido." class="w3-input ">
                </p>
                <p> <label for="tel" class="w3-text-pink">Tel./Cel.:</label>
                    <input type="text" name="vtelefone" id="vtelefone" size="12" maxlength="13" placeholder="00 00000-0000" class="w3-input">
                </p>
                <p><label for="dia" class="w3-text-pink">Quando podemos entrar em contato com você?</label> 
                    <input type="text" name="vdia" id="vdia"  maxlength="100" placeholder="Digite o dia da semana." class="w3-input"/>
                </p>
                <p><label for="horario" class="w3-text-pink">Qual o melhor horário?</label>
                    <input type="text" name="vhorario" id="vhorario" maxlength="100" placeholder="Manhã, tarde ou noite." class="w3-input"/>
                </p> 
               <!-- <p>Quando podemos entrar em contato com você?<br>
                    <input type="checkbox" name="semana" value="idsegunda" id="idsegunda" class="w3-check" />
                    <label for="idsegunda" class="labelSimples">Segunda-feira</label><br>
                    <input type="checkbox" name="semana" value="idterca" id="idterca" class="w3-check" />
                    <label for="idterca" class="labelSimples">Terça-feira</label><br>
                    <input type="checkbox" name="semana" value="idquarta" id="idquarta" class="w3-check" />
                    <label for="idquarta" class="labelSimples">Quarta-feira </label><br>
                    <input type="checkbox" name="semana" value="idquinta" id="idquinta" class="w3-check" />
                    <label for="idquinta" class="labelSimples">Quinta-feira</label><br>
                    <input type="checkbox" name="semana" value="idsexta" id="idsexta" class="w3-check" />
                    <label for="idsexta" class="labelSimples">Sexta-feira</label><br>
                    <input type="checkbox" name="semana" value="idsabado" id="idsabado" class="w3-check" />
                    <label for="idsabado" class="labelSimples">Sábado</label><br>
                    <input type="checkbox" name="s_email" value="s_email" id="s_email" class="w3-check">
                    <label for="s_email" class="labelSimples">Prefiro por email</label><br>
                </p>
                <p><b>Qual o melhor horário?</b>
                    <textarea name="hr" id="hr" cols="40" rows="3"
                        placeholder="Digite o melhor horário para entrarmos em contato"></textarea>
                </p> -->
            </fieldset>

            <fieldset id="termoadesao">
                <legend class="w3-indigo">
                    <h3>Antes de enviar o formulário...</h3>
                </legend>
                <p style="font-size: 1.2em">Leia o Termo de Adesão ao Serviço Voluntário:</p><br>
                <a style="font-weight:bold; font-size:1.2em" href="documento/Termo_Voluntario.docx" download="Termo_Voluntario.docx">Clique para baixar</a><br>
                <!--<p>Documentos para Adesão</p>
                <a href="documento/Documentos para Adesão.pdf" download="termoadoao.pdf">Click para baixar</a>

                <p>Estou de acordo?
                    <input type="radio" name="choice" id="sim" value="sim" checked>
                    <label for="sim" class="labelSimples">Sim</label>
                    <input type="radio" name="choice" id="nao" value="nao" checked>
                    <label for="nao" class="labelSimples">Não</label>
                </p>-->
                <br>
                <p><input type="checkbox" name="termook" value="" id="termook" class="w3-check" required/>
                <label for="termook" class="labelSimples">Declaro que li e estou de acordo com o Termo de Adesão ao Serviço Voluntário.</label></p>

            </fieldset>
            <input type="submit" value="Enviar" id="btn-enviar" class="w3-btn w3-indigo w3-margin-left">
        </form>
    </main>
    <!--Outras informações
    <section class="contato">
        <h2>Contatos</h2>
        <ul>
            <li><i class="fa fa-phone fa-lg"></i> (11)0000-9098</li>
            <li><i class="fa fa-whatsapp fa-lg"></i>(11)9 0000-0000</li>
            <li><i class="fa fa-envelope fa-lg"></i>amor4patas.love@gmail.com</li>
        </ul>
    </section>-->

</body>

<?php
    include("rodape.php");
?>
