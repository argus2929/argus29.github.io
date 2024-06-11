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
        <a href="contactanos.php" class="navbar-text">Contáctanos</a>
    </header>




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
                    <h1 class="gb" style="color:#042c53; font-size: 55px; margin: 0 0 20px 0;">Formamos y desarrollamos
                        los mejores Agentes de Seguros</h1>
                    <h2 class="gr" style="color:#004889; font-size: 20px; margin: 0 0 30px 0;">Contáctanos al 6691223571 o envíanos tus datos a través del botón de WhatsApp.</h2>
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
                        <img src="img/calidadvida.png" alt="Calidad de vida" style="width: 10rem">
                        <h3>Mejoramos tu calidad de vida</h3>
                    </div>
                    <div class="razonpqgc flexColumn">
                        <img src="img/viajes.png" alt="viajes" style="width: 10rem">
                        <h3>Viajes</h3>
                    </div>
                    <div class="razonpqgc flexColumn">
                        <img src="img/ingresos.png" alt="ingresos" style="width: 10rem">
                        <h3>Excelentes ingresos</h3>
                    </div>
                </div>
                <div class="fila-pqgc flexRow">
                    <div class="razonpqgc flexColumn">
                        <img src="img/agente.png" alt="agente" style="width: 10rem">
                        <h3>Crece como agente de seguros</h3>
                    </div>
                    <div class="razonpqgc flexColumn">
                        <img src="img/vida.png" alt="vida" style="width: 10rem">
                        <h3>Mercado de vida</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--¿TE ANIMAS?-->
        <div class="container-agentes-teanimas centradoFlex">
            <div class="contenido-teanimas flexColumn">
                <h2 class="gb">¿Te animas?</h2>
                <div class="linea-teanimas flexRow">
                    <div class="linea-objeto flexColumn">
                        <img src="img/whats.png" alt="" style="width: 10rem;">
                        <h3>Envíanos un WhatsApp</h3>
                    </div>
                    <div class="linea-objeto flexColumn">
                        <img src="img/whats.png" alt="" style="width: 10rem;">
                        <h3>Platicaremos y descubriremos juntos si esta profesión es para ti</h3>
                    </div>
                    <div class="linea-objeto flexColumn">
                        <img src="img/whats.png" alt="" style="width: 10rem;">
                        <h3>Trabajamos en tu plan de carrera</h3>
                    </div>
                    <div class="linea-objeto flexColumn">
                        <img src="img/whats.png" alt="" style="width: 10rem;">
                        <h3>Iniciamos tu programa de capacitación y entrenamiento</h3>
                    </div>
                </div>
            </div>
        </div>

  
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