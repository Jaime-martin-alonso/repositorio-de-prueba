<!--
<?php
$host = "localhost";
$dbname = "tu_base_de_datos";
$user = "tu_usuario";
$pass = "tu_contraseña";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $stmt = $pdo->query("SELECT * FROM persona");

    
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    print_r($resultados);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum Vitae</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="Foto_de_perfil.png">
            <div class="info">
                <h1>Jaime Martín Alonso</h1>
                <p>C/ Mantua Carpetanorum, 9<br>28610 Villamanta (Madrid)</p>
                <p>634 56 78 62</p>
                <p><a href="mailto:martinalonsojaime@gmail.com">martinalonsojaime@gmail.com</a></p>
            	<p><a href="https://github.com/Jaime-martin-alonso">Githup</a></p>
		        <p><a href="https://www.linkedin.com/in/jaime-martin-alonso-ba649a29a/">Linkedin</a></p>
	    </div>
        </div>

        <hr>
        <div class="section">
            <h2>FORMACIÓN</h2>
            <ul>
                <li><strong>2016 - 2020:</strong> ESO ciencias, Colegio Nova Hispalis (Madrid)</li>
                <li><strong>2021 - 2022:</strong> Grado Medio en Sistemas Microinformáticos y Redes</li>
                <li><strong>2022:</strong> Prácticas en Colegio San Ignacio de Loyola (Madrid)</li>
                <li><strong>2023 - 2025:</strong> Grado Superior en Administración de Sistemas Informáticos en Red</li>
            </ul>
        </div>
        <div class="section">
            <h2>HABILIDADES</h2>
            <ul>
                <li><strong>Habilidades Lingüísticas:</strong> Inglés nivel B2, curso "Native Learn"</li>
                <li><strong>Habilidades Comunicativas:</strong> Escucha activa, empatía, buena comunicación verbal</li>
                <li><strong>Habilidades de Gestión:</strong> Trabajo en equipo, adaptación al cambio</li>
                <li><strong>Habilidades Digitales:</strong> Word, Excel, Access, Linux, Windows, PowerPoint, Cisco, html, css, js</li>
            </ul>
          <img src="html.png" class="html">
          <img src="css.png" class="css">
          <img src="javalogo.png" class="js">
        </div>

        <div class="section">
            <h2>OTROS</h2>
            <ul>
                <li>Carnet de conducir</li>
                <li>Curso de Big Data en Fundación Telefónica</li>
            </ul>
        </div>
    </div>
<script src="animaciones.js"></script>
</body>
</html>
