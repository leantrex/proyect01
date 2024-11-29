<?php
$currentPage = $_GET['page'] ?? 'home.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normas ISO 27000</title>
    <link rel="stylesheet" href="../estilo.css"> <!-- Incluye el archivo CSS -->
</head>

<body>
    <?php include('sibedar.php'); ?> <!-- Incluir el menú -->

    <main class="content">
        <article class="iso-content">
            <h2>Normas ISO 27000</h2>
            
            <section class="intro">
                <p>La familia de normas ISO 27000 se centra en la gestión de la seguridad de la información. A continuación se presentan cada una de las normas que conforman esta familia:</p>
            </section>

            <section class="iso-standards">
                <h3>Normas ISO 27000</h3>
                <ul>
                    <li><strong>ISO 27000:</strong> Plantea las bases y define el lenguaje común a usar en todas las normas de la serie.</li>
                    <li><strong>ISO 27001:</strong> Es una norma certificable, en la cual se detallan todos los requisitos para implementar un SGSI.</li>
                    <li><strong>ISO 27002:</strong> Define las buenas prácticas que deben seguirse en la implementación del SGSI a través de 114 controles, organizados en 14 dominios.</li>
                    <li><strong>ISO 27003:</strong> Es una guía para la correcta implementación de un SGSI.</li>
                    <li><strong>ISO 27004:</strong> Marca la pauta para definir métricas para evaluar el rendimiento del SGSI.</li>
                    <li><strong>ISO 27005:</strong> Define cómo se debe realizar la gestión de riesgos de la SGSI y su metodología.</li>
                    <li><strong>ISO 27006:</strong> Define los requisitos que deben cumplir organizaciones que requieran ser acreditadoras de la ISO 27001.</li>
                    <li><strong>ISO 27007:</strong> Detalla los procedimientos a realizar en auditorías internas o externas.</li>
                    <li><strong>ISO 27008:</strong> Determina cómo evaluar los controles del SGSI para mitigar posibles riesgos.</li>
                    <li><strong>ISO 27009:</strong> Es un complemento de la norma 27001, incluyendo requisitos y nuevos controles para sectores específicos.</li>
                    <li><strong>ISO 27010:</strong> Determina la forma de tratar la información compartida con otras organizaciones.</li>
                    <li><strong>ISO 27011:</strong> Define principios para implementar y gestionar un SGSI en empresas de telecomunicaciones.</li>
                    <li><strong>ISO 27013:</strong> Es una guía para integrar las normas ISO 27001 e ISO 20000.</li>
                    <li><strong>ISO 27014:</strong> Establece bases y principios para el gobierno de la seguridad de la información.</li>
                    <li><strong>ISO 27015:</strong> Define principios para implementar un SGSI en empresas del sector financiero.</li>
                    <li><strong>ISO 27016:</strong> Guía para la toma de decisiones económicas relacionadas con la gestión de la seguridad de la información.</li>
                    <li><strong>ISO 27017:</strong> Guía con controles específicos para servicios en la nube, basados en la norma 27002.</li>
                    <li><strong>ISO 27018:</strong> Complemento a la norma 27001 y 27002, definiendo controles para proteger datos personales en servicios en la nube.</li>
                    <li><strong>ISO 27019:</strong> Guía basada en la norma 27002 para aplicar el SGSI a empresas del sector energético.</li>
                </ul>
            </section>
        </article>
    </main>
    <?php include('sibedarderecha.php'); ?> <!-- Incluir el menú -->
    

</body>
</html>