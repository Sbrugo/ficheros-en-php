<?php
//escribir ficheros

    //funcion file open: ruta , modo
    $formulario = fopen("datos.txt", "w");

    //funcion para escribir
    fputs($formulario,"Linea 1 \n");
    fputs($formulario,"Linea 2 \n");
    fputs($formulario,"Linea 3 \n");
    fputs($formulario, "Linea 4");

    fclose($formulario);

    echo "Se ha escrito el formulario correctamente";
?>;