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
        <div class="container-banner">
            <div class="btnBajar" id="btnBajar">⬇</div>
            <div class="contenido-banner">
                <img src="img/fotodan2.png" alt="" class="ocultar" id="imgBanner">
                <div class="texto-banner ocultar" id="txtBanner">
                    <h1 class="gb" style="color:#042c53">PROTEGE<br>TU FUTURO</h1>
                    <h2 class="gr" style="color:#004889">Te ayudo a garantizar tu
                        retiro.<br>#AseguramosTuRetiroYElDeMillones</h2>
                    <button class="gr btnAzul" id="btnAgendarCita">Agendar cita</button>
                </div>
            </div>
        </div>

        <!--FRASE 1-->
        <div class="container-frase" id="containerfrase1">
            <h1 class="gb" id="frase1">SOMOS UNA AGENCIA DE SEGUROS CON MÁS DE 15 AÑOS DENTRO DEL MERCADO. ENFOCADOS EN
                GARANTIZAR TU RETIRO.</h1>
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
                            <p>Protección financiera para tus seres queridos en caso de fallecimiento.    </p>
                        </div>
                    </div>
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/incapacidad.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>Seguro por Incapacidad</h2>
                            <p>Ingresos garantizados si no puedes trabajar debido a una incapacidad.

                            </p>
                        </div>
                    </div>
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/interes.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>Interés compuesto</h2>
                            <p>Método que reinvierte el capital a lo largo del tiempo.

                            </p>
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
                            <p>Obtendrás un ingreso estable durante la jubilación para mantener tu calidad de vida.

                            </p>
                        </div>
                    </div>
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/riesgo.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>0% Riesgo</h2>
                            <p>No perderás el capital invertido.

                            </p>
                        </div>
                    </div>
                    <div class="ppp flexRow">
                        <div class="pppImg centradoFlex">
                            <img src="img/plan.png" alt="" class="iconoPPP">
                        </div>
                        <div class="pppTxt centradoFlex">
                            <h2>Plan a tu medida</h2>
                            <p>Plan personalizable según tus necesidades.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pppExtra flexRow">
                <div class="pppImg centradoFlex">
                    <img src="img/apoyo.png" alt="" class="iconoPPP">
                </div>
                <div class="pppTxt centradoFlex" id="atencionpersonalizada">
                    <h2>Atención personalizada</h2>
                    <p>Asesoramiento adaptado a tus circunstancias individuales.




                    </p>
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
                    <img src="img/cnsf.png" alt="" class="logoCert">
                    <img src="img/shcp.png" alt="" class="logoCert">
                    <img src="img/amasfaclogo.png" alt="" class="logoCert">
                    <img src="img/ibursa.png" alt="" class="logoCert" id="logoinbursa">
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
                        <h4 id="h4_1" style="margin: 15px 0;">¿Qué se necesita para contratar?</h4>
                        <p class="respuestaPregunta" style="display: none;" id="preguntaFrec1">Solo necesitas tu
                            identificación oficial y asesorarte con tu agente de seguros para hacer un plan a la medida
                            de
                            tus necesidades.
                        </p>
                        <hr>
                    </div>
                    <div class="pregunta-titulo" id="preguntaDiv2">
                        <h4 id="h4_2" style="margin: 15px 0;">¿Cómo sé si soy candidato?</h4>
                        <p class="respuestaPregunta" style="display: none;" id="preguntaFrec2">Debes tener entre
                            18 a
                            70 años de edad.<br>
                            La edad ideal es aquella en la que te encuentras laboralmente activo.<br>
                            Los seguros son preventivos por lo que contar con un buen estado de salud será uno de los
                            principales requisitos.
                        </p>
                        <hr>
                    </div>
                    <div class="pregunta-titulo" id="preguntaDiv3">
                        <h4 id="h4_3" style="margin: 15px 0;">¿Qué se necesita para contratar un seguro?</h4>
                        <p class="respuestaPregunta" style="display: none;" id="preguntaFrec3">La renovación es
                            automatica por el plazo del plan, nuestro equipo administrativo estara al tanto de los
                            cobros
                            para evitar períodos al descubierto.
                        </p>
                        <hr>
                    </div>
                    <div class="pregunta-titulo" id="preguntaDiv4">
                        <h4 id="h4_4" style="margin: 15px 0;">¿Con qué cantidad puedo empezar un plan privado de
                            pensión?
                        </h4>
                        <p class="respuestaPregunta" style="display: none;" id="preguntaFrec4">Se recomienda
                            empezar
                            con minimamente el 10% de tus ingresos o $1000 pesos lo que resulte mayor.
                        </p>
                        <hr>
                    </div>
                    <div class="pregunta-titulo" id="preguntaDiv5">
                        <h4 id="h4_5" style="margin: 15px 0;">¿Puedo fraccionar mi pago?</h4>
                        <p class="respuestaPregunta" style="display: none;" id="preguntaFrec5">Puedes pagar tu
                            plan de
                            forma, anual, semestral, trimestral o mensual.<br>
                            Te sugerimos cargar tu pago a una tarjeta de débito o crédito para despreocuparte de las
                            fechas
                            de pago y evitar períodos al descubierto.
                        </p>
                        <hr>
                    </div>
                    <div class="pregunta-titulo" id="preguntaDiv6">
                        <h4 id="h4_6" style="margin: 15px 0;">¿Que pasa si tengo cambios en mi situación financiera y no
                            puedo seguir pagando?</h4>
                        <p class="respuestaPregunta" style="display: none;" id="preguntaFrec6">Te daremos tres
                            opciones para aprovechar al máximo los beneficios del plan contratado.<br> <br>
                            Rescate: recuperas la cantidad ahorrada mas rendimientos ( esta cantidad depende al año que
                            se
                            encuentre siempre que sea después del ser año de contratación) una vez rescatado se
                            terminará el
                            beneficio de protección por fallecimiento.
                            <br><br>Prorrogado: continuas asegurado sin mas pago del plan por un menor plazo conservando
                            la
                            misma
                            suma asegurada por fallecimiento.
                            <br><br>Saldado: continuas asegurado sin mas pago del plan, por el mismo plazo pautado
                            reduciendo la
                            suma asegurada por fallecimiento
                        </p>
                        <hr>
                    </div>
                    <div class="pregunta-titulo" id="preguntaDiv7">
                        <h4 id="h4_7" style="margin: 15px 0;">¿Puedo dejar más de un beneficiario?</h4>
                        <p class="respuestaPregunta" style="display: none;" id="preguntaFrec7">Puedes tener más de
                            un
                            beneficiario vinculado a tu póliza, con la condición de que exista un interés asegurable
                            (por
                            ejemplo, que se trate de un familiar, un acreedor o un socio).
                        </p>
                        <hr>
                    </div>
                    <div class="pregunta-titulo" id="preguntaDiv8">
                        <h4 id="h4_8" style="margin: 15px 0;">¿Qué pasa si mi beneficiario muere?
                        </h4>
                        <p class="respuestaPregunta" style="display: none;" id="preguntaFrec8">Según el artículo
                            593
                            del Código de Comercio, si no hay beneficiarios ni normas establecidas para su determinación
                            en
                            el momento del fallecimiento del asegurado, sus herederos legales serán considerados sus
                            beneficiarios. Esto es, en orden prioritario:

                            Los hijos, cónyuge o pareja, o nietos.
                            Los padres u otros ascendientes, y el cónyuge.
                            Los hermanos.
                            Los parientes consanguíneos que no son ascendientes ni descendientes, comenzando por los
                            tíos y
                            siguiendo con los primos.
                            En caso de que no existan herederos legales en el orden indicado, el beneficiario será el
                            Fisco.
                            en caso de elegir beneficiario Revocable al momento de la contratación el asegurado podrá
                            cambiar a su beneficiario en cualquier momento.
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <!--COTIZAR-->
        <div class="clientes-cotizar centradoFlex" id="cotizar">
            <div class="container-cotizar">
                <h1 class="gb centradoFlex tituloCotizar">COTIZA
                    EL<br>PRODUCTO<br>QUE NECESITES</h1>
                <h1 class="gb centradoFlex tituloCotizarMostrar">COTIZA
                    EL PRODUCTO QUE NECESITES</h1>
                <form action="procesar_formulario.php" method="POST" class="gb"
                    style="color: white;text-transform: uppercase;">
                    <div style="width: 100%;">
                        <label for="nombre">Nombre:</label><br>
                        <input type="text" id="nombre" name="nombre" required><br><br>
                    </div>
                    <div class="doblePorLinea" style="width: 100%;">
                        <div class="flexDobleElemento">
                            <label for="correo">Correo:</label><br>
                            <input type="email" id="correo" name="correo" required><br><br>
                        </div>
                        <div class="flexDobleElemento">
                            <label for="tel">Teléfono:</label><br>
                            <input type="tel" id="tel" name="tel" required><br><br>
                        </div>

                    </div>
                    <div style="width: 100%;">
                        <label for="fechanac">Fecha de Nacimiento:</label><br>
                        <input type="date" id="fechanac" name="fechanac" required><br><br>
                    </div>
                    <div style="width: 100%;">
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
                    <div style="width: 100%; text-align: center;">
                        <input type="submit" value="Agendar cita" class="btnAzul">
                    </div>
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

    window.addEventListener("scroll", function () {
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

    document.addEventListener("DOMContentLoaded", function () {
        txtBanner.classList.add("mostrar");
        imgBanner.classList.add("mostrar");
    });

    window.addEventListener("scroll", function () {
        //ALTURA VENTANA
        var ventanaAltura = window.innerHeight;
        var frase1Arriba = frase1.getBoundingClientRect().top;

        //OBJ TXT BANNER
        if (frase1Arriba < ventanaAltura) {
            frase1.classList.add("mostrar");
        }
    });

    var btnBajar = document.getElementById("btnBajar");
    btnBajar.addEventListener("click", function () {
        btnBajar.scrollIntoView({
            behavior: "smooth"
        });
    });


    var btnAgendarCita = document.getElementById("btnAgendarCita");
    btnAgendarCita.addEventListener("click", function () {
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

    var preguntaFrec1 = document.getElementById("preguntaFrec1");
    var preguntaFrec2 = document.getElementById("preguntaFrec2");
    var preguntaFrec3 = document.getElementById("preguntaFrec3");
    var preguntaFrec4 = document.getElementById("preguntaFrec4");
    var preguntaFrec5 = document.getElementById("preguntaFrec5");
    var preguntaFrec6 = document.getElementById("preguntaFrec6");
    var preguntaFrec7 = document.getElementById("preguntaFrec7");
    var preguntaFrec8 = document.getElementById("preguntaFrec8");

    var h4_1 = document.getElementById("h4_1");
    var h4_2 = document.getElementById("h4_2");
    var h4_3 = document.getElementById("h4_3");
    var h4_4 = document.getElementById("h4_4");
    var h4_5 = document.getElementById("h4_5");
    var h4_6 = document.getElementById("h4_6");
    var h4_7 = document.getElementById("h4_7");
    var h4_8 = document.getElementById("h4_8");

    preguntaDiv1.addEventListener("click", function () {
        if (preguntaFrec1.style.display === "none") {
            h4_1.style.color = "#007bff";
            preguntaFrec1.style.display = "block";
        } else {
            preguntaFrec1.style.display = "none";
            h4_1.style.color = "black";
        }
    });
    preguntaDiv2.addEventListener("click", function () {
        if (preguntaFrec2.style.display === "none") {
            preguntaFrec2.style.display = "block";
            h4_2.style.color = "#007bff";
        } else {
            preguntaFrec2.style.display = "none";
            h4_2.style.color = "black";
        }
    });
    preguntaDiv3.addEventListener("click", function () {
        if (preguntaFrec3.style.display === "none") {
            preguntaFrec3.style.display = "block";
            h4_3.style.color = "#007bff";
        } else {
            preguntaFrec3.style.display = "none";
            h4_3.style.color = "black";
        }
    });
    preguntaDiv4.addEventListener("click", function () {
        if (preguntaFrec4.style.display === "none") {
            preguntaFrec4.style.display = "block";
            h4_4.style.color = "#007bff";
        } else {
            preguntaFrec4.style.display = "none";
            h4_4.style.color = "black";
        }
    });
    preguntaDiv5.addEventListener("click", function () {
        if (preguntaFrec5.style.display === "none") {
            preguntaFrec5.style.display = "block";
            h4_5.style.color = "#007bff";
        } else {
            preguntaFrec5.style.display = "none";
            h4_5.style.color = "black";
        }
    });
    preguntaDiv6.addEventListener("click", function () {
        if (preguntaFrec6.style.display === "none") {
            preguntaFrec6.style.display = "block";
            h4_6.style.color = "#007bff";
        } else {
            preguntaFrec6.style.display = "none";
            h4_6.style.color = "black";
        }
    });
    preguntaDiv7.addEventListener("click", function () {
        if (preguntaFrec7.style.display === "none") {
            preguntaFrec7.style.display = "block";
            h4_7.style.color = "#007bff";
        } else {
            preguntaFrec7.style.display = "none";
            h4_7.style.color = "black";
        }
    });
    preguntaDiv8.addEventListener("click", function () {
        if (preguntaFrec8.style.display === "none") {
            preguntaFrec8.style.display = "block";
            h4_8.style.color = "#007bff";
        } else {
            preguntaFrec8.style.display = "none";
            h4_8.style.color = "black";
        }
    });
</script>

<!--JS GENERAL-->
<script src="scriptGeneral.js"></script>

</html>