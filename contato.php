<?php 
    include 'cabecalho.php';
?>

<title>Contato</title>

<style>

    label, textarea {
        font-family: 'Montserrat Alternates', sans-serif;
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

<body class='bg'>

    <div class="banner w3-center w3-padding-16 w3-round-xlarge"> 
        <h2 style="font-weight:bold">Contato</h2>
        <h4>Para entrar em contato conosco, basta preencher o formulário abaixo, enviar um e-mail, ligar ou mandar uma mensagem no WhatsApp.<br> Será um prazer te atender!</h4>    
        <br>      
    </div>

    <div class="w3-padding" style="width:50%; margin: auto">
        <form action="contato_action.php" method="post" enctype="multipart/form-data">          
            <fieldset id="contato">
                <legend class="w3-indigo">
                    <h3>Envie uma mensagem</h3>
                </legend>
                    <label style="font-weight:bold;" for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                <br>   

                <label style="font-weight:bold;" for="email">E-mail:</label><br>
                <input type="text" id="email" name="email" placeholder="Digite seu e-mail para resposta" required>
                <br>   

                <label style="font-weight:bold;" for="mensagem">Mensagem:</label><br>
                <textarea class="w3-margin-top w3-round w3-padding" name="mensagem" id="mensagem" cols="70" rows="5" placeholder="Escreva sua mensagem..."></textarea>
            </fieldset>

            <div class="w3-center">
                <input type="submit" value="Enviar mensagem" class="w3-indigo w3-btn">
            </div>

        <div class="w3-row" style="margin-top:30px">
            <div class="bannerazul w3-half w3-padding-16 w3-round-xlarge" style="width:40%;margin:auto"> 
                <h2 style="font-weight:bold">E-mail</h2>
                <h4>amor4patas.love@gmail.com</h4>    
                <br>      
            </div>

            <div class="bannerazul w3-half w3-padding-16 w3-round-xlarge w3-right" style="width:40%; margin:auto"> 
                <h2 style="font-weight:bold">Telefones</h2>
                <h4><i class="fa fa-whatsapp w3-xlarge"></i>&nbsp; (11) 90000-0000</h4>
                <h4>(11) 0000-9098</h4> 
            </div>
        </div>
        </form>
    </div>

<body>

<?php 
    include 'rodape.php';
?>