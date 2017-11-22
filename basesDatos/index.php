<?php
session_start();
?>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>SISTEMA FERRETERÍA</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/roboto.css" type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body ng-app="app">

<div class="wrapper" ng-controller="mainController">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">
    <!--
        data-color="blue | azure | green | orange | red | purple"
        data-image sidebar-1|2|3|4|5.jpg
    -->
        <?php
        if(!empty($_SESSION)){
            echo "<div class=\"sidebar-wrapper\">
            <div class=\"logo\">
                <a href=\"#\" class=\"simple-text\">
                    <span ng-bind=\"nombreApp\"></span>
                </a>
            </div>

            <ul class=\"nav\" id=\"menu\">
            <dash-bord></dash-bord>
            <emp-card></emp-card>
            <prov-card></prov-card>
            <venta-card></venta-card>
            <inv-card></inv-card>
            </ul>
    	</div>";
        }else{
            echo "<div class=\"sidebar-wrapper\">
            <div class=\"logo\">
                <a href=\"#\" class=\"simple-text\">
                    <span ng-bind=\"nombreApp\"></span>
                </a>
            </div></div>";
            header("location:login.php");
        }
        ?>
        <!--<div well-mess></div>-->
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <!--
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>-->
                        <?php
                        if(empty($_SESSION)){
                        echo "<li>
                            <a href=\"login.php\">
                                <p>Sign in</p>
                            </a>
                        </li>";
                        }
                        ?>
                    </ul>
                    <?php
                    if(!empty($_SESSION)){
                        echo "<ul class=\"nav navbar-nav navbar-right\">
                            <li>
                                <a href=\"logic.php?logout=1\">
                                    <p>Log out</p>
                                </a>
                            </li>
						  <li class=\"separator hidden-lg hidden-md\"></li>
                        </ul>";
                    }
                    
                    ?>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- AQUI VA EL CONTENIDO DE ANGULAR -->
                    <div ng-view></div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> UAA. ISC 7C
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>
    <script src="assets/js/angular.min.js" type="text/javascript"></script>
    <script src="assets/js/angular-route.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Funciones globales -->
    <script src="assets/js/global.js"></script>

    <!-- App  -->
    <script src="app/app.js"></script>
    <script src="MenuControl.js"></script>

    <!-- Components -->
    <script src="app/controllers/empleados/empleados.controller.js"></script>
    <script src="app/controllers/proveedores/proveedores.controller.js"></script>
    <script src="app/controllers/dashboard/dashboard.controller.js"></script>


</html>
