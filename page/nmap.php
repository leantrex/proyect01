<?php
$currentPage = $_GET['page'] ?? 'home.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nmap </title>
    <link rel="stylesheet" href="../estilo.css"> <!-- Incluye el archivo CSS -->
</head>

<body>
    <?php include('sibedar.php'); ?> <!-- Incluir el menú -->

    <main class="content">

    <article class="linux-content">
    <h2>¿Que es nmap?</h2>
    
    <section class="intro">
        <p>nmap es una herramienta esencial para la ciberseguridad </p>
    </section>

    <section class="key-concepts">
        <h3>Conceptos Clave de nmap</h3>
        <ul>
            <li><strong>legales:</strong> aun que sea una herramienta gratuita su uso debe ser en un entorno controlado ya que seria ilegal realizar un scaneo a una red que no de nuestra propiedad segun la ley 19.223.</li>
        </ul>
    </section>

    <section class="best-practices">
        <h3>funciones de nmap</h3>
        <h4>nmap aun que su principal funcionamieto es realizar scaneos  de red, tambien puede realizar otros tipos de scaneos como:</h4>

        <ol>
            <li>escaneos de vulnerabilidades</li>
            <li>escaneos de servicios</li>
            <li>escaneos de puertos</li>
            <li>escaneos de sistemas</li>
            <li>escaneos de aplicaciones</li>
            <li>escaneos de bases de datos</li>
            <li>monitoreo de red</li>

        </ol>
    </section>

    <section class="command-examples">
        <h3>Comandos Útiles para la Seguridad</h3>
        <div class="code-block">
            <pre><code># con este comando nos permite realizar  un escaneo de red ver su servicios  y puertos abiertos
nmap 192.168.0.0/24 -sV -sC </code></pre>
        </div>
    </section>
    <img src="../assets/img/nmap1.PNG" alt="">

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