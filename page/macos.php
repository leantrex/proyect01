<?php
$currentPage = $_GET['page'] ?? 'home.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad en macOS</title>
    <link rel="stylesheet" href="estilo.css"> <!-- Incluye el archivo CSS -->
</head>

<body>
    <?php include('sibedar.php'); ?> <!-- Incluir el menú -->

    <main class="content">

    <article class="macos-content">
    <h2>Seguridad en macOS</h2>
    
    <section class="intro">
        <p>macOS es conocido por su enfoque en la seguridad, pero no es inmune a las vulnerabilidades. A lo largo de los años, ha enfrentado diversas amenazas que han comprometido la seguridad de sus usuarios. Esta guía te ayudará a entender cómo mejorar la seguridad en tu sistema macOS.</p>
    </section>

    <section class="historical-vulnerabilities">
        <h3>Vulnerabilidades Históricas en macOS</h3>
        <ul>
            <li><strong>Gatekeeper Bypass (2016):</strong> Una vulnerabilidad que permitía a los atacantes eludir el sistema de seguridad Gatekeeper y ejecutar aplicaciones maliciosas.</li>
            <li><strong>Zero-Day Exploits:</strong> macOS ha sido blanco de exploits de día cero que permiten a los atacantes ejecutar código arbitrario sin autorización.</li>
            <li><strong>Malware como OSX/MaMi:</strong> Un malware que afectó a los usuarios de macOS, permitiendo el control remoto del sistema.</li>
        </ul>
    </section>

    <section class="key-concepts">
        <h3>Conceptos Clave de Seguridad en macOS</h3>
        <ul>
            <li><strong>Actualizaciones del sistema:</strong> Mantener el sistema operativo y las aplicaciones actualizadas es crucial para la seguridad.</li>
            <li><strong>Firewall:</strong> Configurar el Firewall de macOS para controlar el tráfico de red.</li>
            <li><strong>Antivirus:</strong> Considerar el uso de software antivirus para proteger contra malware.</li>
            <li><strong>Permisos de usuario:</strong> Configuración adecuada de cuentas de usuario y permisos.</li>
            <li><strong>Autenticación:</strong> Uso de contraseñas fuertes y autenticación de dos factores.</li>
        </ul>
    </section>

    <section class="best-practices">
        <h3>Mejores Prácticas de Seguridad</h3>
        <ol>
            <li>Utiliza contraseñas fuertes y únicas para cada cuenta.</li>
            <li>Activa la autenticación de dos factores donde sea posible.</li>
            <li>Desactiva cuentas de usuario innecesarias.</li>
            <li>Usa el Control de Seguridad de macOS para prevenir cambios no autorizados.</li>
            <li>Realiza copias de seguridad de tus datos regularmente usando Time Machine.</li>
        </ol>
    </section>

    <section class="command-examples">
        <h3>Comandos Útiles para la Seguridad en macOS</h3>
        <div class="code-block">
            <pre><code>
# Actualizar el sistema (macOS)
softwareupdate --install --all

# Configurar el Firewall
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setglobalstate on

# Comprobar el estado del Firewall
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getglobalstate

# Realizar un escaneo de malware (si tienes un antivirus instalado)
# Ejemplo con Malwarebytes
mbam scan
            </code></pre>
        </div>
    </section>

    <section class="additional-resources">
        <h3>Recursos Adicionales</h3>
        <ul>
            <li><a href="https://support.apple.com/es-es/HT201222" target="_blank" rel="noopener noreferrer">Guía de Seguridad de Apple para macOS</a></li>
            <li><a href="https://www.apple.com/es/internet-security/" target="_blank" rel="noopener noreferrer">Seguridad en Internet de Apple</a></li>
            <li><a href="https://www.cnet.com/tech/services-and-software/how-to-secure-your-mac/" target="_blank" rel="noopener noreferrer">Cómo asegurar tu Mac - CNET</a></li>
        </ul>
    </section>