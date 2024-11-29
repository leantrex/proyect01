<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fido</title>
    <style>
        body {
            background-color: #121212; /* Fondo negro */
            font-family: 'SegoeUI', Tahoma, Geneva, Verdana, sans-serif; /* Fuente más elegante */
            margin: 0;
            padding: 0;
            color: #e0e0e0; /* Color de texto claro */
            line-height: 1.6;
        }
        .hero {
            background-color: #1e1e1e; /* Fondo del héroe más claro */
            text-align: center;
            padding: 80px 20px;
            border-bottom: 5px solid #4a90e2; /* Color de acento más suave */
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.5);
        }
        .hero h2 {
            font-size: 3em;
            margin-bottom: 20px;
            color: #4a90e2; /* Color de acento */
        }
        .hero p {
            font-size: 1.25em;
            max-width: 700px;
            margin: 0 auto;
            color: #c0c0c0; /* Color de texto más claro */
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin: 60px 20px;
        }
        .feature {
            background-color: #2a2a2a; /* Fondo de las características */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.5);
        }
        .feature h3 {
            color: #4a90e2; /* Color de acento */
            margin-top: 0;
            font-size: 1.5em;
        }
        .feature p {
            color: #b0b0b0; /* Color de texto más oscuro */
            margin: 10px 0 0;
        }
        .cta {
            text-align: center;
            margin: 60px 20px;
        }
        .cta-button {
            display: inline-block;
            background-color: #4a90e2; /* Color de acento */
            color: #fff; /* Texto blanco */
            padding: 16px 32px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 1.1em;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
        }
        .cta-button:hover {
            background-color: #357ab8; /* Color de acento más oscuro al pasar el mouse */
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <section class="hero">
        <h2>Bienvenido a la Documentación de Seguridad Informática</h2> 
        <p>Explora nuestros recursos completos sobre sistemas operativos, herramientas de defensa y pruebas de seguridad.</p>
    </section>

    <section class="features">
        <div class="feature">
            <h3>Sistemas Operativos</h3>
            <p>Aprende sobre la seguridad en diferentes sistemas operativos, incluyendo Linux, Windows y MacOS.</p>
        </div>
        <div class="feature">
            <h3>Herramientas de Defensa</h3>
            <p>Descubre cómo proteger tus sistemas con firewalls, antivirus y sistemas de detección de intrusos.</p>
        </div>
        <div class="feature">
            <h3>Pruebas de Seguridad</h3>
            <p>Domina herramientas como Nmap, Metasploit y Wireshark para evaluar y mejorar la seguridad de tus redes.</p>
        </div>
    </section>

    <div class="cta">
        <a href="page/main.php" class="cta-button">Comienza a Explorar</a>
    </div>    
</body>
</html>
