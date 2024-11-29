<?php
$currentPage = $_GET['page'] ?? 'home.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metasploit</title>
    <link rel="stylesheet" href="../estilo.css"> <!-- Incluye el archivo CSS -->
</head>

<body>
    <?php include('sibedar.php'); ?> <!-- Incluir el menú -->

    <main class="content">

    <article class="linux-content">
    <h2>¿Qué es Metasploit?</h2>
    
    <section class="intro">
        <p>Metasploit es una plataforma de desarrollo para la creación, prueba y ejecución de exploits contra sistemas remotos. Originalmente desarrollado como un proyecto de código abierto, ahora es mantenido por Rapid7 y se utiliza ampliamente en el ámbito de la seguridad informática para pruebas de penetración y auditorías de seguridad.</p>
    </section>

    <section class="key-concepts">
        <h3>Conceptos Clave de Metasploit</h3>
        <ul>
            <li><strong>Legales:</strong> Aunque Metasploit es una herramienta gratuita, su uso debe ser ético y legal. Realizar un escaneo en una red que no sea de nuestra propiedad sin permiso explícito es considerado ilegal según la ley 19.223.</li>
            <li><strong>Exploits:</strong> Son fragmentos de código que aprovechan vulnerabilidades en un sistema para ejecutar comandos no autorizados.</li>
            <li><strong>Payloads:</strong> Son los códigos que se ejecutan en el sistema objetivo tras explotar una vulnerabilidad. Pueden ser de varios tipos, incluyendo aquellos que permiten el acceso remoto.</li>
        </ul>
    </section>

    <section class="best-practices">
        <h3>Funciones de Metasploit</h3>
        <h4>Metasploit no solo realiza escaneos de red, sino que también permite:</h4>
        <ol>
            <li>Escaneos de vulnerabilidades: Identificación de debilidades en un sistema.</li>
            <li>Explotación de vulnerabilidades: Uso de exploits para obtener acceso no autorizado.</li>
            <li>Desarrollo de exploits: Creación de nuevos exploits para vulnerabilidades desconocidas.</li>
            <li>Pruebas de penetración: Simulación de ataques para evaluar la seguridad de un sistema.</li>
        </ol>
    </section>

    <section class="command-examples">
        <h3>Comandos Útiles para la Seguridad</h3>
        <div class="code-block">
            <pre><code># Para iniciar Metasploit Framework
msfconsole</code></pre>
            <pre><code># Ejemplo de uso de un exploit
use exploit/windows/smb/ms17_010_eternalblue
set RHOST <IP objetivo>
run</code></pre>
        </div>
    </section>

    <img src="../assets/img/Metasploit1.PNG" alt="Interfaz de Metasploit">

    <section class="additional-resources">
        <h3>Recursos Adicionales</h3>
        <ul>
            <li><a href="https://www.linux.com/training-tutorials/linux-security-fundamentals-part-1-principles-and-approaches/" target="_blank" rel="noopener noreferrer">Fundamentos de Seguridad en Linux</a></li>
            <li><a href="https://www.cyberciti.biz/tips/linux-security.html" target="_blank" rel="noopener noreferrer">42 Tips de Seguridad para Linux</a></li>
            <li><a href="https://wiki.archlinux.org/index.php/Security" target="_blank" rel="noopener noreferrer">Wiki de Seguridad de Arch Linux</a></li>
            <li><a href="https://docs.rapid7.com/metasploit/">Documentación Oficial de Metasploit</a></li>
            <li><a href="https://www.cybrary.it/course/metasploit-101/">Curso Básico de Metasploit en Cybrary</a></li>
        </ul>
    </section>
</article>
        
    </main>
</body>
</html>
