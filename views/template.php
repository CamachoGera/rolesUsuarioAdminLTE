<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="views/resources/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="views/resources/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="views/resources/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="views/resources/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="views/resources/dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Incluir el menú superior de la aplicación -->
        <?php include 'moduls/header.php'; ?>
        <!-- Incluir el menú lateral de la aplicación -->
        <?php include 'moduls/menu.php'; ?>

        <div class="content-wrapper">
            <?php
                // Realizar el llamado dinamico a las rutas mediante el verbo get

                if (isset($_GET['pages'])) {
                    if($_GET['pages'] === 'usuarios' || $_GET['pages'] === 'roles') {
                        // Hacer el llamado de la página que se solicita
                        include "pages/" . $_GET['pages'] . ".php";
                    }
                }
            ?>
        </div>
        <!-- Incluir el pie de página de la aplicación -->
        <?php include 'moduls/footer.php'; ?>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="views/resources/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="views/resources/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="views/resources/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="views/resources/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="views/resources/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="views/resources/dist/js/demo.js"></script>
    <script>
        $(document).ready(function () {
            $('.sidebar-menu').tree()
        })
    </script>
</body>

</html>