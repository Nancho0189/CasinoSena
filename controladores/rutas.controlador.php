<?php

    class RutasControlador{


            public function IniciarPlantilla(){

                include "./vistas/plantilla/plantilla.vista.php";

            }

            /** armar la ruta del formulario revibido desde la visata */
            public function Rutas(){

                if(isset($_GET["ruta"])){
                    $ruta = $_GET["ruta"];
                }
                else{
                    $ruta = "home/home";
                }

                /** LLamar al modelo para armar la ruta */
                $rutaformulario = RutasModelo::RutasModelo($ruta);

                include $rutaformulario;

            }


    }



?>