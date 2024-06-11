<!DOCTYPE html>
<html lang="en" style="overflow-y: auto;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="style.css">
    <head>

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
          
            <div class="contenido-banner">
                <img src="img/fotodan.png" alt="" class="ocultar" id="imgBanner">
                <div class="texto-banner ocultar" id="txtBanner">
                    <h1 class="gb" style="color:#042c53">¿QUIEN ES DAN CÁCERES?<br></h1>
                    <h2 class="gr" style="color:#004889"><br>Dan Cáceres es Ingeniero en Tecnologías Computacionales, egresado del Tecnológico de Monterrey, campus Mazatlán. Aficionado del deporte y fisiculturista, es el CEO de Youbuy, una empresa de desarrollo de software, y de Grupo Cáceres Agencia de Seguros. Está certificado ante la CNSF como agente de seguros para riesgos empresariales y es coach empresarial de agentes de seguros. Actualmente, se desempeña como Director de Distrito Zona Pacífico ante la AMASFAC</h2>
                    <button class="gr btnAzul" id="btnAgendarCita">Agendar cita</button>
                </div>
            </div>
        </div>

        <!--FRASE 1-->
        <div class="container-frase" id="containerfrase1">
            <h1 class="gb" id="frase1">

"Protegemos tu patrimonio y bienestar con soluciones personalizadas, brindándote la tranquilidad que mereces."</h1>
        </div>

        <!--CONTRATA TU PPP-->
        <div class="container-ppp flexColumn">
            <h2 class="gb txtPPP" id="txtPPP">VENTAJAS Y DESVENTAJAS <br>DE TENER UN SEGURONO </h2>
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
                            <img src="img/iconoVida.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>Seguro por Incapacidad</h2>
                            <p>Información al respecto</p>
                        </div>
                    </div>
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/iconoVida.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>Seguro por Incapacidad</h2>
                            <p>Información al respecto</p>
                        </div>
                    </div>
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/iconoVida.png" alt="" class="iconoPPP">
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
                            <img src="img/riesgo.png" alt="" class="iconoPPP">
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
                            <img src="img/riesgo.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>0% Riesgo</h2>
                            <p>Información al respecto</p>
                        </div>
                    </div>
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/riesgo.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>Plan a tu medida</h2>
                            <p>Información al respecto</p>
                        </div>
                    </div>
                </div>
            </div>
        
                </div>
            </div>
        </div>

        <!--DATOS-->
        <div class="container-datos centradoFlex">
        <h2 class="gb txtPPP" id="txtPPP" style="margin: 2rem 0;">CASOS DE</h2>
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
            <a href="contactanos.php" class="footer-text">Contáctanos</a>
            <a href="dancaceres.php" class="footer-text">El Mentor de los Seguros</a>
        </div>
    </footer>


