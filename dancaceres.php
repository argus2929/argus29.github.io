<!DOCTYPE html>
<html lang="en" style="overflow-y: auto;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--NAVBAR-->
    <header>
        <img src="img/logo.png" alt="Logo" class="navbar-logo" id="logo">
        <div class="flexRow">
            <a href="#btnBajar" class="navbar-text">Quiénes somos</a>
            <a href="experienciagc.php" class="navbar-text" id="headerExpGC">Experiencia GC</a>
            <a href="dancaceres.php" class="navbar-text" id="headerMentor">El Mentor de los Seguros</a>
        </div>
        <a href="#cotizar" class="navbar-text">Contáctanos</a>
    </header>

    <!--CONTENIDO-->
    <div class="container-productos" style="display: inline;">

        <!--BANNER-->
        <div class="container-banner">
            <div class="btnBajar" id="btnBajar">⬇</div>
            <div class="contenido-banner">
                <img src="img/fotodan.png" alt="" class="ocultar" id="imgBanner">
                <div class="texto-banner ocultar" id="txtBanner">
                    <h1 class="gb" style="color:#042c53">PROTEGE<br>TU FUTURO</h1>
                    <h2 class="gr" style="color:#004889">Te ayudo a garantizar tu retiro.<br>#AseguramosTuRetiroYElDeMillones</h2>
                    <button class="gr btnAzul" id="btnAgendarCita">Agendar cita</button>
                </div>
            </div>
        </div>

        <!--FRASE 1-->
        <div class="container-frase" id="containerfrase1">
            <h1 class="gb" id="frase1">SOMOS UNA AGENCIA DE SEGUROS CON MÁS DE 15 AÑOS DENTRO DEL MERCADO. ENFOCADOS EN GARANTIZAR TU RETIRO.</h1>
        </div>

        <!--CONTRATA TU PPP-->
        <div class="container-ppp flexColumn">
            <h2 class="gb txtPPP" id="txtPPP">Contrata tu Plan Privado de Pensión</h2>
            <div class="flexRow contenido-ppp">
                <div class="flexColumn lista-ppp">
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/iconoVida.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>Seguro de vida</h2>
                            <p>Información al respecto</p>
                        </div>
                    </div>
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/incapacidad.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>Seguro por Incapacidad</h2>
                            <p>Información al respecto</p>
                        </div>
                    </div>
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/interes.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>Interés compuesto</h2>
                            <p>Información al respecto</p>
                        </div>
                    </div>
                </div>
                <div class="flexColumn lista-ppp">
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/retiro.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>Retiro Garantizado</h2>
                            <p>Información al respecto</p>
                        </div>
                    </div>
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/riesgo.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>0% Riesgo</h2>
                            <p>Información al respecto</p>
                        </div>
                    </div>
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/plan.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>Plan a tu medida</h2>
                            <p>Información al respecto</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pppExtra flexRow">
                <div class="pppImg centradoFlex">
                    <img src="img/apoyo.png" alt="" class="iconoPPP">
                </div>
                <div class="pppTxt centradoFlex">
                    <h2>Atención personalizada</h2>
                    <p>Información al respecto</p>
                </div>
            </div>
        </div>

        <!--DATOS-->
        <div class="container-datos centradoFlex">
        <h2 class="gb txtPPP" id="txtPPP" style="margin: 2rem 0;">¿Por qué Grupo Cáceres?</h2>
            <div class="contenido-datos flexColumn">
                <div class="filaDatos flexRow" style="justify-content:space-around">
                    <div class="cuadroDatos flexColumn">
                        <h3>Número de clientes</h3>
                        <h2 id="numClientes">+0</h2>
                    </div>
                    <div class="cuadroDatos flexColumn">
                        <h3>Edad promedio de nuestros clientes</h3>
                        <h2>25 a 45 años</h2>
                    </div>
                </div>
                <div class="filaDatos flexRow" style="justify-content:space-around">
                    <div class="cuadroDatos flexColumn">
                        <h3>Promedio de plan contratado mensual</h3>
                        <h2 id="numPlanContratado">$0</h2>
                    </div>
                    <div class="cuadroDatos flexColumn">
                        <h3>Primas administradas</h3>
                        <h2 id="numPrimas">+$0</h2>
                    </div>
                </div>
            </div>
        </div>

        <!--CERTIFICACIONES-->
        <div class="container-certs centradoFlex">
            <div class="contenido-certs flexColumn">
                <h2>Certificaciones</h2>
                <div class="filaCerts flexRow" style="justify-content:space-around;">
                    <img src="img/cnsf.png" alt="" style="width: 20%;">
                    <img src="img/shcp.png" alt="" style="width: 20%;">
                    <img src="img/amasfaclogo.png" alt="" style="width: 20%;">
                    <img src="img/ibursa.png" alt="" style="width: 20%;">
                </div>
            </div>
        </div>
    </div>

    <!--PREGUNTAS FRECUENTES-->
    <div class="clientes-preguntas-frecuentes centradoFlex" id="preguntas-frecuentes">
        <h2>Preguntas frecuentes</h2>
        <div class="preguntas-frecuentes-contenido">
            <div class="clientes-preguntas-img">
                <img src="img/preguntas.png" alt="" width="100%">
            </div>
            <div class="clientes-preguntas-lista">
                <div class="pregunta-titulo" id="preguntaDiv1">
                    <h4 id="h4_1" style="margin: 15px 0;">¿Cuáles son los métodos de pago?</h4>
                    <p style="font-size: 13px; margin: 8px 0; display: none;" id="preguntaFrec1">Texto de respuesta.
                    </p>
                    <hr>
                </div>
                <div class="pregunta-titulo" id="preguntaDiv2">
                    <h4 id="h4_2" style="margin: 15px 0;">¿Se pueden adelantar meses?</h4>
                    <p style="font-size: 13px; margin: 8px 0; display: none;" id="preguntaFrec2">Texto de respuesta.
                    </p>
                    <hr>
                </div>
                <div class="pregunta-titulo" id="preguntaDiv3">
                    <h4 id="h4_3" style="margin: 15px 0;">¿En qué lapsos se puede pagar?</h4>
                    <p style="font-size: 13px; margin: 8px 0; display: none;" id="preguntaFrec3">Texto de respuesta.
                    </p>
                    <hr>
                </div>
                <div class="pregunta-titulo" id="preguntaDiv4">
                    <h4 id="h4_4" style="margin: 15px 0;">¿Qué se necesita para contratar un seguro?</h4>
                    <p style="font-size: 13px; margin: 8px 0; display: none;" id="preguntaFrec4">Texto de respuesta.
                    </p>
                    <hr>
                </div>
                <div class="pregunta-titulo" id="preguntaDiv5">
                    <h4 id="h4_5" style="margin: 15px 0;">¿Puedo pagar de contado?</h4>
                    <p style="font-size: 13px; margin: 8px 0; display: none;" id="preguntaFrec5">Texto de respuesta.
                    </p>
                    <hr>
                </div>
                <div class="pregunta-titulo" id="preguntaDiv6">
                    <h4 id="h4_6" style="margin: 15px 0;">¿Hay meses sin intereses?</h4>
                    <p style="font-size: 13px; margin: 8px 0; display: none;" id="preguntaFrec6">Texto de respuesta.
                    </p>
                    <hr>
                </div>
                <div class="pregunta-titulo" id="preguntaDiv7">
                    <h4 id="h4_7" style="margin: 15px 0;">¿Puedo pagar con diferentes tarjetas?</h4>
                    <p style="font-size: 13px; margin: 8px 0; display: none;" id="preguntaFrec7">Texto de respuesta.
                    </p>
                    <hr>
                </div>
                <div class="pregunta-titulo" id="preguntaDiv8">
                    <h4 id="h4_8" style="margin: 15px 0;">¿Cuál es el proceso de renovación?</h4>
                    <p style="font-size: 13px; margin: 8px 0; display: none;" id="preguntaFrec8">Texto de respuesta.
                    </p>
                    <hr>
                </div>
                <div class="pregunta-titulo" id="preguntaDiv9">
                    <h4 id="h4_9" style="margin: 15px 0;">¿Qué pasa si tengo cambios en mi situación financiera?
                    </h4>
                    <p style="font-size: 13px; margin: 8px 0; display: none;" id="preguntaFrec9">Texto de respuesta.
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <!--COTIZAR-->
    <div class="clientes-cotizar centradoFlex" id="cotizar">
        <div class="container-cotizar">
            <h1 class="gb centradoFlex" style="width: 50%; font-size: 90px; color: white;">COTIZA
                EL<br>PRODUCTO<br>QUE NECESITES</h1>
            <form action="procesar_formulario.php" method="POST" class="gb" style="color: white;text-transform: uppercase;">
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
                            <input type="radio" id="fumadorsi" name="fumador" value="Si"> <label for="fumadorsi">Sí</label>
                            <input type="radio" id="fumadorno" name="fumador" value="No"> <label for="fumadorno">No</label><br><br>

                        </div>

                    </div>
                </div>
                <input type="submit" value="Agendar cita" class="btnAzul">
            </form>
        </div>
    </div>

    </div>



    <footer>
        <link rel="stylesheet" href="https://cdn.positus.global/production/resources/robbu/whatsapp-button/whatsapp-button.css">
        <a id="robbu-whatsapp-button" target="_blank" href="https://wa.link/ud3f6y">
            <div class="rwb-tooltip" style="background-color: white;">WhatsApp!</div>
            <img src="https://cdn.positus.global/production/resources/robbu/whatsapp-button/whatsapp-icon.svg">
        </a>
        <img src="img/logoBlanco.png" alt="Logo" class="navbar-logo" id="logoFooter">
        <div class="footer">
            <a href="experienciagc.php" class="footer-text">Experiencia GC</a>
            <a href="nosotros.php" class="footer-text">Quiénes somos</a>
            <a href="contacto.php" class="footer-text">Contáctanos</a>
            <a href="dancaceres.php" class="footer-text">El Mentor de los Seguros</a>
        </div>
    </footer>


</body>