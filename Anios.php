<?php include ("header.php")?>

<script src="scripts/anios.js"></script>    
    <div class="container">
        <h1>Lista de años Bisciestos</h1>
        <h2>Otra cosa</h2>

        <input type="number" id="anioInicio"></input>
        <input type="number" id="anioFinal"></input>

        <button onclick="anios()">OK</button>
        <button onclick="clean()">Limpiar</button>
        <div id= "aniosV"></div>

        <h1>Proximo año bisciesto</h1>
        <button onclick="diasFaltantes()">Calcular</button>
        <div id="faltantes"></div>

       
    </div>

<?php include("footer.php")?>