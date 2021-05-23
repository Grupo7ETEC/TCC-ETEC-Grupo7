<?php
    include("cabecalho.php");
?>

<body>
       
    <?php

        require("PHPMailer/PHPMailer.php");
        require("PHPMailer/SMTP.php");
        require("PHPMailer/Exception.php");

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        $mail = new PHPMailer(true);
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $email = $_POST['email'];
        $tel= $_POST['tel'];
        $contato = $_POST['contato'];
        $horario = $_POST['horario'];
        $pet = $_POST['nom_animal'];
        $tipo = $_POST['tipo'];
        $duvida = $_POST['duvida'];
        $ajuda = $_POST['ajuda'];

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "ssl";
            $mail->Username = 'amor4patas.love@gmail.com';
            $mail->Password = 'etecgrupo7';
            $mail->Port = 465;
            $mail->charSet = "UTF-8";

            $mail->setFrom('amor4patas.love@gmail.com');
            $mail->addAddress('amor4patas.love@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = '=?UTF-8?B?'.base64_encode("Formulário de Adoção - Interessado: $nome").'?=';
            $mail->Body = "
            <style type='text/css'>
            body {
            font-family:Montserrat, sans-serif;
            font-size:14px;
            }
            th, td {
                padding: 10px;
            }
            </style>
        
            <html>
                <table width='510'>
                    <tr>             
                        <th>Formulário de Adoção - Dados do interessado</th>
                        <tr>
                            <td width='500'>Nome:  <b>$nome</b></td>
                        </tr>
                        <tr>
                            <td width='320'>Endereço:<b>  $endereco</b></td>
                        </tr>
                        <tr>
                            <td width='320'>CEP:  <b>$cep</b></td>
                        </tr>
                        <tr>
                            <td width='320'>E-mail:  <b>$email</b></td>
                        </tr>
                        <tr>
                            <td width='320'>Telefone:  <b>$tel</b></td>
                        </tr>
                        <tr>
                            <td width='320'>Peferência de contato:  <b>$contato</b></td>
                        </tr>
                        <tr>
                            <td width='320'>Horário:  <b>$horario</b></td>
                        </tr>
                        <tr>
                            <td width='320'>Animal escolhido:  <b>$pet</b></td>
                        </tr>
                        <tr>
                            <td width='320'>Espécie:  <b>$tipo</b></td>
                        </tr>
                        <tr>
                            <td width='320'>Ainda não escolhi:  <b>$duvida</b></td>
                        </tr>
                        <tr>
                            <td width='320'>Preciso de ajuda:  <b>$ajuda</b></td>
                        </tr>
                    </tr>                            
                </table>
            </body>
            </html>
                    ";

            $mail->AltBody = "Chegou o email";

            if(!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "<div class='w3-center'>
                        <h1>Obrigado!</h1>
                        <h2>Seu formulário foi enviado.</h2>
                        <p>Nossa equipe entrará em contato.</p>
                    </div>
                    <br>";
            }

        } catch (Exception $e) {
            echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        }

        ?>
  
    <!--Conteúdo-->
    <section>
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

