<?php


    class RutasModelo
    {
        /** Funcion  que arnma las rutas del menú */
        static public function RutasModelo($ruta)
        {

            if($ruta == "clientes/clientes"
            || $ruta == "clientes/crear.cliente"
            || $ruta == "home/home"
            || $ruta == "productos/productos"
            || $ruta == "productos/crear.producto"
            || $ruta == "reportes/facturas"
            || $ruta == "reportes/factura.cliente"
            || $ruta == "reportes/factura.pdf"
            || $ruta == "seguridad/seguridad"
            || $ruta == "usuarios/usuarios"
            || $ruta == "usuarios/crear.roles")
            {
                /** crar variable para guardar la ruta al archivo php que vamos a abrir */
                $pagina = "./vistas/" . $ruta . ".vista.php" ;

                return $pagina;

                /** ./vistas/inventarios/salidas/salidas.vista.php */
            }
        }

    }

?>