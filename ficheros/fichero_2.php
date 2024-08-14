
<?php
//leer ficheros

    //funcion para abrir datos y leer (r)
    $fichero = fopen("datos.txt","r");
    
    while(!feof($fichero)){
        $linea = fgets($fichero);
        echo $linea . "<br/>";
    }

    fclose($fichero);
?>