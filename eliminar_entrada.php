<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
date_default_timezone_set('America/La_Paz');
session_start();

include 'conexion.php';

$link = Conectarse();

$idmov =$_GET['id'];



$sqlEl = "Delete tm, me from tbentrada me left join tbmovimiento tm on tm.idmovimiento = me.idmovimiento where tm.idmovimiento =".$idmov;
$resEL = mysqli_query($link, $sqlEl) or die ('error');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <META HTTP-EQUIV='Refresh' CONTENT="2; URL=movimientose.php">
        <title>Registro de personas</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
         <div class="row">
            <div class="col-lg-12 col-sm-8">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" 
                                    data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="bienvenida.php">FRICCION</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                
                                <li><a href="#">MAQUINAS</a></li>         
                                <li><a href="#">CATEGORIAS</a></li>
                                 <li><a href="#">ESTADOS</a></li>
                                  <li><a href="#">ALMACENES</a></li>
                                   <li><a href="#">PRODUCTOS</a></li>
                                   
                                    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                       aria-expanded="false">MOVIMIENTOS<span class="caret"></span>
                                    </a>
                                   <ul class="dropdown-menu" role="menu">
                                   
                                           
                                        <li><a href="movimientose.php">Entradas</a></li>
                                            <li class="divider"></li>
                                        <li><a href="movimientoss.php">Salidas</a></li>
                                    </ul>
                                    </li>
                                    
                                    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                       aria-expanded="false">CONTEO<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="conteo.php">Registar</a></li>
                                       
                                    </ul>
                                    </li>
                                    
                                      <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                       aria-expanded="false">INFORMES <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="infome_movimiento.php">Informe de movimientos</a></li>
                                            <li class="divider"></li>
                                        <li><a href="informe_capital.php">Informe de capital</a></li>
                                    </ul>
                                    </li>
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                       aria-expanded="false">USUARIOS <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="personas.php">Personas</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        <?php echo $_SESSION['usuario']; ?> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Ver Perfil</a></li>
                                        <li><a href="#"> Cambiar Clave</a></li>
                                        <li class="divider"></li>
                                        <li><a href="salir">Cerrar Sesion</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>

        <div id="wrapper">
            <div class="container">

                <h3 class="alert alert-info">Registro eliminado correctamente</h3>
            </div>
        </div>

        <!-- Librería jQuery requerida por los plugins de JavaScript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- Todos los plugins JavaScript de Bootstrap (también puedes
             incluir archivos JavaScript individuales de los únicos
             plugins que utilices) -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
