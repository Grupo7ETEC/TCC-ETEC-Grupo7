<?php
    include("cabecalho.php");
?>
    <style>
         #main {
            margin-left: 120px
        }

        .w3-row-padding img {
            margin-bottom: 12px
        }

        .w3-sidebar {
            width: 80px;
            background: #FFFFFF;
        }


        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }

        @media only screen and (max-width: 600px) {
            #main {
                margin-left: 0
            }
        }        

        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}
        
      </style>

</head>
<!-- Menu -->
<body class="w3-white">    
    <div class="w3-center">
        <nav class="w3-drodown-hover w3-center w3-mobile">
                    <img src="logos/logo.jpg" alt="Logo Amor de quatro patas." class="w3-image" width="10%">

                    <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-white w3-text-black">
                        <i class="fa fa-home w3-xlarge"></i>
                        <p>HOME</p>
                    </a>
                    <a href="formularioadocao.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-white w3-text-black">
                        <i class="fa fa-heart-o w3-xlarge"></i>
                        <p>Adote</p>
                    </a>
                    <a href="animais.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-white w3-text-black">
                        <i class="fa fa-paw w3-xlarge"></i>
                        <p>Animais</p>
                    </a>
                    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-white w3-text-black">
                        <i class="fa fa-comments-o w3-xlarge"></i>
                        <p>Contato</p>
                    </a>
                    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-white w3-text-black">
                        <i class="fa fa-money w3-xlarge"></i>
                        <p>Doe</p>
                    </a>
                    <a href="noticias.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-white w3-text-black">
                        <i class="	fa fa-newspaper-o	 w3-xlarge"></i>
                        <p>Notícias</p>
                    </a>
                    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-white w3-text-black">
                        <i class="	fa fa-thumbs-o-up w3-xlarge"></i>
                        <p>Parceiros</p>
                    </a>
                    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-white w3-text-black">
                        <i class="fa fa-user w3-xlarge"></i>
                        <p>Produtos</p>
                    </a> 
                    <a href="equipe.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-white w3-text-black">
                        <i class="fa fa-group w3-xlarge"></i>
                        <p>Equipe</p>
                    </a>
                    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-white w3-text-black">
                        <i class="	fa fa-question w3-xlarge"></i>
                        <p>Quem Somos</p>
                    </a> 
                    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-white w3-text-black">
                        <i class="fa fa-user w3-xlarge"></i>
                        <p>Seja Voluntário</p>
                    </a>                    
        </nav>
    </div> -->

    <!--Início do conteúdo-->
<body class="w3-white">
    <div class="row">
        <div class="col-md-12">
            <div id="caixas" class="w3-container w3-center">
                <div class="w3-content w3-display-container w3-center" style="width:60%">
                   <img class="mySlides w3-round-xxlarge w3-animate-right" src="logos/logoslide.jpeg" style="width:100%">
                    <img class="mySlides w3-round-xxlarge w3-animate-right" src="logos/logoslide2.jpeg" style="width:100%">
                    <img class="mySlides w3-round-xxlarge w3-animate-right" src="logos/logoslide3.jpeg" style="width:100%">
                    <div class="w3-center w3-display-bottommiddle" style="width:100%">
                      <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
                      <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
                      <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
                      <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
                      <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
                    </div>
                    <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) { myIndex = 1 }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, 2000); // Muda a cada 2 segundos.
                    }
                     </script>
                </div>               

                <!-- <img src="logos/logo.jpg" alt="Amor de quatro patas." class="w3-image" width="40%"> -->

                <div class="w3-padding-64 w3-content" id="mercado">
                    <h2> AMOR DE QUATRO PATAS</h2>
                    <hr style="width:200px" class="w3-opacity">
                    
                    <h4>Missão</h4>
                    <p>Nossa missão é transformar a sociedade através de ações preventivas, gerar um impacto positivo na proteção de cães e gatos e na conservação das espécies brasileiras.  
                        Combater a violência contra esses seres a partir da defesa dos seus direitos, e na elaboração de políticas públicas mais eficientes. Defender uma sociedade mais justa e ética, onde os animais sejam tratados com respeito, e possam coexistir com a espécie humana em um sistema equilibrado. 
                        Somos uma ONG que realiza trabalhos voluntários no cuidado aos animais abandonados e apoio aos abrigos.</p>
                    <h4>Valores</h4>
                    <p>
                        Coragem. <br>

                        Responsabilidade. <br>
                        
                        Sustentabilidade. <br>
                        
                        Impacto. <br>
                        
                        Segurança. <br>
                        
                        Informação. <br>
                        
                        Autenticidade.</p>
                    <h4>Nossa história</h4>
                    <p>Em atividade desde 2005, Amor de quatro patas Animal nasceu em um grupo de amigos que se uniram por amor e respeito aos animais. Juntas sonharam em criar um projeto para mudar a realidade dos animais rejeitados e abandonados do Brasil.</p>
                    <p>Já em 2006, sem fins lucrativos, esse sonho começou a se materializar com as mesmas ideais e amor incondicional, e iniciaram uma luta em prol da desafiadora e negligenciada causa, no dia 20/06/2006 nosso projeto já estava sendo finalizado e aí começamos nossa verdadeira luta. 
                    </p>
                    <p>Em 2008, se tornou a instituição que mais ajuda animais no país, que ampara mais de 579 abrigos cadastrados em nível nacional, que são auxiliados em um sistema de rodízio com ração, medicamentos, vacinas, atendimento veterinário, eventos de adoção e projetos de conscientização. Os parceiros da instituição auxiliam diretamente e mensalmente cerca de 10 mil animais. São dezesseis anos de trabalho, realizações e grandes conquistas. Em 2010 nossa ong circulam por todo o país e já atingiram mais de um milhão de pessoas, acreditamos que a união de forças entre primeiro, segundo e terceiro setores é o caminho para minimizar e até solucionar o problema em sua raiz. </p>
                    <h4>Em 16 anos</h4>
                    <p>
                        Mais de 5,8 milhão de quilos de ração distribuídos <br>

                        Mais de 155 mil vacinas <br>

                        Mais de 575 mil animais medicados <br>

                        Mais de 22 mil animais castrados <br>

                        Mais de 13 mil animais adotados <br>
                    </p>
                    <h4>Gestão</h4>
                    <p>
                        Presidente: Juliana Dos santos Paula <br> 

                        Vice-Presidente: Roberto Tadeu dos Santos <br>  

                        Diretora Executiva: Paulina Camila da Silva <br>  

                        Diretora Financeira: Rodolfo da silva Costa <br>
                    </p>
                </div>

            </div>
        </div>
    </div>
    
    <!--Outras informações -->
    <section>
        <h2>Contatos</h2>
        <ul>
            <li><i class="fa fa-phone fa-lg"></i> (11)0000-9098</li>
            <li><i class="fa fa-whatsapp fa-lg"></i>(11)9 0000-0000</li>
            <li><i class="fa fa-envelope fa-lg"></i>amor4patas.love@gmail.com</li>
        </ul>
    </section>-->
   
    <!--Slides-->
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
        showDivs(slideIndex += n);
        }
        
        function currentDiv(n) {
        showDivs(slideIndex = n);
        }
        
        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " w3-white";
        }
    </script>
        
</body>

<?php
    include("rodape.php");
?>
