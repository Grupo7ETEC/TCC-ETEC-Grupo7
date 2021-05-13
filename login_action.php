
<title>Login</title>

    <?php
        session_start();

       define('HOST', 'localhost');
       define('USUARIO', 'root');
       define('SENHA', 'usbw');
       define('DB', 'abrigo');
       
       $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar.');   

        if(empty($_POST['usuario']) || empty($_POST['senha'])) {
            header('Location: login.php');
            exit();
        }

        $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

        $query = "select usuario from login where usuario = '$usuario' and senha = md5('$senha')";
      
        $result = mysqli_query($conexao, $query);
        
        $row = mysqli_num_rows($result);
        
        if($row == 1) {
            $_SESSION['usuario'] = $usuario;
            header('Location: cadastropet.php');
            exit();
        } else {
            $_SESSION['nao_autenticado'] = true;
            header('Location: login.php');
            exit();
        }
     
    ?>  
       


