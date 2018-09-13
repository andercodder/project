

<?php
/*using php to send email validation*/
include_once 'send-email/email.php';
?>


<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600|Playfair+Display|Fjalla+One" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>Andre's Portfolio</title>
</head>

<body>
        <div class="container">
                <header class="header" id="top">
                        <nav>
                                <ul class="main-nav">
                                        <li class="main-nav__logo">
                                                <a href="#" class="">
                                                        <img src="img/my_image_pass.jpg" class="main-nav__logo-image"
                                                                alt="logotipo"> </a>
                                                <p class="main-nav__logo-text"></p>
                                        </li>
                                        <li>
                                                <a href="#contacta-me" class="main-nav__link">
                                                        Contacta-me
                                                        <svg class="main-nav__icon">
                                                                <use xlink:href="icon/sprite.svg#icon-envelope"></use>
                                                        </svg>

                                                </a>
                                        </li>
                                        <!--     <li>
                                                <a href="#" class="main-nav__link">
                                                        cv
                                                        <svg class="main-nav__icon">
                                                                <use xlink:href="icon/sprite.svg#icon-search"></use>
                                                        </svg>
                                                </a>
                                        </li> -->
                                </ul>

                        </nav>
                        <div class="hero-text__box">
                                <p>Olá, Bem Vindo</p>

                                <div id="typed-strings">
                                        <h1>Sou o André</h1>
                                        <h1>Web Designer & Developer</h1>
                                        <h1>O teu site, Eu Faço</h1>
                                        <h1>944783640
                                                <br> 994783640</h1>
                                </div>
                                <span id="typed"></span>
                                <div class="social-media">
                                        <div>
                                                <a href="#" class="social-media__link">
                                                        <svg class="social-media__icon">
                                                                <use xlink:href="icon/sprite.svg#icon-whatsapp"></use>
                                                        </svg>
                                                </a>
                                        </div>

                                        <div>
                                                <a href="#" class="social-media__link">
                                                        <svg class="social-media__icon">
                                                                <use xlink:href="icon/sprite.svg#icon-googleplus"></use>
                                                        </svg>
                                                </a>
                                        </div>
                                        <div>
                                                <a href="#" class="social-media__link">
                                                        <svg class="social-media__icon">
                                                                <use xlink:href="icon/sprite.svg#icon-linkedin"></use>
                                                        </svg>
                                                </a>
                                        </div>
                                        <div>
                                                <a href="#" class="social-media__link">
                                                        <svg class="social-media__icon">
                                                                <use xlink:href="icon/sprite.svg#icon-twitter"></use>
                                                        </svg>
                                                </a>
                                        </div>
                                </div>

                        </div>
                </header>

                <main class="main">
                        <div class="main-about js--main-about">
                                <div class="main-about__box">
                                        <img src="img/my_image_body.jpg" class="main-about__image" alt="André de Carvalho">

                                </div>

                                <div class="main-about__box">
                                        <h1>Sobre Mi</h1>
                                        <p class="main-about__description">Olá, Eu sou o André Vemba um programador
                                                web, formado em Informatica que sempre foi
                                                a minha grande paixão por todos esses anos. Tenho a intenção de cada
                                                vez
                                                mais adquirir conhecimento nessa area também aprimorar minhas
                                                Habilidades
                                                na guitarra e aprender uma nova lingua.</p>


                                        <p class="main-about__description">Actualmente Trabalho como Helpdesk e
                                                programador Web pelas Organizações Chanas. Minha
                                                maior habilidade é a capacidade de aprender coisas novas muito rapido.
                                                No
                                                meu Trabalho dou o melhor de mim tento sempre executar com
                                                professionalismo
                                                e amor.</p>

                                </div>


                        </div>

                        <div class="main-skill">
                                <li class="main-skill__list">
                                        <svg class="main-skill__list-icon">
                                                <use xlink:href="icon/sprite.svg#icon-html-five2"></use>

                                        </svg>
                                        <div class="main-skill__list-description">
                                                <h3 class="main-skill__list-heading">Html</h3>
                                                <p class="main-skill__list-text"> Essencial Para a marcação do teu
                                                        Website
                                                        <a href="#" class="main-skill__list-link">certificado</a>
                                                </p>
                                        </div>

                                </li>

                                <li class="main-skill__list">
                                        <svg class="main-skill__list-icon">
                                                <use xlink:href="icon/sprite.svg#icon-css3"></use>

                                        </svg>
                                        <div class="main-skill__list-description">
                                                <h3 class="main-skill__list-heading">css3</h3>
                                                <p class="main-skill__list-text">Faz o teu Web site ficar lindo &
                                                        Espectacular
                                                        <a href="#" class="main-skill__list-link">certificado</a>
                                                </p>
                                        </div>

                                </li>

                                <li class="main-skill__list">
                                        <svg class="main-skill__list-icon">
                                                <use xlink:href="icon/sprite.svg#icon-gears"></use>

                                        </svg>
                                        <div class="main-skill__list-description">
                                                <h3 class="main-skill__list-heading">js</h3>
                                                <p class="main-skill__list-text">Torna o teu site em uma WebApp com
                                                        funcionalidades
                                                        <a href="#" class="main-skill__list-link">certificado</a>
                                                </p>
                                        </div>

                                </li>

                                <li class="main-skill__list">
                                        <svg class="main-skill__list-icon">
                                                <use xlink:href="icon/sprite.svg#icon-presentation"></use>

                                        </svg>
                                        <div class="main-skill__list-description">
                                                <h3 class="main-skill__list-heading">php</h3>
                                                <p class="main-skill__list-text">Faz o teu site ficar dinamico,
                                                        poderoso e cria Blogs
                                                        <a href="#" class="main-skill__list-text__link">certificado</a>
                                                </p>
                                        </div>

                                </li>


                        </div>

                        <div class="project">
                                <h1 class="project-heading">Projectos</h1>
                                <p class="project-text">Veja os meus melhores Projectos já criados para mim e algumas
                                        em empresas</p>


                                <div class="project-box">
                                        <img src="img/outdoors.png" alt="Imagem do Projecto" class="project-box__image">



                                        <img src="img/trillo.png" alt="Imagem do Projecto" class="project-box__image">




                                        <img src="img/nexter.png" alt="Imagem do Projecto" class="project-box__image">


                                </div>
                        </div>

                </main>

                <div class="info" id="contacta-me">
                        <h1 class="info-heading">Contacta-me</h1>
                        <p class="info-text">Veja os meus melhores Projectos ja criados para mim e algumas em empresas</p>
                        <div class="info-box">
                                <li class="info-list">
                                        <div class="info-list-box-icon">
                                                <svg class="info-list-icon">
                                                        <use xlink:href="icon/sprite.svg#icon-global"></use>

                                                </svg>
                                        </div>
                                        <div class="info-list-description">
                                                <p class="info-list-text">Luanda / Angola </hp>
                                                        <p class="info-list-text"> Bº Martíres do Kifangondo </p>
                                        </div>

                                </li>

                                <li class="info-list">
                                        <div class="info-list-box-icon">
                                                <svg class="info-list-icon info-list-icon-center">
                                                        <use xlink:href="icon/sprite.svg#icon-phone"></use>

                                                </svg>
                                        </div>

                                        <div class="info-list-description">
                                                <p class="info-list-text">944783640</p>
                                                <p class="info-list-text">994783640 </p>
                                        </div>

                                </li>

                                <li class="info-list">
                                        <div class="info-list-box-icon">
                                                <svg class="info-list-icon">
                                                        <use xlink:href="icon/sprite.svg#icon-envelope"></use>

                                                </svg>

                                        </div>
                                        <div class="info-list-description">
                                                <p class="info-list-text">geral@andrevemba.com</p>
                                                <p class="info-list-text"> andrevmc1000@hotmail.com</p>
                                        </div>

                                </li>
                                <li class="info-list">
                                        <div class="info-list-box-icon">
                                                <svg class="info-list-icon">
                                                        <use xlink:href="icon/sprite.svg#icon-search"></use>

                                                </svg>
                                        </div>
                                        <div class="info-list-description">
                                                <p class="info-list-text">segunda-sexta</p>
                                                <p class="info-list-text">sabado-domingo</p>
                                        </div>

                                </li>

                        </div>


                </div>
                <section class="section-book">
                        <div class="book__form">

                                <div class="sendSms">
                                        <?php echo $smsErro.$smsSucesso;?>
                                </div>
                                <div>
                                <form action="#" class="form" method="post">
                                        <div class="form__group">
                                                <input type="text" name="nome" class="form__input" placeholder="Nome" id="name"
                                                        required>
                                                <label for="name" class="form__label">Nome</label>
                                        </div>
                                        <div class="form__group">
                                                <input type="email" name="email" class="form__input" placeholder="Email" id="email"
                                                        required>
                                                <label for="email" class="form__label">Email</label>
                                        </div>

                                        <div class="form__group">
                                                <input type="number" name="telefone" class="form__input" placeholder="Telefone" id="telefone"
                                                        required>
                                                <label for="telefone" class="form__label">Telefone</label>
                                        </div>

                                        <div class="form__group">
                                                <textarea placeholder="Mensagem" name="mensagem" class="form__input" name="message" id="message"></textarea>
                                        </div>

                                        <div class="form__group">
                                                <a href="#" class="btn btn-default"><button type="submit">ENVIAR &rarr;</button></a>
                                        </div>
                                </div>
                                </form>
                        </div>
                </section>

                <footer class="footer">
                        <div class="social-media">

                                <div>
                                        <a href="#" class="social-media__link">
                                                 <svg class="social-media__icon">
                                                        <use xlink:href="icon/sprite.svg#icon-whatsapp"></use>
                                                </svg> 
                                                
                                        </a>
                                </div>

                                <div>
                                        <a href="#" class="social-media__link">
                                                <svg class="social-media__icon">
                                                        <use xlink:href="icon/sprite.svg#icon-googleplus"></use>
                                                </svg>
                                               

                                        </a>
                                      
                                </div>
                                <div>
                                        <a href="#" class="social-media__link">
                                                   <svg class="social-media__icon">
                                                        <use xlink:href="icon/sprite.svg#icon-linkedin"></use>
                                                </svg>
                                               
                                        </a>
                                </div>
                                <div>
                                        <a href="#" class="social-media__link">
                                                 <svg class="social-media__icon">
                                                        <use xlink:href="icon/sprite.svg#icon-twitter"></use>
                                                </svg>
                                               
                                        </a>


                                </div>

                        </div>
                        <div class="footer-copyright">
                                <div class="footer-text">
                                        <p>André de Carvalho</p>
                                        <p>&copy;Todos os Direitos Reservados 2018</p>
                                </div>
                                <div class="top">
                                        <a href="#top" class="btn btn-top top-link">
                                                
                                                <svg class="top-icon">
                                                    <use xlink:href="icon/sprite.svg#icon-chevron-thin-up"></use>
                                                </svg>
                                         </a>

                                </div>



                        </div>


                </footer>
        </div>



</body>
<script src="js/typed/typed.js"></script>
<script src="js/smoothScrool.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.waypoints.min.js"></script>

<script>
        var typed = new Typed('#typed', {
                stringsElement: '#typed-strings',
                typeSpeed: 80,
                backSpeed: 50,
                //loop: true
        });
</script>

</html>