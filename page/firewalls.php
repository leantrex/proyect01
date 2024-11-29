<?php
$currentPage = $_GET['page'] ?? 'home.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firewalls</title>
    <link rel="stylesheet" href="../estilo.css"> <!-- Incluye el archivo CSS -->
</head>

<body>
    <?php include('sibedar.php'); ?> <!-- Incluir el menú -->

    <main class="content">

    <article class="linux-content">
    <h2>¿Qué es un Firewall?</h2>
    
    <section class="intro">
        <p>Un firewall es un sistema de seguridad de red que monitorea y controla el tráfico de entrada y salida basado en reglas de seguridad preestablecidas. Su función principal es crear una barrera entre una red interna confiable y redes externas no confiables, como Internet.</p>
    </section>

    <section class="key-concepts">
        <h3>¿Cómo funciona un Firewall?</h3>
        <ul>
            <li><strong>Redes Públicas Externas:</strong> Se refiere al Internet público o a extranets, donde el tráfico puede ser potencialmente peligroso.</li>
            <li><strong>Redes Privadas Internas:</strong> Redes domésticas o intranets empresariales que son más seguras y controladas.</li>
            <li><strong>Redes de Perímetro:</strong> Redes fronterizas que actúan como un buffer entre las redes internas y externas, a menudo utilizando hosts bastión para mejorar la seguridad.</li>
        </ul>
    </section>

    <section class="best-practices">
        <h3>Funciones de un Firewall</h3>
        <h4>Aparte de realizar escaneos de red, los firewalls pueden:</h4>
        <ul>
            <li>Filtrar tráfico no deseado basado en direcciones IP, protocolos y puertos.</li>
            <li>Registrar y auditar el tráfico de red para análisis posterior.</li>
            <li>Proporcionar protección contra ataques de denegación de servicio (DoS).</li>
            <li>Implementar VPNs (Redes Privadas Virtuales) para conexiones seguras.</li>
        </ul>
    </section>

    <section class="command-examples">
        <h3>Comandos Útiles para la Configuración de Firewalls</h3>
        <div class="code-block">
            <pre><code>
# Comando para permitir tráfico HTTP (puerto 80) en iptables
sudo iptables -A INPUT -p tcp --dport 80 -j ACCEPT

# Comando para bloquear tráfico SSH (puerto 22) en iptables
sudo iptables -A INPUT -p tcp --dport 22 -j DROP

# Comando para listar las reglas actuales en iptables
sudo iptables -L

# Comando para guardar las reglas de iptables
sudo iptables-save > /etc/iptables/rules.v4

# Comando para reiniciar el servicio de firewall en UFW (Uncomplicated Firewall)
sudo ufw reload

# Comando para permitir tráfico de un puerto específico en UFW
sudo ufw allow 8080
            </code></pre>
        </div>
    </section>
    <div class= "center">

    <img src="../assets/img/firewalls1.png" alt="Imagen de Firewalls">
    </div>

    <section class="additional-resources">
        <h3>Recursos Adicionales</h3>
        <h4>Links, libros, cursos, etc.</h4>
        <ul>
            <li><a href="https://www.cisco.com/c/en/us/products/security/firewalls/what-is-a-firewall.html">Cisco - ¿Qué es un Firewall?</a></li>
            <li><a href="https://www.udemy.com/course/firewall-fundamentals/">Curso de Fundamentos de Firewalls en Udemy</a></li>
            <li><a href="https://www.amazon.com/Firewalls-For-Dummies-Cybersecurity/dp/1119560290">Libro: Firewalls For Dummies</a></li>
        </ul>
    </section>
</article>

        
    </main>
</body>
</html>