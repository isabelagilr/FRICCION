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


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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

                <div class="row" id="NuevoRegistro">
                    <div class="col-lg-6 col-sm-6">
                        <form action="" method="post">
                           
                             <h2>Resgistro de Movimientos</h2>
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="movimiento">Id Movimiento </label>
                                        <input id="movimiento" name="movimiento" class="form-control" type="text" value="" readonly/> 
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fecha">Fecha </label>
                                        <input id="fecha" name="fecha" class="form-control" type="text" value="<?php echo date('Y-m-d'); ?>" readonly/> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="encargado">Encargado </label>
                                            <input id="encargado" name="encargado" class="form-control" type="text" value="<?php echo $_SESSION['usuario']; ?>" readonly/> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="hora">Hora </label>
                                        <input id="hora" name="hora" class="form-control" type="text" value="<?php echo date('G:i:s'); ?>" readonly/> 
                                    </div>
                                </div>
                            </div>
                            <div class="divider">Detalles del ingreso al almacen</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="almacen">Almacen </label>
                                        <select name="almacen" class="form-control">
                                            <option value="0">Seleccione</option>
                                            <option value="1">central</option>
                                          
                                        </select>
                                    </div>
                                </div>
                              
                              <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="producto">Producto </label>
                                         <select name="prod" class="form-control">
                                            <option value="0">Seleccione</option>
                                            <option value="1">rodamineto</option>
                                            <option value="2">electrodo</option>
                                            <option value="3">lija</option>
                                            <option value="4">termico trifasico</option>
                                            <option value="5">tuerca m6</option>
                                            <option value="6">cilindro neumatico</option>
                                            <option value="7">resistencia 200w</option>
                                            <option value="8">motor electrico 11kw</option>
                                            <option value="9">correa b58</option>
                                            <option value="10">valvula reguladora</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6"> 
                                    <div class="form-group">
                                        <label for="tipomov">Tipo de movimiento </label>
                                        <input id="tipomov" name="tipomov" class="form-control" type="text" value="Salida" readonly /> 
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label  for="cantidad">Cantidad de items que salen </label>
                                        <input id="cantidad" name="cantidad" class="form-control" type="text" value="" required/> 
                                    </div>
                                </div> 
                            </div>
                            <div class="divider">Otros detalles</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="solicitante"> Id Solicitante </label>
                                        <input id="solicitante" name="solicitante" class="form-control" type="text" value="" required/> 
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="maquina">Maquina </label>
                                        <select name="maquina" class="form-control">
                                            <option value="0">Seleccione</option>
                                            <option value="2">pr-pre-01</option>
                                            <option value="3">pr-mau-02</option>
                                            <option value="4">pr-per-04</option>
                                            <option value="5">ta-tor-02</option>
                                            <option value="6">pr-mol-02</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                           
                            <input id="saveForm" class="btn btn-primary" type="submit" name="Guardar" value="Guardar" />
                        </form>	
                        <br>
                           <a href="bienvenida.php" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> OK</a> 
                           </br>
                      
                    </div>
     
                </div>
                <?php
                
                
                
                
                
                
                
 if($_POST['Guardar'])
          {
                
                $fecha=$_POST['fecha'];
                $encargado=$_POST['encargado'];
                $hora=$_POST['hora'];
                $almacen=$_POST['almacen'];
                $product=$_POST['prod'];
                $tipomov=$_POST['tipomov'];
                $cantidad=$_POST['cantidad'];
                $solicitante=$_POST['solicitante'];
                $maquina=$_POST['maquina'];
                
                 $sql=" INSERT INTO `tbmovimiento` VALUES ("."null,'".$fecha."','".$fecha."''".$hora."','".$cantidad."','".$tipomov."','"
                        .$almacen."','".$product."',(select idpersona from tbpersona where usuario='".$encargado."'))";
                       
                echo $sql;
                $result = mysqli_query($link,$sql);
                if($result){
                    header("Location: movimientoss.php");
                    echo "<div class=\"alert alert-success\">Registro exitoso</div>";
                }else{
                    echo "<div class=\"alert alert-danger\">".mysqli_errno($link) ." - ". mysqli_error($link)."</div>";
                }
                
                    $sql2=" INSERT INTO `tbsalida` VALUES ("
                        ."'".$solicitante."',"
                         ."(select max(idmovimiento) from tbmovimiento),'".$maquina."')";
                echo $sql2;
                $result2 = mysqli_query($link,$sql2);
                if($result2){
                    header("Location: movimientoss.php");
                    echo "<div class=\"alert alert-success\">Registro exitoso</div>";
                }else{
                    echo "<div class=\"alert alert-danger\">".mysqli_errno($link) ." - ". mysqli_error($link)."</div>";
                }
            }
                ?>
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
