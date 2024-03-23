<?php

    /** Incluir los archivos de controladores requeridos */
    require_once "controladores/rutas.controlador.php";



    /** Incluir los archivos de modelos requeridos */
    require_once "modelos/rutas.modelo.php";


    /**Inicializar la clase */
    $rutas = New RutasControlador();

    /** Ejecutar el la función Inicializar Plantilla */

    $rutas -> IniciarPlantilla();


?>