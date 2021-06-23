<?php
    include("cabecalho.php");
?>
<title>Login</title>

<style>

/*Configuração do rodapé para páginas em que ele não estava ficando fixo no fim da página*/
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
    border: none;
    border-radius: 30px;
    font-size: 1.2em;
    padding: 10px 30px;
    margin: 20px 0;
    cursor: pointer;    
 }
 
 .center {
     margin: auto;
     width: 20%;
     padding: 10px;
 }
 label, 
 input {
     font-family: "Montserrat Alternates", sans-serif;
     font-weight:bold;
     font-size: 1.2em;
 }

</style>

<body class="bg">   
    <div class="w3-center bannerazul w3-round-xlarge">    
        <h3 style="font-weight:bold">Login - Administrador</h3>        
    </div>
 
    <div class="center">
        <?php
            if(isset($_SESSION['nao_autenticado'])) {
                
            echo '<div class= "w3-panel w3-red">
                <p>Erro: Usuário e/ou senha inválidos.</p>
            </div>';
            }
        ?>
        
        <form class="w3-white w3-border w3-padding w3-round-xlarge" action="login_action.php" method="post" enctype="multipart/form-data">
            <label for="usuario">Usuário:</label><br>
            <input type="text" id="usuario" name="usuario" placeholder="Seu usuário" required>
            <br>          
            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" placeholder="Sua senha" required>
            <br>
            <div class="w3-center">           
            <input type="submit" value="Entrar" class="w3-btn w3-indigo">
            </div>
        </form>
    </div>

</body>

<?php
include "rodape.php";
?>