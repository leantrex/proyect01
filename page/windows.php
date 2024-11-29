<?php
$currentPage = $_GET['page'] ?? 'home.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad en Windows</title>
    <link rel="stylesheet" href="estilo.css"> <!-- Incluye el archivo CSS -->
</head>

<body>
    <?php include('sibedar.php'); ?> <!-- Incluir el menú -->

    <main class="content">

    <article class="windows-content">
    <h2>Seguridad en Windows</h2>
    
    <section class="intro">
        <p>Windows es uno de los sistemas operativos más utilizados, lo que lo convierte en un objetivo común para atacantes. Esta guía te ayudará a entender los conceptos básicos de seguridad en Windows y cómo implementarlos.</p>
    </section>

    <section class="key-concepts">
        <h3>Conceptos Clave de Seguridad en Windows</h3>
        <ul>
            <li><strong>Actualizaciones del sistema:</strong> Mantener el sistema operativo y las aplicaciones actualizadas.</li>
            <li><strong>Antivirus:</strong> Uso de software antivirus para proteger contra malware.</li>
            <li><strong>Firewall:</strong> Configuración del Firewall de Windows para controlar el tráfico de red.</li>
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
            <li>Usa el Control de Cuentas de Usuario (UAC) para prevenir cambios no autorizados.</li>
            <li>Realiza copias de seguridad de tus datos regularmente.</li>
        </ol>
    </section>

    <section class="command-examples">
        <h3>Comandos Útiles para la Seguridad</h3>
        <div class="code-block">
            <pre><code>
# Actualizar el sistema (Windows 10)
Start-Process "powershell" -ArgumentList "sfc /scannow" -Verb RunAs

# Configurar el Firewall
New-NetFirewallRule -DisplayName "Permitir tráfico HTTP" -Direction Inbound -Protocol TCP -LocalPort 80 -Action Allow

# Comprobar el estado del Firewall
Get-NetFirewallProfile | Select-Object -Property Name, Enabled

# Realizar un escaneo de malware
Start-MpScan -ScanType QuickScan
            </code></pre>
        </div>
    </section>

    <section class="additional-resources">
        <h3>Recursos Adicionales</h3>
        <ul>
            <li><a href="https://docs.microsoft.com/es-es/windows/security/threat-protection/windows-defender-antivirus/windows-defender-antivirus-overview" target="_blank" rel="noopener noreferrer">Introducción a Windows Defender Antivirus</a></li>
            <li><a href="https://www.microsoft.com/es-es/security/blog/2021/02/25/5-steps-to-protect-your-windows-10-pc-from-cybercriminals/" target="_blank" rel="noopener noreferrer">5 pasos para proteger tu PC con Windows 10</a></li>
            <li><a href="https://www.microsoft.com/es-es/security/blog/category/security-basics/" target="_blank" rel="noopener noreferrer">Blog de Seguridad de Microsoft</a></li>
        </ul>
    </section>
    </article>
        
    </main>
</body>
</html>
