<?php
$currentPage = $_GET['page'] ?? 'home.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antivirus</title>
    <link rel="stylesheet" href="../estilo.css"> <!-- Incluye el archivo CSS -->
</head>

<body>
    <?php include('sibedar.php'); ?> <!-- Incluir el menú -->

    <main class="content">

    <article class="antivirus-content">
    <h2>¿Qué es un Antivirus?</h2>
    
    <section class="intro">
        <p>Un antivirus es un software diseñado para detectar, prevenir y eliminar malware, incluyendo virus, gusanos y troyanos. Su función principal es proteger los sistemas informáticos de amenazas que pueden comprometer la seguridad y la integridad de los datos.</p>
    </section>

    <section class="key-concepts">
        <h3>¿Cómo funciona un Antivirus?</h3>
        <ul>
            <li><strong>Detección de Malware:</strong> Utiliza bases de datos de firmas de virus y heurística para identificar amenazas.</li>
            <li><strong>Protección en Tiempo Real:</strong> Monitorea el sistema en tiempo real para detectar actividades sospechosas.</li>
            <li><strong>Escaneo Programado:</strong> Permite programar análisis completos o rápidos del sistema.</li>
        </ul>
    </section>

    <section class="command-examples">
        <h3>Comandos Útiles para Antivirus</h3>
        <h4>Dependiendo del Sistema Operativo</h4>
        <div class="code-block">
            <h4>Windows (Windows Defender)</h4>
            <pre><code>
# Actualizar la base de datos de virus
"%ProgramFiles%\Windows Defender\MpCmdRun.exe" -SignatureUpdate

# Realizar un análisis rápido
"%ProgramFiles%\Windows Defender\MpCmdRun.exe" -Scan -ScanType 1

# Realizar un análisis completo
"%ProgramFiles%\Windows Defender\MpCmdRun.exe" -Scan -ScanType 2
            </code></pre>
            <h4>macOS (ClamXAV)</h4>
            <pre><code>
# Ejecutar un análisis con ClamAV
clamscan -r /ruta/a/tu/carpeta
            </code></pre>
            <h4>Linux (ClamAV)</h4>
            <pre><code>
# Actualizar la base de datos de virus
sudo freshclam

# Ejecutar un análisis en un directorio específico
clamscan -r /ruta/a/tu/carpeta
            </code></pre>
        </div>
    </section>

    <section class="antivirus-suggestions">
        <h3>Sugerencias de Antivirus Gratuitos y Seguros</h3>
        <ul>
            <li><strong>Windows Defender:</strong> Integrado en Windows 10 y 11, ofrece protección en tiempo real y actualizaciones automáticas.</li>
            <li><strong>Avast Free Antivirus:</strong> Disponible para Windows y macOS, con características básicas de protección.</li>
            <li><strong>Bitdefender Antivirus Free Edition:</strong> Proporciona una protección ligera y eficaz.</li>
            <li><strong>ClamAV:</strong> Un antivirus de código abierto muy efectivo en varias plataformas.</li>
            <li><strong>Sophos Home Free:</strong> Ofrece protección contra malware y phishing, con un panel de control en línea.</li>
        </ul>
    </section>

    <div class="center">
        <img src="../assets/img/antivirus.png" alt="Imagen de Antivirus">
    </div>

    <section class="additional-resources">
        <h3>Recursos Adicionales</h3>
        <h4>Links, libros, cursos, etc.</h4>
        <ul>
            <li><a href="https://www.av-test.org/en/antivirus/home-windows/">AV-TEST - Comparativa de Antivirus</a></li>
            <li><a href="https://www.udemy.com/course/antivirus-fundamentals/">Curso de Fundamentos de Antivirus en Udemy</a></li>
            <li><a href="https://www.amazon.com/Antivirus-For-Dummies-Cybersecurity/dp/1119560290">Libro: Antivirus For Dummies</a></li>
        </ul>
    </section