</body>
<!--JS PERSONALIZADO-->
<script type="text/javascript">
    var numClientes = document.getElementById("numClientes");
    let valorClientes = 0;

    var numPrimas = document.getElementById("numPrimas");
    let valorPrimas = 0;

    var numPlanContratado = document.getElementById("numPlanContratado");
    let valorPlan = 0;

    function aumentarValorClientes() {
        if (valorClientes <= 6000) {
            numClientes.textContent = "+" + valorClientes.toLocaleString();
            valorClientes = valorClientes + 1;
            setTimeout(aumentarValorClientes, 10);
        }
    }

    function aumentarValorPrimas() {
        if (valorPrimas <= 60000000) {
            numPrimas.textContent = "+$" + valorPrimas.toLocaleString();
            valorPrimas = valorPrimas + 9375;
            setTimeout(aumentarValorPrimas, 10);
        }
    }

    function aumentarValorPlan() {
        if (valorPlan <= 2000) {
            numPlanContratado.textContent = "$" + valorPlan.toLocaleString();
            valorPlan = valorPlan + 2;
            setTimeout(aumentarValorPlan, 30);
        }
    }

    window.addEventListener("scroll", function() {
        var alturaClientes = numClientes.getBoundingClientRect();
        if (alturaClientes.bottom <= window.innerHeight) {
            aumentarValorClientes();
        }
        var alturaPrimas = numPrimas.getBoundingClientRect();
        if (alturaPrimas.bottom <= window.innerHeight) {
            aumentarValorPrimas();
        }
        var alturaPlan = numPlanContratado.getBoundingClientRect();
        if (alturaPlan.bottom <= window.innerHeight) {
            aumentarValorPlan();
        }
    });

    var txtBanner = document.getElementById("txtBanner");
    var frase1 = document.getElementById("frase1");
    var beneficiosh1 = document.getElementById("beneficiosh1");
    var beneficios1 = document.getElementById("beneficios1");
    var beneficios2 = document.getElementById("beneficios2");
    var beneficios3 = document.getElementById("beneficios3");

    document.addEventListener("DOMContentLoaded", function() {
        txtBanner.classList.add("mostrar");
        imgBanner.classList.add("mostrar");
    });

    window.addEventListener("scroll", function() {
        //ALTURA VENTANA
        var ventanaAltura = window.innerHeight;
        var frase1Arriba = frase1.getBoundingClientRect().top;

        //OBJ TXT BANNER
        if (frase1Arriba < ventanaAltura) {
            frase1.classList.add("mostrar");
        }
    });

    var btnBajar = document.getElementById("btnBajar");
    var containerfrase1 = document.getElementById("containerfrase1");
    btnBajar.addEventListener("click", function() {
        containerfrase1.scrollIntoView({
            behavior: "smooth"
        });
    });


    var btnAgendarCita = document.getElementById("btnAgendarCita");
    btnAgendarCita.addEventListener("click", function() {
        window.open("https://wa.link/ud3f6y", "_blank");
    });



    var preguntaDiv1 = document.getElementById("preguntaDiv1");
    var preguntaDiv2 = document.getElementById("preguntaDiv2");
    var preguntaDiv3 = document.getElementById("preguntaDiv3");
    var preguntaDiv4 = document.getElementById("preguntaDiv4");
    var preguntaDiv5 = document.getElementById("preguntaDiv5");
    var preguntaDiv6 = document.getElementById("preguntaDiv6");
    var preguntaDiv7 = document.getElementById("preguntaDiv7");
    var preguntaDiv8 = document.getElementById("preguntaDiv8");
    var preguntaDiv9 = document.getElementById("preguntaDiv9");

    var preguntaFrec1 = document.getElementById("preguntaFrec1");
    var preguntaFrec2 = document.getElementById("preguntaFrec2");
    var preguntaFrec3 = document.getElementById("preguntaFrec3");
    var preguntaFrec4 = document.getElementById("preguntaFrec4");
    var preguntaFrec5 = document.getElementById("preguntaFrec5");
    var preguntaFrec6 = document.getElementById("preguntaFrec6");
    var preguntaFrec7 = document.getElementById("preguntaFrec7");
    var preguntaFrec8 = document.getElementById("preguntaFrec8");
    var preguntaFrec9 = document.getElementById("preguntaFrec9");

    var h4_1 = document.getElementById("h4_1");
    var h4_2 = document.getElementById("h4_2");
    var h4_3 = document.getElementById("h4_3");
    var h4_4 = document.getElementById("h4_4");
    var h4_5 = document.getElementById("h4_5");
    var h4_6 = document.getElementById("h4_6");
    var h4_7 = document.getElementById("h4_7");
    var h4_8 = document.getElementById("h4_8");
    var h4_9 = document.getElementById("h4_9");

    preguntaDiv1.addEventListener("click", function() {
        if (preguntaFrec1.style.display === "none") {
            h4_1.style.color = "#007bff";
            preguntaFrec1.style.display = "block";
        } else {
            preguntaFrec1.style.display = "none";
            h4_1.style.color = "black";
        }
    });
    preguntaDiv2.addEventListener("click", function() {
        if (preguntaFrec2.style.display === "none") {
            preguntaFrec2.style.display = "block";
            h4_2.style.color = "#007bff";
        } else {
            preguntaFrec2.style.display = "none";
            h4_2.style.color = "black";
        }
    });
    preguntaDiv3.addEventListener("click", function() {
        if (preguntaFrec3.style.display === "none") {
            preguntaFrec3.style.display = "block";
            h4_3.style.color = "#007bff";
        } else {
            preguntaFrec3.style.display = "none";
            h4_3.style.color = "black";
        }
    });
    preguntaDiv4.addEventListener("click", function() {
        if (preguntaFrec4.style.display === "none") {
            preguntaFrec4.style.display = "block";
            h4_4.style.color = "#007bff";
        } else {
            preguntaFrec4.style.display = "none";
            h4_4.style.color = "black";
        }
    });
    preguntaDiv5.addEventListener("click", function() {
        if (preguntaFrec5.style.display === "none") {
            preguntaFrec5.style.display = "block";
            h4_5.style.color = "#007bff";
        } else {
            preguntaFrec5.style.display = "none";
            h4_5.style.color = "black";
        }
    });
    preguntaDiv6.addEventListener("click", function() {
        if (preguntaFrec6.style.display === "none") {
            preguntaFrec6.style.display = "block";
            h4_6.style.color = "#007bff";
        } else {
            preguntaFrec6.style.display = "none";
            h4_6.style.color = "black";
        }
    });
    preguntaDiv7.addEventListener("click", function() {
        if (preguntaFrec7.style.display === "none") {
            preguntaFrec7.style.display = "block";
            h4_7.style.color = "#007bff";
        } else {
            preguntaFrec7.style.display = "none";
            h4_7.style.color = "black";
        }
    });
    preguntaDiv8.addEventListener("click", function() {
        if (preguntaFrec8.style.display === "none") {
            preguntaFrec8.style.display = "block";
            h4_8.style.color = "#007bff";
        } else {
            preguntaFrec8.style.display = "none";
            h4_8.style.color = "black";
        }
    });
    preguntaDiv9.addEventListener("click", function() {
        if (preguntaFrec9.style.display === "none") {
            preguntaFrec9.style.display = "block";
            h4_9.style.color = "#007bff";
        } else {
            preguntaFrec9.style.display = "none";
            h4_9.style.color = "black";
        }
    });
</script>

<!--JS GENERAL-->
<script src="scriptGeneral.js"></script>

</html>