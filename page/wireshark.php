<?php
$currentPage = $_GET['page'] ?? 'home.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireshark - Análisis de Redes</title>
    <link rel="stylesheet" href="estilo.css"> <!-- Incluye el archivo CSS -->
</head>

<body>
    <?php include('sibedar.php'); ?> <!-- Incluir el menú -->

    <main class="content">

    <article class="wireshark-content">
    <h2>Wireshark: Análisis de Redes</h2>
    
    <section class="intro">
        <p>Wireshark es una herramienta de código abierto utilizada para el análisis del tráfico de red. Permite capturar y explorar los datos que circulan por una red en tiempo real, facilitando la identificación de problemas y la monitorización de la seguridad.</p>
    </section>

    <section class="key-concepts">
        <h3>Conceptos Clave de Wireshark</h3>
        <ul>
            <li><strong>Captura de paquetes:</strong> Intercepta y guarda los paquetes que pasan por una red.</li>
            <li><strong>Protocolos soportados:</strong> Compatible con miles de protocolos de red.</li>
            <li><strong>Filtros:</strong> Uso de filtros para concentrarse en el tráfico relevante.</li>
            <li><strong>Interfaz gráfica:</strong> Proporciona una interfaz visual para facilitar la navegación.</li>
            <li><strong>Exportación de datos:</strong> Posibilidad de exportar datos a diferentes formatos.</li>
        </ul>
    </section>

    <section class="best-practices">
        <h3>Mejores Prácticas al Usar Wireshark</h3>
        <ol>
            <li>Captura tráfico solo en redes donde tienes autorización.</li>
            <li>Utiliza filtros de captura para limitar los datos relevantes.</li>
            <li>Analiza el tráfico en tiempo real y guarda las capturas para un análisis posterior.</li>
            <li>Protege la información sensible que puedas capturar.</li>
            <li>Mantente actualizado con las últimas versiones para aprovechar mejoras y correcciones de seguridad.</li>
        </ol>
    </section>

    <section class="command-examples">
        <h3>Ejemplos de Uso en Diferentes Sistemas Operativos</h3>
        <div class="code-block">
            <h4>Windows</h4>
            <pre><code>
# Iniciar Wireshark
wireshark.exe

# Aplicar filtro para mostrar solo tráfico HTTP
http
            </code></pre>

            <h4>macOS</h4>
            <pre><code>
# Iniciar Wireshark desde la terminal
sudo /Applications/Wireshark.app/Contents/MacOS/Wireshark

# Aplicar filtro para mostrar tráfico de un IP específico
ip.addr == 192.168.1.1
            </code></pre>

            <h4>Linux</h4>
            <pre><code>
# Iniciar Wireshark en modo superusuario
sudo wireshark

# Filtro para mostrar solo tráfico de DNS
dns
            </code></pre>
        </div>
    </section>

    <section class="additional-resources">
        <h3>Recursos Adicionales</h3>
        <ul>
            <li><a href="https://www.wireshark.org/" target="_blank" rel="noopener noreferrer">Página oficial de Wireshark</a></li>
            <li><a href="https://www.wireshark.org/docs/wsug_html_chunked/" target="_blank" rel="noopener noreferrer">Guía de usuario de Wireshark</a></li>
            <li><a href="https://www.wireshark.org/download.html" target="_blank" rel="noopener noreferrer">Descarga Wireshark</a></li>
        </ul>
    </section>
    </article>
        
    </main>
</body>
</html>
