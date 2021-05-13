<!DOCTYPE html>
<html lang="pt_br">
    <?php
    include("cabecalho.php");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="icones/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lato:400,300,700" rel="stylesheet" type="text.css">
    <link rel="stylesheet" href="estilos.css">
    <style>
        
        h2 {
            color: darkblue;
            margin-top: 2%;
            margin-left: 2%;
            text-align: center;
        }

        p {
            text-align: justify;
            font-size: 20px;
            margin: 30px;
        }

        .noticias {
            width: 95%;
            float: left;
            background-color: white;
            margin-left: 30px;
        }
        img {
            float: left;
            margin: 30px 30px 30px 30px;
            padding: 10px;
            width: 40%;
            height: auto;
        }
    </style>
</head>

<body>  
    <div class="banner">
        <h2>Equipe Operação Resgate</h2>
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil vitae dolore
            nostrum atque accusamus ullam doloremque, quia possimus hic.
            Quas sapiente ad saepe quibusdam quo voluptatum, quam iste error provident?</h3>
    </div>
    <!--Conteúdo-->
    <main>
        <article class="noticias">
            <h2>Operação Resgate</h2>
            <a href="animais.html"></a><img src="img/gatos/Dionisio.jpg"></a>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Corporis eum enim nostrum velit aperiam sit nesciunt! Nobis omnis recusandae fuga vel quis corporis
                eaque officia.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum voluptates nobis provident
                facilis quidem laudantium quasi ab eligendi nisi voluptatem nihil. Aliquam, consequatur voluptates?
                Autem dignissimos unde laboriosam aliquam?</p>
            <p> Nulla officiis veniam repellat veritatis.</p>
        </article>
        <article class="noticias">
            <h2>Situação de Abandono</h2>
            <a href="animais.html"><img src="img/cachorros/resgate1.jpg"></a>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Corporis eum enim nostrum velit aperiam sit nesciunt! Nobis omnis recusandae fuga vel quis corporis
                eaque officia.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora provident, ex modi deleniti praesentium,
                molestias corporis expedita non at error ullam! Necessitatibus cum ipsam iste quasi magni quia enim
                eaque?</p>
            <p>Nulla officiis veniam repellat veritatis.</p>

        </article>
        <article class="noticias">
            <h2>Resgate do Dudu</h2>

            <a href="#"><img src="img/cachorros/Dudu2.jpg"></a>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Corporis eum enim nostrum velit aperiam sit nesciunt! Nobis omnis recusandae fuga vel quis corporis
                eaque officia.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima consectetur quidem repellendus error illo alias quae reiciendis iure corrupti provident dolorem, consequatur mollitia iusto blanditiis aliquam culpa eius omnis rem.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, maiores cumque officia sit dolore blanditiis aspernatur perspiciatis eveniet doloribus provident tempora distinctio ducimus voluptate non, ad possimus reiciendis sequi nihil. Nulla officiis veniam repellat veritatis.</p>
        </article>
    </main>
    <!--Outras informações-->
    <section>
        <h3>Contatos</h3>
        <ul>
            <li><i class="fa fa-phone fa-lg "></i> (11)0000-9098</li>
            <li><i class="fa fa-whatsapp fa-lg"></i>(11)9 0000-0000</li>
            <li><i class="fa fa-envelope fa-lg"></i>amor4patas.love@gmail.com</li>
        </ul>
    </section>
    <!--Rodapé-->
    <?php
    include("rodape.php");
?>
</body>

</html>