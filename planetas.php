<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planetas</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">

</head>
<body>
    <div class="navbar">
        <h1>Planetas del sistema solar</h1>
    </div>

    <div>
         <?php
            include("php/entities/planeta.php");
            $registros = getAll();
            if(count($registros) > 0){
                foreach($registros as $row){
                    echo '<p>' . $row->nombre . "</p>" .
                    '<img class="imag" src=Imagenes/' .$row->Imagen . ">" 
                    ;
                }
            }
        ?>

    </div>

</body>
</html>