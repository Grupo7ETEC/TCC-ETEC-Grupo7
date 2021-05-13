<?php
    include("cabecalho.php");
?>
<title>Login</title>

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

 input[type=password], select {
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
     background-color: blue;
     color: white;
     font-weight: bold;
     padding: 14px 20px;
     margin: 8px 0;
     border: none;
     border-radius: 4px;
     cursor: pointer;
 }

 input[type=submit]:hover {
     background-color: darkblue;
 }
 
 .center {
     margin: auto;
     width: 20%;
     padding: 10px;
 }
 
</style>

<body class="w3-white">   
    <div class="w3-center" style="border-radius: 5px; background-color: white; padding: 20px;">    
        <h2>Login - Sistema de cadastro de animais para adoção</h2>        
    </div>
 
    <div class="center" style="border-radius: 5px; background-color: white; padding: 20px;">
        <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>        
            <div class= "w3-panel w3-red">
                <p>Erro: Usuário e/ou senha inválidos.</p>
            </div>
        <?php
            endif;
        ?>
        
        <form action="login_action.php" method="post" enctype="multipart/form-data">
            <label for="usuario">Usuário:</label><br>
            <input type="text" id="usuario" name="usuario" placeholder="Seu usuário" required>
            <br>          
            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" placeholder="Sua senha" required>
            <br>           
            <input type="submit" value="Entrar">
        </form>
    </div>

</body>

<footer class="rodape">
        <div class="social-icons">
            <a href="#" class="btn-facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn-youtube"><i class="fa fa-youtube"></i></a>
            <a href="#" class="btn-instagram"><i class="fa fa-instagram"></i></a>
        </div>
        <p class="copyright">
            Copyright &#0169 &#x2764;&#128062;&#128062; 2021.
        </p>
    </footer>
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

</html>