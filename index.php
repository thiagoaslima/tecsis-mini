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
?><!DOCTYPE HTML>
<html lang="<?php echo $lang; ?>">
<head>
<meta charset="utf-8">
<title>Tecsis Teconologia e Sistemas Avançados</title>
<meta name="description" content="Tecsis is a leading maker of custom wind turbine blades and ventilation equipment">
<meta name="viewport" content="width=device-width">
<link rel="author" href="humans.txt">
<link href="/css/base.css" rel="stylesheet" type="text/css" media="screen">
<link href="/css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet'>

<script type="text/javascript" src="/js/modernizr.custom.49113.js"></script>
</head>

<body>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<header>
    <figure class="inline">
        <img id="logo" class="inline" src="/i/tecsis.jpg" alt="logo" />
        <figcaption>
            <hgroup class="inline">
                <h1>Tecsis</h1>
                <h2>Tecnologia e Sistemas Avançados</h2>
            </hgroup>
        </figcaption>
    </figure>

    <nav class="inline">
        <ul class="inline">
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
            <li id="idiomas" class="last"><ul class="inline">
                <li><a href="/pt/"><figure><img src="/i/br.png" alt="Português Brasileiro" /><figcaption>PT</figcaption></figure></a></li>
                <li><a href="/en/"><figure><img src="/i/us.png" alt="English" /><figcaption>EN</figcaption></figure></a></li>
                <li><a href="/es/"><figure><img src="/i/es.png" alt="Español" /><figcaption>ES</figcaption></figure></a></li>
            </ul></li>
        </ul></nav>

    <div id="main">
        <section id="fotos">
            <div class="mask"><img src="/i/i1.jpg" /><img src="/i/i2.jpg" /><img src="/i/i3.jpg" /><img src="/i/i4.jpg" /><img src="/i/i5.jpg" /><img src="/i/i1.jpg" /></div>
        </section>

        <?php echo $body; ?>

        <div id="localizacao">

                <h3>Tecsis Tecnologia e Sistemas Avançados</h3>

                <div id="hcard-Tecsis-Planta-1" class="vcard">
                    <h4 class="fn">Planta 1</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">rua Moacyr Ozeas Guitti, 36 <br> Zona Industrial</span><span>,</span> 
                        <span class="locality">Sorocaba</span><span>,</span> 
                        <span class="region">SP</span><br>
                        <span class="postal-code">18086-390</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>

                <div id="hcard-Tecsis-Planta-3" class="vcard">
                    <h4 class="fn">Planta 3</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">rua Anuar Dequech, 215, Lote C/D-2 <br>Iporanga I</span><span>,</span> 
                        <span class="locality">Sorocaba</span><span>,</span>  
                        <span class="region">SP</span><br>
                        <span class="postal-code">18087-157</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>

                <div id="hcard-Tecsis-Planta-7" class="vcard">
                    <h4 class="fn">Planta 7</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">av. Jerome Case, 3000 <br> Éden</span><span>,</span> 
                        <span class="locality">Sorocaba</span><span>,</span> 
                        <span class="region">SP</span><br>
                        <span class="postal-code">18087-200</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>

                <div id="hcard-Tecsis-Planta-8" class="vcard">
                    <h4 class="fn">Planta 8</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">av. Hollingsworth, 215 <br> Éden</span><span>,</span> 
                        <span class="locality">Sorocaba</span><span>,</span> 
                        <span class="region">SP</span><br>
                        <span class="postal-code">18087-105</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>

                <div id="hcard-Tecsis-Planta-9" class="vcard">
                    <h4 class="fn">Planta 9</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">av. Jerome Case, 2400 <br> Éden</span><span>,</span> 
                        <span class="locality">Sorocaba</span><span>,</span> 
                        <span class="region">SP</span><br>
                        <span class="postal-code">18087-220</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>

                <div id="hcard-Tecsis-Planta-10" class="vcard">
                    <h4 class="fn">Planta 10</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">rod. Raposo Tavares, s/nº, km 105 + 240m Itanguá</span><span>,</span> 
                        <span class="locality">Sorocaba</span><span>,</span>
                        <span class="region">SP</span><br>
                        <span class="postal-code">18203-340</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>

                <div id="hcard-Tecsis-Planta-11" class="vcard">
                    <h4 class="fn">Planta 11</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">av. Três de Março, 6510 <br> Aparecidinha</span><span>,</span>
                        <span class="locality">Sorocaba</span><span>,</span>  
                        <span class="region">SP</span><br>
                        <span class="postal-code">18087-275</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>

                <div id="hcard-Tecsis-Planta-12" class="vcard">
                    <h4 class="fn">Planta 12</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">av. John Boyd Dunlop, 265 <br> Iporanga</span><span>,</span> 
                        <span class="locality">Sorocaba</span><span>,</span> 
                        <span class="region">SP</span><br>
                        <span class="postal-code">18087-155</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>

                <div id="hcard-Tecsis-Planta-13" class="vcard">
                    <h4 class="fn">Planta 13</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">rodovia Waldomiro Correa Camargo, s/nº, km 60.5, Pirapitingui</span><span>,</span> 
                        <span class="locality">Itu</span><span>,</span> 
                        <span class="region">SP</span><br>
                        <span class="postal-code">13308-200</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>

                <div id="hcard-Tecsis-Planta-CDM" class="vcard">
                    <h4 class="fn">Planta CDM</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">rua Seike Murakami, 211 <br> Aparecidinha</span><span>,</span> 
                        <span class="locality">Sorocaba</span><span>,</span> 
                        <span class="region">SP</span><br>
                        <span class="postal-code">18087-275</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>

                <div id="hcard-Tecsis-Planta-14" class="vcard">
                    <h4 class="fn">Planta 14</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">av. Hollingsworth, 1046 <br> Iporanga</span><span>,</span> 
                        <span class="locality">Sorocaba</span><span>,</span>
                        <span class="region">SP</span><br>
                        <span class="postal-code">18087-105</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>

                <div id="hcard-Tecsis-Planta-15" class="vcard">
                    <h4 class="fn">Planta 15</h4>
                    <span class="org">Tecsis</span>
                    <address class="adr">
                        <span class="street-address">av. Victor Andrew, 1250 <br> Zona Industrial</span><span>,</span> 
                        <span class="locality">Sorocaba</span><span>,</span>
                        <span class="region">SP</span><br>
                        <span class="postal-code">18086-390</span>
                        <span class="country-name">Brasil</span>
                    </address>
                </div>
                
                <br style="clear:both" />


        </div>
        
        <br style="clear:both" />
    </div>

</footer>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/main.0.1.js"></script>
 
</body>
</html>