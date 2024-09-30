<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Este es un sitio para practicar css y otros elementos">
    <title>Segunda practica web</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <div class="navbar">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php">Agregar</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <h1>Registro de animales</h1>
        <h2>INgrese los datos solicitados</h2>
        <form action="">
            <label for="TxfNombreAnimal">Nombre del animal:</label>
            <input type="text" maxlength="100" id="TxfNombreAnimal">

            <label for="TxfEspecie">Especie</label>
            <input type="text" maxlength="100" id="TxfEspecie">
            
            <label for="TxfColor">Color</label>
            <input type="text" maxlength="100" id="TxfColor">
        </form>

    </div>

</body>
</html>