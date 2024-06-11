<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio | Clientes</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!--NAVBAR-->
  <header>
        <img src="img/logo.png" alt="Logo" class="navbar-logo" id="logo">
        <div class="flexRow">
            <a href="experienciagc.php" class="navbar-text" id="headerExpGC">Experiencia GC</a>
            <a href="nosotros.php" class="navbar-text">Quiénes somos</a>
            <a href="contactanos.php" class="navbar-text">Contáctanos</a>
        </div>
        <a href="dancaceres.php" class="navbar-text" id="headerMentor">El Mentor de los Seguros</a>
    </header>

  <!--COTIZAR
  <div class="pantallaInicio" id="formIS">
    <div class="containerForm">
      <h5 id="cerrar">Cerrar</h5>
      <div class="container-cotizar">
        <h1 class="gb centradoFlex" style="width: 50%; font-size: 50px; color: white;">COTIZA
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
          <input type="submit" value="Cotizar">
        </form>
      </div>
    </div>
  </div>
-->



  








  <!--CONTENIDO-->
  <div class="fondoProductos">
    <div class="btnBajar" id="btnBajar">⬇</div>
    <h1 class="txtInicio gb txtMostrar" style="color: rgb(44,74,131); opacity: 0;" id="qnsSomos">¿Quiénes somos?</h1>
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






<!--JS PERSONALIZADO-->
<script type="text/javascript">
  //MANDAR A WHATSAPP EN UNA PESTAÑA NUEVA AL DAR CLICK EN AGENDAR CITA
  var btnAgendarCita = document.getElementById("btnAgendarCita");
  btnAgendarCita.addEventListener("click", function() {
    window.open("https://wa.link/ud3f6y", "_blank");
  });

  //FONDO BLANCO AL SCROLLEAR
  var header = document.querySelector("header");
  window.addEventListener("scroll", function() {
    if (window.scrollY > 100) {
      header.style.backgroundColor = "rgba(255, 255, 255, 0.95)";
    } else {
      header.style.backgroundColor = "transparent";
    }
  });

  document.addEventListener("DOMContentLoaded", function() {
    var qnsSomos = document.getElementById("qnsSomos");

    setTimeout(function() {
      qnsSomos.style.opacity = "1";
      qnsSomos.style.transform = "translateY(0px)"
    }, 1000);
  });
</script>

<!--JS GENERAL-->
<script src="scriptGeneral.js"></script>

</html>