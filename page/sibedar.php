<?php
$topics = [
    'Sistemas Operativos' => [
        'Linux' => 'linux.php',
        'Windows' => 'windows.php',
        'MacOS' => 'macos.php'
    ],
    'Herramientas para Defensa' => [
        'Firewalls' => 'firewalls.php',
        'Antivirus' => 'antivirus.php',
        'IDS/IPS' => 'ids-ips.php'
    ],
    'Herramientas para Testear Seguridad' => [
        'Nmap' => 'nmap.php',
        'Metasploit' => 'metasploit.php',
        'Wireshark' => 'wireshark.php'
    ]
];
?>

<nav class="sidebar" aria-label="Menú principal">
<link rel="stylesheet" href="../estilo.css"> <!-- Incluye el archivo CSS -->
    <a href="main.php"><h2>Inicio</h2></a>
    <?php foreach ($topics as $category => $themes): ?>
        <div class="menu-topic"><?= htmlspecialchars($category) ?></div>
        <ul>
            <?php foreach ($themes as $theme => $url): ?>
                <li>
                    <form action="<?= htmlspecialchars($url) ?>" method="get">
                        <button type="submit"><?= htmlspecialchars($theme) ?></button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</nav>
