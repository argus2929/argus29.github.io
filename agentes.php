<!DOCTYPE html>
<html lang="en" style="overflow-y: auto;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agentes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--NAVBAR-->
    <header class="navbar-normal">
        <img src="img/logo.png" alt="Logo" class="navbar-logo" id="logo">
        <div class="flexRow">
            <a href="clientes.php#btnBajar" class="navbar-text">Quiénes somos</a>
            <a href="experienciagc.php" class="navbar-text" id="headerExpGC">Experiencia GC</a>
            <a href="dancaceres.php" class="navbar-text" id="headerMentor">El Mentor de los Seguros</a>
        </div>
        <a href="clientes.php#cotizar" class="navbar-text">Contáctanos</a>
    </header>
    
    <!--NAVBAR COMPACT-->
    <header class="navbar-compact">
        <img src="img/logo.png" alt="Logo" class="navbar-logo" id="logo">
        <img src="img/x.png" alt="" style="display: none;" class="btnBurger" id="btnBurgerClose">
        <img src="img/btnburger.png" alt="" class="btnBurger burgerExpandido" id="btnBurgerExpand">
    </header>
    <div class="navbarOpciones" id="navbar-opciones" style="display: none;">
        <a href="clientes.php#btnBajar" class="navbar-text-compact">Quiénes somos</a>
        <a href="experienciagc.php" class="navbar-text-compact">Experiencia GC</a>
        <a href="dancaceres.php" class="navbar-text-compact" id="headerMentor">El Mentor de los Seguros</a>
    </div>



    <!--CONTENIDO-->
    <div class="container-productos" style="display: inline;">

        <!--BANNER-->
        <div class="container-banner-agentes">
            <div></div>
            <div class="btnBajar" id="btnBajar">⬇</div>
            <div class="contenido-banner-agentes">
                <div style="width: 50%;">
                    <div></div>
                </div>
                <div class="flexColumn" style="width: 50%;">
                    <h1 class="gb txtAgentes">Formamos y desarrollamos
                        los mejores Agentes de Seguros</h1>
                    <h2 class="gr subTxtAgentes">Contáctanos al 669 271
                        4990 o envíanos tus datos a través del botón de WhatsApp.</h2>
                    <button class="gr btnAzul" id="btnAgendarCita">Agendar cita</button>
                </div>
            </div>
        </div>

        <!--¿POR QUÉ EN GRUPO CÁCERES?-->
        <div class="container-agentes-pqgc centradoFlex">
            <div class="contenido-pqgc flexColumn">
                <h2 class="gb">¿Por qué iniciar tu carrera<br>como agente en Grupo Cáceres?</h2>
                <div class="fila-pqgc flexRow">
                    <div class="razonpqgc flexColumn">
                        <img src="img/calidadvida.png" alt="Calidad de vida" class="imgAgenteRazon">
                        <h3>Mejoramos tu calidad de vida</h3>
                    </div>
                    <div class="razonpqgc flexColumn">
                        <img src="img/viajes.png" alt="viajes" class="imgAgenteRazon">
                        <h3>Viajes</h3>
                    </div>
                    <div class="razonpqgc flexColumn">
                        <img src="img/ingresos.png" alt="ingresos" class="imgAgenteRazon">
                        <h3>Excelentes ingresos</h3>
                    </div>
                </div>
                <div class="fila-pqgc flexRow">
                    <div class="razonpqgc flexColumn">
                        <img src="img/agente.png" alt="agente" class="imgAgenteRazon">
                        <h3 id="teanimas">Crece como agente de seguros</h3>
                    </div>
                    <div class="razonpqgc flexColumn">
                        <img src="img/vida.png" alt="vida" class="imgAgenteRazon">
                        <h3>Mercado de vida</h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="divider1">
            <img src="img/divider1.png" alt="" style="width: 100%;">
        </div>
        <!--¿TE ANIMAS?-->
        <div class="container-agentes-teanimas centradoFlex">
            <div class="contenido-teanimas flexColumn">
                <h2 class="gb">¿Te animas?</h2>
                <div class="linea-teanimas flexRow">

                    <div class="rectangulo" id="rectangulo"></div>
                    <div class="rectanguloFondo"></div>

                    <div class="linea-objeto flexColumn">
                        <div class="centradoFlex" style="height: 50%;">
                            <div class="circulo-teanimas centradoFlex" id="circulo1">
                                <img src="img/iconowhats.png" alt="" class="icono-teanimas">
                            </div>
                        </div>
                        <div class="centradoFlex" style="height: 50%; justify-content: flex-start;">
                            <h3 id="txt-teanimas1">Envíanos un WhatsApp</h3>
                        </div>
                    </div>


                    <div class="linea-objeto flexColumn">
                        <div class="centradoFlex" style="height: 50%;">
                            <div class="circulo-teanimas centradoFlex" id="circulo2">
                                <img src="img/agenteicon.png" alt="" class="icono-teanimas">
                            </div>
                        </div>
                        <div class="centradoFlex" style="height: 50%; justify-content: flex-start;">
                            <h3 id="txt-teanimas2">Platicaremos y descubriremos juntos si esta profesión es para ti</h3>
                        </div>
                    </div>


                    <div class="linea-objeto flexColumn">
                        <div class="centradoFlex" style="height: 50%;">
                            <div class="circulo-teanimas centradoFlex" id="circulo3">
                                <img src="img/maletin.png" alt="" class="icono-teanimas">
                            </div>
                        </div>
                        <div class="centradoFlex" style="height: 50%; justify-content: flex-start;">
                            <h3 id="txt-teanimas3">Trabajamos en tu plan de carrera</h3>
                        </div>
                    </div>


                    <div class="linea-objeto flexColumn">
                        <div class="centradoFlex" style="height: 50%;">
                            <div class="circulo-teanimas centradoFlex" id="circulo4">
                                <img src="img/capacitacion.png" alt="" class="icono-teanimas">
                            </div>
                        </div>
                        <div class="centradoFlex" style="height: 50%; justify-content: flex-start;" id="nuestrosvalores">
                            <h3 id="txt-teanimas4">Iniciamos tu programa de capacitación y entrenamiento</h3>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!--¿TE ANIMAS?-->
        <div class="container-agentes-teanimas-responsivo centradoFlex">
            <div class="contenido-teanimas flexColumn">
                <h2 class="gb">¿Te animas?</h2>
                <div class="linea-teanimas flexRow">

                 
                   

                    <div class="linea-objeto flexColumn">
                        <div class="centradoFlex" style="height: 50%;">
                            <div class="circulo-teanimas centradoFlex" id="circulo1">
                                <img src="img/iconowhats.png" alt="" class="icono-teanimas">
                            </div>
                        </div>
                        <div class="centradoFlex" style="height: 50%; justify-content: flex-start;">
                            <h3>Envíanos un WhatsApp</h3>
                        </div>
                    </div>


                    <div class="linea-objeto flexColumn">
                        <div class="centradoFlex" style="height: 50%;">
                            <div class="circulo-teanimas centradoFlex" id="circulo2">
                                <img src="img/agenteicon.png" alt="" class="icono-teanimas">
                            </div>
                        </div>
                        <div class="centradoFlex" style="height: 50%; justify-content: flex-start;">
                            <h3>Platicaremos y descubriremos juntos si esta profesión es para ti</h3>
                        </div>
                    </div>


                    <div class="linea-objeto flexColumn">
                        <div class="centradoFlex" style="height: 50%;">
                            <div class="circulo-teanimas centradoFlex" id="circulo3">
                                <img src="img/maletin.png" alt="" class="icono-teanimas">
                            </div>
                        </div>
                        <div class="centradoFlex" style="height: 50%; justify-content: flex-start;">
                            <h3>Trabajamos en tu plan de carrera</h3>
                        </div>
                    </div>


                    <div class="linea-objeto flexColumn">
                        <div class="centradoFlex" style="height: 50%;">
                            <div class="circulo-teanimas centradoFlex" id="circulo4">
                                <img src="img/capacitacion.png" alt="" class="icono-teanimas">
                            </div>
                        </div>
                        <div class="centradoFlex" style="height: 50%; justify-content: flex-start;" id="nuestrosvalores">
                            <h3>Iniciamos tu programa de capacitación y entrenamiento</h3>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!--NUESTROS VALORES-->
        <div class="container-agentes-valores centradoFlex">
            <div class="contenido-agente-valores centradoFlex">
                <h2 class="gb">Nuestros valores</h2>
                <div class="linea-valores flexRow">
                    <div class="valores centradoFlex">
                        <h3>Innovación</h3>
                    </div>
                    <div class="valores centradoFlex">
                        <h3>Vocación de servicio</h3>
                    </div>
                    <div class="valores centradoFlex">
                        <h3>Confiabilidad</h3>
                    </div>
                    <div class="valores centradoFlex">
                        <h3>Honestidad</h3>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/dividr.png" alt="" class="divider2" id="oportunidades">
        <!--OPORTUNIDADES GC-->
        <div class="container-agentes-oportunidades centradoFlex">
            <div class="contenido-agentes-oportunidades centradoFlex">
                <h2 class="gb">GC te ayudará a desarrollarte y crecer en el mundo de los seguros.</h2>
                <div class="lineaAreasGC flexRow">
                    <div class="areaGC">
                        <img src="img/mkt.jpg" alt="" class="imgAreasGC">
                        <h3 class="gb">Marketing</h3>
                    </div>
                    <div class="areaGC">
                        <img src="img/Networking.jpg" alt="" class="imgAreasGC">
                        <h3 class="gb">Networking</h3>
                    </div>
                    <div class="areaGC">
                        <img src="img/finanzas.jpg" alt="" class="imgAreasGC">
                        <h3 class="gb">Finanzas</h3>
                    </div>
                </div>
            </div>
        </div>

        <!--HISTORIAS DE ÉXITO-->
        <div class="container-agentes-historias centradoFlex" id="historiasexito">
            <div class="contenido-agentes-historias centradoFlex">
                <h2 class="gb">Historias de éxito</h2>
                <div class="linea-historias flexRow">
                    <div class="historia flexColumn">
                        <iframe class="iframeyoutube"
                            src="https://www.youtube.com/embed/65xz9IwU0rs?si=sGuiwSjXVkARi5jR"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <h3 class="gb">Juan Manuel</h3>
                    </div>
                    <div class="historia flexColumn">
                        <iframe class="iframeyoutube"
                            src="https://www.youtube.com/embed/65xz9IwU0rs?si=sGuiwSjXVkARi5jR"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <h3 class="gb">Paul Moreno</h3>
                    </div>
                    <div class="historia flexColumn">
                        <iframe class="iframeyoutube"
                            src="https://www.youtube.com/embed/65xz9IwU0rs?si=sGuiwSjXVkARi5jR"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <h3 class="gb">José Antonio</h3>
                    </div>
                </div>
            </div>
        </div>



    </div>



    <footer>
        <link rel="stylesheet"
            href="https://cdn.positus.global/production/resources/robbu/whatsapp-button/whatsapp-button.css">
        <a id="robbu-whatsapp-button" target="_blank" href="https://wa.link/ud3f6y">
            <div class="rwb-tooltip" style="background-color: white;">WhatsApp!</div>
            <img src="https://cdn.positus.global/production/resources/robbu/whatsapp-button/whatsapp-icon.svg">
        </a>
        <!--<img src="img/logoBlanco.png" alt="Logo" class="navbar-logo" id="logoFooter">-->
        <div class="footer-links flexRow">
            <div class="flexColumn footer-columna">
                <h3 class="gl">Plan de retiro</h3>
                <a href="clientes.php#btnBajar">Quiénes somos</a>
                <a href="clientes.php#frase1">Detalles del plan</a>
                <a href="clientes.php#atencionpersonalizada">¿Por qué Grupo Cáceres?</a>
                <a href="clientes.php#numPrimas">Certificaciones</a>
                <a href="clientes.php#logoinbursa">Preguntas frecuentes</a>
                <a href="clientes.php#preguntaDiv8">Cotizar</a>
            </div>
            <div class="flexColumn footer-columna">
                <h3 class="gl">Agentes</h3>
                <a href="agentes.php#btnBajar">¿Por qué ser agente en Grupo Cáceres?</a>
                <a href="agentes.php#teanimas">¿Te animas?</a>
                <a href="agentes.php#nuestrosvalores">Nuestros valores</a>
                <a href="agentes.php#oportunidades">Oportunidades</a>
                <a href="agentes.php#historiasexito">Historias de éxito</a>
                <a href="https://wa.me/+526692714990">Contáctanos</a>
            </div>
            <div class="flexColumn footer-columna">
                <h3 class="gl">Experiencia GC</h3>
                <a href="experienciagc.php#">Ejemplo</a>
                <a href="experienciagc.php#">Ejemplo</a>
                <a href="experienciagc.php#">Ejemplo</a>
                <a href="experienciagc.php#">Ejemplo</a>
                <a href="experienciagc.php#">Ejemplo</a>
                <a href="experienciagc.php#">Ejemplo</a>
            </div>
            <div class="flexColumn footer-columna">
                <h3 class="gl">Dan Cáceres</h3>
                <a href="dancaceres.php#">Ejemplo</a>
                <a href="dancaceres.php#">Ejemplo</a>
                <a href="dancaceres.php#">Ejemplo</a>
                <a href="dancaceres.php#">Ejemplo</a>
                <a href="dancaceres.php#">Ejemplo</a>
                <a href="dancaceres.php#">Ejemplo</a>
            </div>
        </div>
        <div class="footer-mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229.144287786015!2d-106.43424849426232!3d23.231854537671822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869f53754498874d%3A0x56671e97416a2966!2sGrupo%20C%C3%A1ceres!5e0!3m2!1ses-419!2smx!4v1700159213186!5m2!1ses-419!2smx"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="footer-redes flexRow">
            <img src="img/redes_wsp.png" alt="" class="redes-icono" id="redes_wsp">
            <img src="img/redes_fb.png" alt="" class="redes-icono" id="redes_fb">
            <img src="img/redes_ig.png" alt="" class="redes-icono" id="redes_ig">
            <img src="img/redes_yt.png" alt="" class="redes-icono" id="redes_yt">
        </div>
        <div class="footer-copyright centradoFlex">
            <p>Copyright Grupo Cáceres © 2023</p>
        </div>
    </footer>


