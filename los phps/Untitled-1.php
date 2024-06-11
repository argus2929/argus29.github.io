<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dan Cáceres - El Mentor de los Seguros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="img/logo.png" alt="Logo">
            </div>
            <ul class="nav-links">
                <li><a href="#about">Quiénes somos</a></li>
                <li><a href="#experience">Experiencia GC</a></li>
                <li><a href="#mentor">El Mentor de los Seguros</a></li>
                <li><a href="#contact">Contáctanos</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Protege Tu Futuro</h1>
            <p>Te ayudo a garantizar tu retiro. #AseguramosTuRetiroYElDeMillones</p>
            <button class="cta-button">Agendar cita</button>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>Quiénes somos</h2>
            <p>Somos una agencia de seguros con más de 15 años dentro del mercado. Enfocados en garantizar tu retiro.</p>
        </div>
    </section>

    <section id="experience" class="experience">
        <div class="container">
            <h2>Experiencia GC</h2>
            <div class="experience-cards">
                <div class="card">
                    <img src="img/iconoVida.png" alt="Seguro de vida">
                    <h3>Seguro de vida</h3>
                    <p>Información al respecto</p>
                </div>
                <div class="card">
                    <img src="img/incapacidad.png" alt="Seguro por Incapacidad">
                    <h3>Seguro por Incapacidad</h3>
                    <p>Información al respecto</p>
                </div>
                <div class="card">
                    <img src="img/interes.png" alt="Interés compuesto">
                    <h3>Interés compuesto</h3>
                    <p>Información al respecto</p>
                </div>
            </div>
        </div>
    </section>

    <section id="mentor" class="mentor">
        <div class="container">
            <h2>El Mentor de los Seguros</h2>
            <p>Dan Cáceres es un experto en seguros con años de experiencia ayudando a personas a asegurar su futuro financiero.</p>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Contáctanos</h2>
            <form action="procesar_formulario.php" method="POST">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Teléfono:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="cta-button">Enviar</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <img src="img/logo.png" alt="Logo" class="footer-logo">
            <p>&copy; 2024 Dan Cáceres. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
