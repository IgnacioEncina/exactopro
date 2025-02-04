<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto - Exacto Pesaje</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div id="header"></div>
    <main>
        <section class="sectionContacto">
            <h1>Contáctanos</h1>
            <p>Nos encantaría saber de ti. Puedes contactarnos a través de los siguientes medios:</p>
            <ul>
                <li>Teléfono: +569 86870191</li>
                <li>Email: contacto@exactopro.cl</li>
            </ul>
            <form action="#" method="POST">
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>
                <div>
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Mail" required>
                </div>
                <div>
                    <label for="asunto">Asunto:</label>
                    <input type="text" id="asunto" name="asunto" placeholder="Asunto" required>
                </div>
                <div>
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Mensaje" required></textarea>
                </div>
                <button type="submit" name="enviar">Enviar</button>
            </form>
            <?php 
                include("correo.php");
            ?>
        </section>
    </main>
    
    <!-- Lugar donde se cargará el footer -->
    <div id="footer"></div>

    <script src="JS/header.js"></script>
</body>
</html>