</body>

<!--JS PERSONALIZADO-->
<script type="text/javascript">
var circuloteanimas = document.querySelectorAll('.circulo-teanimas');
var rectangulo = document.getElementById('rectangulo');
var txtteanimas1 = document.getElementById('txt-teanimas1')
var txtteanimas2 = document.getElementById('txt-teanimas2')
var txtteanimas3 = document.getElementById('txt-teanimas3')
var txtteanimas4 = document.getElementById('txt-teanimas4')

circuloteanimas.forEach(function(circulo, index) {
    circulo.addEventListener('mouseover', function() {
        for (var i = 0; i <= index; i++) {
            circuloteanimas[i].classList.add('hovered');
            if (i == 0) {
                txtteanimas1.style.opacity = '1';
                txtteanimas1.style.transform = 'translateY(0px)';
            } else if (i == 1) {
                rectangulo.style.width = "23%";
                txtteanimas2.style.opacity = '1';
                txtteanimas2.style.transform = 'translateY(0px)';
            } else if (i == 2) {
                rectangulo.style.width = "45%";
                txtteanimas3.style.opacity = '1';
                txtteanimas3.style.transform = 'translateY(0px)';
            } else if (i == 3) {
                rectangulo.style.width = "64%";
                txtteanimas4.style.opacity = '1';
                txtteanimas4.style.transform = 'translateY(0px)';
            }
        }
    });

    circulo.addEventListener('mouseout', function() {
        circuloteanimas.forEach(function(c) {
            c.classList.remove('hovered');
        });
        rectangulo.style.width = "0%";
        txtteanimas1.style.opacity = '0';
        txtteanimas2.style.opacity = '0';
        txtteanimas3.style.opacity = '0';
        txtteanimas4.style.opacity = '0';
        txtteanimas1.style.transform = 'translateY(-30px)';
        txtteanimas2.style.transform = 'translateY(-30px)';
        txtteanimas3.style.transform = 'translateY(-30px)';
        txtteanimas4.style.transform = 'translateY(-30px)';
    });
});

