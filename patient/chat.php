<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,user-scalable=0"/>
    <link rel="stylesheet" type="text/css" href="css/template-chat.css"/> <!--Meu template-->
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/> <!--Normalize css-->  
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet"/> <!--Fontes-->
    <link rel="icon" type="image/png" sizes="192x192" href="images/icons/icon-192x192.png"/> <!--ICON-->
    <link rel="icon" type="image/png" sizes="72x72" href="images/icons/icon-72x72.png"/> <!--ICON-->
    <link rel="icon" type="image/png" sizes="96x96" href="images/icons/icon-96x96.png"/> <!--ICON-->
    <title>Atitude</title> <!--Titulo-->
</head>
<body>
<!--==================================HEADER==================================-->
    <header>
        <div class="container">
            <div class="logo">
                <a href="../index.html">
                    <img src="images/logo.png">
                </a>
            </div>
            <div class="menu">
                <nav>
                    <div class="menuMobile"><!--Menu mobile-->
                        <div class="mm-line"></div><!--Linha 1-->
                        <div class="mm-line"></div><!--Linha 2-->
                        <div class="mm-line"></div><!--Linha 3-->
                    </div>
                    <ul>
                        <li class="active"><a href="../index.html">Inicio</a></li>
                        <li><a href="../index.html">Meu perfil</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<!--==================================CHAT==================================-->
    <section id="chat">
        <div class="container">
            <div class="chat-left column">
                <div class="chat-left-top">Em atendimento...</div>
                <div class="chat-left-body">
                    <div class="chat-left-body-person active-chat">
                        <div class="chat-left-body-person-picture"></div>
                        <div class="chat-left-body-person-name">Gabriel de Jesus</div>
                    </div>
                </div>
            </div>
            <div class="chat-right">
                <div class="chat-right-top">
                    <div class="chat-right-top-title">Caio freitas</div>
                    <div class="chat-right-top-tag">Cardiologia</div>
                </div>
                <div class="chat-right-body">
                    <div class="container-chat">
                        
                    </div>
                    <input type="text" placeholder="Escreva aqui...">
                    <button>Enviar</button>
                </div>
            </div>
        </div>
    </section>
<!--==================================FOOTER==================================-->
    <footer>
        <div class="container column">
            <div class="footer-area">
                
                <div class="fm-1 column">
                    <div class="footer-title">Sobre nós</div>
                    <div class="footer-title-bar"></div>
                    <div class="footer-text">O Atitude vai facilitar o contato entre o médico e o paciente, através de triagens e atendimento virtual.
                    </div>
                    <div class="footer-social">
                        <a href="#" target="_blank"><img src="images/facebook.png"></a>
                        <a href="#" target="_blank"><img src="images/twitter.png"></a>
                        <a href="#" target="_blank"><img src="images/google-plus.png"></a>
                        <a href="#" target="_blank"><img src="images/instagram.png"></a>
                    </div>
                </div>

                <div class="fm-2 column">
                    <div class="footer-title">Contate-nos</div>
                    <div class="footer-title-bar"></div>
                    <div class="footer-thumbnail"><img src="images/support.png"></div>
                    <div class="footer-text">
                        Para mais informações, dúvidas, críticas ou elogios, entre em contato conosco 
                        através dos nossos canais de atendimento e redes sociais
                    </div>
                    <div class="footer-text">
                        atendimento@atitude.com.br
                    </div>
                </div>
                <div class="fm-3 column">
                    <div class="footer-title">Notícias</div>
                    <div class="footer-title-bar"></div>
                    <div class="footer-text">Fique atualizado com as nossas últimas notícias.</div>
                    <div class="footer-input">
                        <input type="email" placeholder="Seu email" maxlength="27">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<!--=====================================================SCRIPT PARA O MENU MOBILE=====================================================-->
<script type="text/javascript">
    window.onload = function() {
        document.querySelector(".menuMobile").addEventListener("click", function() {
            if(document.querySelector(".menu nav ul").style.display == 'flex') {
                document.querySelector(".menu nav ul").style.display = 'none';
            } else {
                document.querySelector(".menu nav ul").style.display = 'flex';
            }
        });
    };
    </script>
</html>