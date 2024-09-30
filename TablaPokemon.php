<?php include ("header.php")?>
<body>
<div class="container">
        <h1>Tabla de Ppokemons</h1>
        <h2>Consulte e ingrese los pokemons capturados</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Sexo</th>
                    <th>Peso</th>
                </tr>
            </thead>
            <tbody>
               <?php
                    include("php/entities/Pokemon.php");
                    $registros = getAll();
                    if(count($registros) > 0){
                        foreach($registros as $row){
                            echo "<tr>".
                            "<td>" . $row->name . "</td>".
                            "<td>" . $row->kind . "</td>".
                            "<td>" . $row->gender . "</td>".
                            "<td>" . $row->wight . "</td>".
                            "</tr>";
                        }
                    }
               ?>
            </tbody>
        </table>
    </div>
</body>
<?php include("footer.php")?>