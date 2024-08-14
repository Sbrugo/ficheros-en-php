<?php

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $cumpleanios = $_POST["cumpleanios"];

    $array = array("nombre" => $nombre, "apellidos" => $apellidos, "cumpleanios" => $cumpleanios);

    if(file_exists("personas.json")){
        $contenido = file_get_contents("personas.json");
        $data = json_decode($contenido, true);

        if (!is_array($data)) {
            $data = array(); // Inicializa como un array si json_decode falla
        }

        array_push($data, $array);
        file_put_contents("personas.json", json_encode($data));
    }else{
        $data = array();
        array_push($data, $array);
        
        $f = fopen("personas.json", "w");
        fwrite($f, json_encode($data));
        fclose($f);
    }
    header("Location: index.php");
?>