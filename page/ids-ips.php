<?php
$currentPage = $_GET['page'] ?? 'home.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDS/IPS</title>
    <link rel="stylesheet" href="../estilo.css"> <!-- Incluye el archivo CSS -->
</head>

<body>
    <?php include('sibedar.php'); ?> <!-- Incluir el menú -->

    <main class="content">

    <article class="ids-ips-content">
    <h2>¿Qué son IDS y IPS?</h2>
    
    <section class="intro">
        <p>Los Sistemas de Detección de Intrusiones (IDS) y los Sistemas de Prevención de Intrusiones (IPS) son herramientas de seguridad que monitorean las redes y sistemas para detectar actividad maliciosa o violaciones de políticas. Un IDS se encarga de detectar y alertar sobre posibles amenazas, mientras que un IPS no solo detecta, sino que también toma medidas para prevenir esas amenazas.</p>
    </section>

    <section class="key-concepts">
        <h3>¿Cómo funcionan IDS y IPS?</h3>
        <ul>
            <li><strong>Monitoreo de Tráfico:</strong> Analizan el tráfico de red en tiempo real para identificar patrones sospechosos.</li>
            <li><strong>Detección de Anomalías:</strong> Utilizan técnicas de detección basadas en firmas y anomalías para identificar comportamientos inusuales.</li>
            <li><strong>Respuestas Automáticas:</strong> Los IPS pueden bloquear el tráfico malicioso automáticamente, mientras que los IDS solo generan alertas.</li>
        </ul>
    </section>

    <section class="best-practices">
        <h3>Funciones de IDS y IPS</h3>
        <ul>
            <li>Registrar y auditar el tráfico de red para análisis posterior.</li>
            <li>Proporcionar alertas en tiempo real sobre actividades sospechosas.</li>
            <li>Bloquear automáticamente conexiones maliciosas en el caso de un IPS.</li>
            <li>Integrarse con otras herramientas de seguridad para una protección más robusta.</li>
        </ul>
    </section>

    <section class="command-examples">
        <h3>Comandos Útiles para la Configuración de IDS/IPS</h3>
        <div class="code-block">
            <h4>Snort (IDS/IPS)</h4>
            <pre><code>
# Iniciar Snort en modo de detección
snort -c /etc/snort/snort.conf -i eth0

# Iniciar Snort en modo de prevención
snort -c /etc/snort/snort.conf -i eth0 -A console -K ascii

# Actualizar las reglas de Snort
sudo snort -u snort -g snort -c /etc/snort/snort.conf -R
            </code></pre>
        </div>
    </section>

    <section class="additional-resources">
        <h3>Recursos Adicionales</h3>
        <h4>Links, libros, cursos, etc.</h4>
        <ul>
            <li><a href="https://www.snort.org/">Snort - Sistema de Detección de Intrusiones</a></li>
            <li><a href="https://www.udemy.com/course/intrusion-detection-systems/">Curso de Sistemas de Detección de Intrusiones en Udemy</a></li>
            <li><a href="https://www.amazon.com/Intrusion-Detection-Prevention-Systems-Computer/dp/1119560290">Libro: Intrusion Detection and Prevention Systems</a></li>
        </ul>
    </section>

    <div class="center">
        <img src="../assets/img/ids_ips.png" alt="Imagen de IDS/IPS">
    </div>

    </article>

    </main>
</body>
</html>
