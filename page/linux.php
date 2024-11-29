<?php
$currentPage = $_GET['page'] ?? 'home.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>linux </title>
    <link rel="stylesheet" href="../estilo.css"> <!-- Incluye el archivo CSS -->
</head>

<body>
    <?php include('sibedar.php'); ?> <!-- Incluir el menú -->

    <main class="content">

    <article class="linux-content">
    <h2>Seguridad en Linux</h2>
    
    <section class="intro">
        <p>Linux es conocido por su robustez y seguridad, pero aún así requiere una configuración y mantenimiento adecuados para garantizar la máxima protección. Esta guía te ayudará a entender los conceptos básicos de seguridad en Linux y cómo implementarlos.</p>
    </section>

    <section class="key-concepts">
        <h3>Conceptos Clave de Seguridad en Linux</h3>
        <ul>
            <li><strong>Permisos de archivos:</strong> Control de acceso a archivos y directorios.</li>
            <li><strong>Usuarios y grupos:</strong> Gestión de cuentas y privilegios.</li>
            <li><strong>Firewall:</strong> Configuración de iptables o ufw para controlar el tráfico de red.</li>
            <li><strong>Actualizaciones del sistema:</strong> Mantener el sistema y las aplicaciones actualizadas.</li>
            <li><strong>SSH:</strong> Configuración segura para acceso remoto.</li>
        </ul>
    </section>

    <section class="best-practices">
        <h3>Mejores Prácticas de Seguridad</h3>
        <ol>
            <li>Utiliza contraseñas fuertes y únicas para cada cuenta.</li>
            <li>Implementa autenticación de dos factores cuando sea posible.</li>
            <li>Minimiza los servicios en ejecución y cierra los puertos innecesarios.</li>
            <li>Utiliza SELinux o AppArmor para control de acceso obligatorio.</li>
            <li>Realiza auditorías de seguridad regulares con herramientas como Lynis.</li>
        </ol>
    </section>

    <section class="command-examples">
        <h3>Comandos Útiles para la Seguridad</h3>
        <div class="code-block">
            <pre><code>
# Verificar permisos de archivos
ls -l /path/to/file

# Cambiar permisos de archivos
chmod 644 /path/to/file

# Verificar puertos abiertos
ss -tuln

# Configurar firewall (usando ufw)
sudo ufw enable
sudo ufw allow 22/tcp

# Actualizar el sistema
sudo apt update && sudo apt upgrade -y  # Para sistemas basados en Debian
sudo dnf upgrade -y  # Para sistemas basados en Red Hat
            </code></pre>
        </div>
    </section>

    <section class="additional-resources">
        <h3>Recursos Adicionales</h3>
        <ul>
            <li><a href="https://www.linux.com/training-tutorials/linux-security-fundamentals-part-1-principles-and-approaches/" target="_blank" rel="noopener noreferrer">Fundamentos de Seguridad en Linux</a></li>
            <li><a href="https://www.cyberciti.biz/tips/linux-security.html" target="_blank" rel="noopener noreferrer">42 Tips de Seguridad para Linux</a></li>
            <li><a href="https://wiki.archlinux.org/index.php/Security" target="_blank" rel="noopener noreferrer">Wiki de Seguridad de Arch Linux</a></li>
        </ul>
    </section>
</article>
        
    </main>
</body>
</html>