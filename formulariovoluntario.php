<?php 
    include("cabecalho.php");
?>

<title>Formulário Voluntário</title>

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
            background: linear-gradient(to right,#007fff,#00BFFF)
        }

        input[type="submit"] {
            border: none;
            border-radius: 30px;
            font-size: 1.2em;
            padding: 10px 30px;
            margin: 20px 0;
            cursor: pointer;
            background: linear-gradient(to right,#007fff,#00BFFF)
        }

        input#nome,
        input#email,
        input#endereco,
        input#tel,
        input#cep,
         {
            font-size: 1.2em;
        }
    </style>

<body>  
    <div class="banner">
        <h2>Seja Voluntário</h2>
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil vitae dolore
            nostrum atque accusamus ullam doloremque, quia possimus hic.
            Quas sapiente ad saepe quibusdam quo voluptatum, quam iste error provident?</h3>
    </div>
    <!--Formulário-->
    <main>
        <form method="POST" id="contato" class="w3-container" action="obrigado.html">

            <fieldset id="id_voluntário">
                <legend>
                    <h3>Identificação do Voluntário</h3>
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
                <p>Quando podemos entrar em contato com você?<br>
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
                </p>
            </fieldset>

            <fieldset id="termoadocao">
                <legend>
                    <h3>Antes de enviar o formulário...</h3>
                </legend>
                <p>Leia nosso termo de Compromisso</p>
                <a href="documento/Termo_Voluntario.docx" download="termoadoao.pdf">Click para baixar</a>
                <p>Documentos para Adesão</p>
                <a href="documento/Documentos para Adesão.pdf" download="termoadoao.pdf">Click para baixar</a>

                <p>Estou de acordo?
                    <input type="radio" name="choice" id="sim" value="sim" checked>
                    <label for="sim" class="labelSimples">Sim</label>
                    <input type="radio" name="choice" id="nao" value="nao" checked>
                    <label for="nao" class="labelSimples">Não</label>
                </p>
            </fieldset>
            <input type="submit" value="Enviar" id="btn-enviar" class="w3-btn">
        </form>
    </main>
    <!--Outras informações-->
    <section class="contato">
        <h2>Contatos</h2>
        <ul>
            <li><i class="fa fa-phone fa-lg"></i> (11)0000-9098</li>
            <li><i class="fa fa-whatsapp fa-lg"></i>(11)9 0000-0000</li>
            <li><i class="fa fa-envelope fa-lg"></i>amor4patas.love@gmail.com</li>
        </ul>
    </section>
   
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