//MANDAR A WHATSAPP EN UNA PESTAÑA NUEVA AL DAR CLICK EN AGENDAR CITA
var btnAgendarCita = document.getElementById("btnAgendarCita");
btnAgendarCita.addEventListener("click", function() {
    window.open("https://wa.link/ud3f6y", "_blank");
});

var redes_wsp = document.getElementById("redes_wsp");
redes_wsp.addEventListener("click", function() {
    window.open("https://wa.me/+526692714990", "_blank");
});

var redes_fb = document.getElementById("redes_fb");
redes_fb.addEventListener("click", function() {
    window.open("https://www.facebook.com/GrupoCaceresmx", "_blank");
});

var redes_ig = document.getElementById("redes_ig");
redes_ig.addEventListener("click", function() {
    window.open("https://www.instagram.com/grupocaceresseguros/", "_blank");
});

var redes_yt = document.getElementById("redes_yt");
redes_yt.addEventListener("click", function() {
    window.open("https://www.youtube.com/@DanCaceres", "_blank");
});

var btnBajar = document.getElementById("btnBajar");
btnBajar.addEventListener("click", function() {
    btnBajar.scrollIntoView({
        behavior: "smooth"
    });
});


var btnAgendarCita = document.getElementById("btnAgendarCita");
btnAgendarCita.addEventListener("click", function() {
    window.open("https://wa.link/ud3f6y", "_blank");
});
</script>

<!--JS GENERAL-->
<script src="scriptGeneral.js"></script>
</script>

</html>