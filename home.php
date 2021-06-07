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
        h6,
        p {
            font-family: 'Montserrat Alternates', sans-serif;
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

    <!--Início do conteúdo-->
    <body class="bg">
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

                <div class="w3-padding-16 w3-content w3-margin-top" id="home">
                    <h1 class="w3-padding" style="font-weight: bold; font-family: 'Montserrat Alternates', sans-serif;"> Casa de Adoção Amor de 4 Patas</h1>
                    <h2 style="font-weight: bold; font-family: 'Montserrat Alternates', sans-serif;"> Quem somos?</h2>
                </div>

                <div class="w3-container w3-center"> 
                    <div class="banner w3-center w3-round-xlarge" style="margin:auto;width:90%">
                        <h2 style="font-weight:bold">Nossa história</h2>
                        <h3>Em 2020, um grupo de amigos decidiu fundar a Casa de Adoção Amor de 4 Patas, com o sonho de mudar a realidade de milhares de animais que não possuem famílias ou encontram-se em situações precárias de vida.
                        Ao longo de sua existência, o projeto já realizou a doação responsável de mais de 500 cães e gatos, realizou eventos de conscientização sobre a tutoria responsável, participou de campanhas de castração em comunidades vulneráveis e promoveu feiras de adoção.</h3>
                    </div>     
                    
                    <div class="w3-container w3-row" style="margin:auto; width:93%">
                        <div class="w3-half w3-container bannerazul w3-round-xlarge" style="width:80%; margin-top: 1.5%">
                            <h2 style="font-weight:bold">Nossa Missão</h2>
                            <h3>Nossa missão é promover a adoção responsável de cães e gatos, garantindo que tenham lares seguros e recebam cuidados adequados de alimentação, saúde e bem-estar. Assim, contribuímos para a redução do número de animais abandonados e vítimas de maus-tratos em nosso país, bem como conscientizamos a sociedade sobre a importância da tutoria responsável.</h3>
                        </div>
                        
                        <div class="w3-half banner w3-center w3-round-xlarge" style="width:17%; margin-left:1.1%; margin-top: 1.5%; padding: 1% 1%;">
                            <h2 style="font-weight:bold">Valores</h2>
                            <h3><p>
                            Responsabilidade. <br>                        
                            Sustentabilidade. <br>                        
                            Impacto. <br>                        
                            Segurança. <br>                       
                            Informação. <br>                        
                        </div>
                    </div>
                    
                    <div class="w3-row w3-container w3-margin-top" style="width:91%; margin:auto">
                        <div class="w3-third">
                            <img src="img/home/gatocolo.jpg" style="width:100%">
                        </div>

                        <div class="w3-third">
                            <img src="img/home/catdog.jpg" style="width:100%">
                        </div>

                        <div class="w3-third">
                            <img src="img/home/caramelo.jpg" style="width:100%">
                        </div>
                    </div>
                                        
                </div>

            </div>
            
        </div>
    </div>
    
    <!--Outras informações
    <section>
        <h2>Contatos</h2>
        <ul>
            <li><i class="fa fa-phone fa-lg"></i> (11)0000-9098</li>
            <li><i class="fa fa-whatsapp fa-lg"></i>(11)9 0000-0000</li>
            <li><i class="fa fa-envelope fa-lg"></i>amor4patas.love@gmail.com</li>
        </ul>
    </section>-->
    
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
  





