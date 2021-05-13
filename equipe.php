<!DOCTYPE html>
<html lang="pt_br">
    <?php
    include("cabecalho.php");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="icones/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lato:400,300,700" rel="stylesheet" type="text.css">
    <link rel="stylesheet" href="estilos.css">

    <style>
        main img {
            float: left;
            margin: 30px 30px 30px 30px;
            padding: 10px;
            width: 30%;
            height: auto;
        }

        p,
        h2 {
            text-align: justify;
            font-size: 20px;
            margin: 30px;
        }

        main {
            background-color: white;
            margin: 30px;
        }
    </style>
</head>

<body>

    <div class="banner">
        <h2>Nossa Missão</h2>
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil vitae dolore
            nostrum atque accusamus ullam doloremque, quia possimus hic.
            Quas sapiente ad saepe quibusdam quo voluptatum, quam iste error provident?</h3>
    </div>
    <!--Conteúdo-->
    <main>

        <div class="w3-container w3-center">
            <h1 style="color: darkblue;"> Conheça nossa equipe</h1>
        </div>
        <img src="equipe/equipe.jpg" alt="Foto da Equipe">
        <p style="color:darkblue">Em que nós acreditamos</p>
        <p>Na Amor de 4 patas, o nosso sucesso é medido pelo amor em cuidar dos animais.</p>

        <p>Cras semper magna in velit tempus tristique quis non lorem. Mauris vitae fringilla sapien, sed volutpat elit.
            Fusce molestie euismod odio, ut blandit nulla bibendum ac. Fusce posuere turpis sed sem tincidunt, sed
            auctor tellus faucibus. Proin ultrices enim vitae ipsum luctus, sed malesuada orci ornare. Vivamus eget
            molestie magna, sed aliquam risus. Aliquam adipiscing laoreet felis, eget tincidunt purus sollicitudin sit
            amet. Nulla facilisi.</p>
        <p>Donec dapibus nibh eu ipsum elementum, non consectetur massa facilisis. Nam commodo at leo non commodo. In
            blandit arcu sit amet sem convallis, rutrum gravida quam elementum. Cras accumsan orci vel lectus blandit,
            at dictum tellus rhoncus. Etiam vitae urna nec leo facilisis auctor a quis lorem. Integer dolor urna, luctus
            quis consequat vitae, vestibulum non lectus. In turpis mi, tincidunt non iaculis ac, feugiat eget purus.
        </p>
        <hr>
        <img src="equipe/veterinarios.JPG" alt="veterinários">

        <h2 style="color:darkblue">Animais bem cuidados.<h2>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec tempus justo, nec sagittis enim.
                Vestibulum eget augue dui. Vestibulum consequat pretium lectus vitae varius. Etiam facilisis quam et
                nulla
                posuere feugiat. Quisque eu augue mi. </p>

                <p>Vivamus sagittis metus tortor, vitae vehicula mauris interdum id. Maecenas nulla velit, posuere in
                    pharetra
                    eu, lacinia non est. Nunc eleifend dignissim arcu et facilisis. Cras luctus scelerisque dapibus. Nam
                    sit
                    amet velit quis turpis rhoncus vestibulum. Phasellus feugiat sem sit amet eros laoreet, sit amet
                    interdum
                    sem tempor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                    egestas.
                    Pellentesque venenatis metus et porttitor interdum. Donec at leo sem. Sed nec ultricies nisi. </p>

                <hr>

                <img src="equipe/equipe1.JPG" alt="voluntários">
                <h2 style="color:darkblue">Somos gratos a todos os voluntários</h2>
                <p>Pellentesque porttitor mi venenatis, pharetra tellus vitae, egestas leo. Nullam euismod lorem vitae
                    nisi
                    cursus, ac fringilla dolor mattis. Mauris posuere, est a volutpat tempus, velit tellus consequat
                    risus,
                    feugiat condimentum neque erat vitae nibh. Pellentesque ac mauris libero.</p>
                <p>Cras eget orci pulvinar, vehicula sapien eu, volutpat lorem. Duis tristique vehicula libero nec
                    ornare. Proin
                    ultricies tempor lorem non facilisis. </p>
                <p>Pellentesque ac sem vel dui cursus sagittis. Cras non nulla nunc. Ut nulla orci, eleifend mollis
                    lorem ut,
                    congue mollis sapien. Vestibulum id fermentum mi, nec scelerisque velit. Sed sed lectus aliquam
                    augue
                    lobortis volutpat quis sit amet nisi. Proin ornare turpis congue nulla consectetur, sollicitudin
                    euismod
                    nisi vulputate. Cras tincidunt lacus eget risus posuere, pulvinar elementum turpis sollicitudin.
                    Proin
                    egestas blandit volutpat.</p>
                <hr>
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