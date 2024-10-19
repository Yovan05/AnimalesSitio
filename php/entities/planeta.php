<?php
    class Planeta{
        public $id;
        public $nombre;
        Public $Imagen;
    }

    function getAll(){
        $listaPlanetas = [];
        $path = $_SERVER['DOCUMENT_ROOT'];
        include($path."/animalesweb/php/connection/db.php");
        $sql = "SELECT id, nombre, Imagen  FROM planetas";
        $result = $connection->query($sql);
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $object = new Planeta();
                $object->id = $rows["id"];
                $object->nombre = $rows["nombre"];
                $object->Imagen = $rows["Imagen"];
                $listaPlanetas[] = $object;
            }
        }
        return (array)$listaPlanetas;
    
    }

?>