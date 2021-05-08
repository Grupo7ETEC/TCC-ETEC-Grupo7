<!DOCTYPE html>
<html lang="pt_br">
    <?php
    include("cabecalho.php");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado.</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:400,300,700" rel="stylesheet" type="text.css">
    <link rel="shortcut icon" href="icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
    <style>
        main {
            background-color: white;
            margin: 30px;
        }

        h1 {
            text-align: center;
            color: darkblue;
        }

        p {
            font-size: 20px;
            text-align: justify;
        }

        main ul li {
            list-style-type: none;
            list-style-image: url(icones/ossinho.png);
            list-style-position: inside;
            margin: 30px;
        }
    </style>
</head>

<body>
    <div class="banner">
        <h1>Obrigado!</h1>
        <h2>Seu formulário foi enviado.</h2>
        <p>Nossa equipe entrará em contato.</p>
    </div>
    <!--Conteúdo-->
    <main>
        <h1>Aproveite para ler nossas dicas de cuidados</h1>
        <ul class=" w3-ul w3-hoverable">
            <li>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quisquam id exercitationem,
                    recusandae velit fuga reprehenderit at maiores aut culpa. Delectus perspiciatis dolorem accusantium
                    ipsam doloremque omnis. Amet, iste nesciunt.</p>
            </li>
            <li>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta architecto minus consequatur inventore
                    autem, quia rem amet placeat recusandae unde voluptate nisi iusto quisquam, beatae repudiandae
                    quaerat necessitatibus deleniti accusantium.</p>
            </li>
            <li>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni quisquam eaque aliquam vel a ipsam
                    quos quam repudiandae maiores quas obcaecati, facere reprehenderit repellendus? Delectus sed error
                    ab quia pariatur?</p>
            </li>
            <li>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At modi reprehenderit accusamus? Doloribus
                    quod ut dolores debitis reiciendis aut dolorem tempora fugit reprehenderit illum? Enim debitis
                    magnam vero fuga. Illum.</p>
            </li>
        </ul>
    </main>
    <section>
        <h2>Contatos</h2>
        <ul>
            <li><i class="fa fa-phone fa-lg"></i> (11)0000-9098</li>
            <li><i class="fa fa-whatsapp fa-lg"></i>(11)9 0000-0000</li>
            <li><i class="fa fa-envelope fa-lg"></i>amor4patas.love@gmail.com</li>
        </ul>
    </section>
    <!--RODAPÉ-->
    <footer class="rodape">
        <div class="social-icons">
            <a href="#" class="btn-facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn-youtube"><i class="fa fa-youtube"></i></a>
            <a href="#" class="btn-instagram"><i class="fa fa-instagram"></i></a>
        </div>
        <p class="copyright">
            Copyright &#0169 &#x2764;&#128062;&#128062; 2021.
        </p>
        <?php
        include("rodape.php");
    ?>

</body>

</html>
