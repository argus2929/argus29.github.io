<!DOCTYPE html>
<html lang="en" style="overflow-y: auto;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agentes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="barrasocial.css">
</head>

<body>
    <!--NAVBAR-->
    <header>
        <img src="img/logo.png" alt="Logo" class="navbar-logo" id="logo">
        <div class="flexRow">
            <a href="clientes.php#btnBajar" class="navbar-text">Quiénes somos</a>
            <a href="experienciagc.php" class="navbar-text" id="headerExpGC">Experiencia GC</a>
            <a href="dancaceres.php" class="navbar-text" id="headerMentor">El Mentor de los Seguros</a>
        </div>
        <a href="clientes.php#cotizar" class="navbar-text">Contáctanos</a>
    </header>




    <!--CONTENIDO-->
    <div class="container-productos" style="display: inline;">

        <!--BANNER-->
        <div class="container-banner-agentes">
            <div></div>
            
            <div class="contenido-banner-agentes">
                <div style="width: 50%;">
                    <div></div>
                </div>
                <div class="flexColumn" style="width: 50%;">
                    <h1 class="gb" style="color:#042c53; font-size: 55px; margin: 0 0 20px 0;">Invierte en tranquilidad, asegura tu futuro hoy</h1>
                    <h2 class="gr" style="color:#004889; font-size: 20px; margin: 0 0 30px 0;">Contáctanos al 6691223571 o envíanos tus datos a través del botón de WhatsApp.</h2>
                    <button class="gr btnAzul" id="btnAgendarCita">Agendar cita</button>
                </div>
            </div>
        </div>

<!--¿POR QUÉ EN GRUPO CÁCERES?-->
<div class="container-agentes-pqgc centradoFlex">
            <div class="contenido-pqgc flexColumn">
                <h2 class="gb">¿Por qué contratar un seguro con Grupo Cáceres?<br>Grupo Cáceres?</h2>
                <div class="fila-pqgc flexRow">
                    <div class="razonpqgc flexColumn">
                        <img src="img/calidadvida.png" alt="Calidad de vida" style="width: 10rem">
                        <h3>Experiencia confiable: Décadas de experiencia en seguros confiables.</h3>
                    </div>
                    <div class="razonpqgc flexColumn">
                        <img src="img/viajes.png" alt="viajes" style="width: 10rem">
                        <h3>Variedad adaptable: Diversidad de opciones de seguros para distintas necesidades.</h3>
                    </div>
                    <div class="razonpqgc flexColumn">
                        <img src="img/ingresos.png" alt="ingresos" style="width: 10rem">
                        <h3>Atención personalizada: Servicio personalizado de expertos en seguros.</h3>
                    </div>
                </div>
                <div class="fila-pqgc flexRow">
                    <div class="razonpqgc flexColumn">
                        <img src="img/agente.png" alt="agente" style="width: 10rem">
                        <h3>Innovación eficiente: Soluciones innovadoras para una cobertura eficiente.</h3>
                    </div>
                    <div class="razonpqgc flexColumn">
                        <img src="img/vida.png" alt="vida" style="width: 10rem">
                        <h3>Compromiso comunitario: Participación activa en la comunidad, cuidando más allá del seguro.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuéntranos</title>
    <style>
        #map {
            height: 400px; /* Altura del mapa */
            width: 100%; /* Ancho del mapa */
        }
    </style>
</head>

<body>
    <h1>Encuéntranos</h1>
    <!-- Mapa de Google Maps -->
    <div id="map"></div>

    <script>
        function initMap() {
            // Coordenadas del lugar
            var coordenadas = { lat: 40.712776, lng: -74.005974 }; // Por ejemplo, Nueva York

            // Crear mapa
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15, // Nivel de zoom
                center: coordenadas // Centrar el mapa en las coordenadas especificadas
            });

            // Marcador en el mapa
            var marker = new google.maps.Marker({
                position: coordenadas,
                map: map,
                title: 'Nuestra ubicación' // Título del marcador
            });
        }
    </script>
    <!-- Incluir la API de Google Maps -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap">
    </script>
