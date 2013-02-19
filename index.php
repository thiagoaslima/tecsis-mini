<?php 
    $l = isset($_GET["lang"]) ? $_GET["lang"] : "pt";

    switch ($l) {
         case 'en':
            $lang = "en";
            $body = file_get_contents("en.html");
            break;

        case 'es':
            $lang = "es";
            $body = file_get_contents("es.html");
            break;

        default:
            $lang = "pt-br";
            $body = file_get_contents("pt.html");
            break;
    }
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="<?php echo $lang; ?>" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="<?php echo $lang; ?>" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="<?php echo $lang; ?>" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php echo $lang; ?>" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tecsis Tecnologia e Sistemas Avançados</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
         <link rel="author" href="humans.txt" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main2.css">
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>

            <div class="wrapper">
                <div class="logo">
                    <img src="/i/tecsis.jpg" alt="Logo Tecsis">
                    <h1>Tecsis Tecnologia e Sistemas Avançados</h1>
                </div>

                <nav>
                    <ul>
                        <?php 
                            if ($lang == 'en') {
                            ?>
                                <li><a href="#localizacao">Address</a></li>
                                <li><a href="#contato">Contact</a></li>
                            <?php
                            } else if ($lang == 'es') {
                            ?>
                                <li><a href="#localizacao">Dirección</a></li>
                                <li><a href="#contato">Contacto</a></li>
                            <?php
                            } else if ($lang == 'pt-br') {
                            ?>
                                <li><a href="#localizacao">Endereços</a></li>
                                <li><a href="#contato">Contato</a></li>
                            <?php
                            }
                            ?>
                        <li class="langs"><a href="/pt/">PT</a><span>|</span><a href="/en/"><span>EN</span></a><span>|</span><a href="/es/"><span>ES</span></a></li>
                    </ul>
                </nav>
            </div>

        </header>

        <div id="main">
            <div id="fotos" class="carrossel" data-loop="true" data-speed="1500" data-delay="3500">
                 <div class="mask"><!-- 
                    --><img src="/i/i1.jpg" alt=""><!-- 
                    --><img src="/i/i2.jpg" alt=""><!-- 
                    --><img src="/i/i3.jpg" alt=""><!-- 
                    --><img src="/i/i4.jpg" alt=""><!-- 
                    --><img src="/i/i5.jpg" alt=""><!-- 
                 --></div><!-- 
         --></div>

        <?php echo $body; ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <!-- 
        <script src="/js/main-min.js"></script>

 -->        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            // var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            // (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            // g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            // s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>