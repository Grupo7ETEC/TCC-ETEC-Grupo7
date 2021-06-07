<?php
    include("cabecalho.php");
?>

<body class="bg">

<!-- Configuração do rodapé para páginas em que ele não estava ficando fixo no fim da página-->
<style>
.rodape {
    width: 100%; 
    float:center;
    background: linear-gradient(to right,#ffc107,#ffdb4d);
    padding: 10px;
    border-top: 7px solid #3f51b5;
    margin-top: 16px;
    position: fixed;
    height: 130px;
    bottom: 0px;
    left: 0px;
    right: 0px;
    margin-bottom: 0px;
}
</style>
       
    <?php

        require("PHPMailer/PHPMailer.php");
        require("PHPMailer/SMTP.php");
        require("PHPMailer/Exception.php");

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        $mail = new PHPMailer(true);
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

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
            $mail->Subject = '=?UTF-8?B?'.base64_encode("Formulário de Contato: $nome").'?=';
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
                        <th>Formulário de Contato</th>
                        <tr>
                            <td width='500'>Nome:  <b>$nome</b></td>
                        </tr>                       
                        <tr>
                            <td width='320'>E-mail:  <b>$email</b></td>
                        </tr>                        
                        <tr>
                            <td width='320'>Mensagem:  <b>$mensagem</b></td>
                        </tr>
                    </tr>                            
                </table>
            </body>
            </html>
                    ";

            $mail->AltBody = "Mensagem";

            if(!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "<div class='banner w3-round-xlarge'>
                        <h1 style='font-weight:bold'>Obrigado!</h1>
                        <h2>Sua mensagem foi enviada.</h2>
                        <h3>Nossa equipe responderá em breve pelo e-mail informado.</h3>
                    </div>
                    <br>";
            }

        } catch (Exception $e) {
            echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        }

        ?>
      
</body>

<?php
    include 'rodape.php';
?>
