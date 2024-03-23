<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CasinoSENA</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="./assets/temas/adminlte/plugins/fontawesome-free/css/all.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="./assets/temas/adminlte/dist/css/adminlte.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="./assets/temas/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="./assets/temas/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.css">
        <link rel="stylesheet" href="./assets/temas/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.css">
    </head>

    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php 
            include "encabezado.vista.php";
            include "menu.vista.php";
            
            $rutas = new RutasControlador();
            $rutas -> Rutas();

            ?>



            <?php 
            include "piedepagina.vista.php";
            ?>
            
        </div>
        <!-- ./wrapper -->


        <!-- jQuery -->
        <script src="./assets/temas/adminlte/plugins/jquery/jquery.js"></script>
        <!-- Bootstrap 4 -->
        <script src="./assets/temas/adminlte/plugins/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- AdminLTE App -->
        <script src="./assets/temas/adminlte/dist/js/adminlte.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="./assets/temas/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
         <script src="./assets/temas/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
         <script src="./assets/temas/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
         <script src="./assets/temas/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <!-- creado mio -->
        <script src="./assets/javascript/template.js"></script>

    </body>
</html>