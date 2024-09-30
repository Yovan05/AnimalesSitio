<?php
    class Animal{
        public $id;
        public $name;
        Public $kind;
        public $gender;
        public $wight;
    }

    function getAll(){
        $listaPokemons = [];
        $path = $_SERVER['DOCUMENT_ROOT'];
        include($path."/animalesweb/php/connection/db.php");
        $sql = "SELECT id, name, kind, gender, wight  FROM pokemon";
        $result = $connection->query($sql);
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $object = new Animal();
                $object->id = $rows["id"];
                $object->name = $rows["name"];
                $object->kind = $rows["kind"];
                $object->gender = $rows["gender"];
                $object->wight = $rows["wight"];
                $listaPokemons[] = $object;
            }
        }
        return (array)$listaPokemons;
    
    }

?>