</body>

</html>


  
        </div>

        <!--COTIZAR-->
        <div class="clientes-cotizar centradoFlex">
            <div class="container-cotizar">
                <h1 class="gb centradoFlex" style="width: 50%; font-size: 90px; color: white;">COTIZA
                    EL<br>PRODUCTO<br>QUE NECESITES</h1>
                <form action="procesar_formulario.php" method="POST" class="gb"
                    style="color: white;text-transform: uppercase;">
                    <div style="width: 100%;">
                        <label for="nombre">Nombre:</label><br>
                        <input type="text" id="nombre" name="nombre" required><br><br>
                    </div>
                    <div class="doblePorLinea">
                        <div class="flexDobleElemento">
                            <label for="correo">Correo:</label><br>
                            <input type="email" id="correo" name="correo" required><br><br>
                        </div>
                        <div class="flexDobleElemento">
                            <label for="tel">Teléfono:</label><br>
                            <input type="tel" id="tel" name="tel" required><br><br>
                        </div>

                    </div>
                    <div>
                        <label for="fechanac">Fecha de Nacimiento:</label><br>
                        <input type="date" id="fechanac" name="fechanac" required><br><br>
                    </div>
                    <div class="doblePorLinea">
                        <div class="flexDobleElemento">
                            <label for="tipodeseguro">Tipo de Seguro:</label>
                            <select id="tipodeseguro" name="tipodeseguro" required>
                                <option value="ppp">Plan de retiro</option>
                                <option value="gmm">Gastos Médicos Mayores</option>
                                <option value="segauto">Seguro de auto</option>
                                <option value="planeducacional">Plan educacional</option>
                                <option value="segnegocio">Seguro de negocio</option>
                                <option value="inversion">Inversión</option>
                            </select>
                        </div>
                        <div class="flexDobleElemento">
                            <label for="fumador">¿Es fumador?</label><br>
                            <div>
                                <input type="radio" id="fumadorsi" name="fumador" value="Si"> <label
                                    for="fumadorsi">Sí</label>
                                <input type="radio" id="fumadorno" name="fumador" value="No"> <label
                                    for="fumadorno">No</label><br><br>

                            </div>

                        </div>
                    </div>
                    <input type="submit" value="Agendar cita" class="btnAzul">
                </form>
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
        <img src="img/logoBlanco.png" alt="Logo" class="navbar-logo" id="logoFooter">
        <div class="footer">
            <a href="experienciagc.php" class="footer-text">Experiencia GC</a>
            <a href="nosotros.php" class="footer-text">Quiénes somos</a>
            <a href="contactanos.php" class="footer-text">Contáctanos</a>
            <a href="dancaceres.php" class="footer-text">El Mentor de los Seguros</a>
        </div>
    </footer>


</body>
<!--JS PERSONALIZADO-->
<script type="text/javascript">
    //MANDAR A WHATSAPP EN UNA PESTAÑA NUEVA AL DAR CLICK EN AGENDAR CITA
    var btnAgendarCita = document.getElementById("btnAgendarCita");
    btnAgendarCita.addEventListener("click", function () {
        window.open("https://wa.link/ud3f6y", "_blank");
    });

    var btnBajar = document.getElementById("btnBajar");
    var SEGUNDODIV = document.getElementById("SEGUNDODIV");
    btnBajar.addEventListener("click", function () {
        SEGUNDODIV.scrollIntoView({
            behavior: "smooth"
        });
    });

    var btnAgendarCita = document.getElementById("btnAgendarCita");
    btnAgendarCita.addEventListener("click", function () {
        window.open("https://wa.link/ud3f6y", "_blank");
    });
</script>

<!--JS GENERAL-->
<script src="scriptGeneral.js"></script>

</html>
           
