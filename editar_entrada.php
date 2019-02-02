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

$idmov=  $_GET['id']; // aqui se revibe el parametro que se pasa por utl para realizar la consulta

$sqlE="select m.*,e.*
from tbentrada e
join tbmovimiento m on m.idmovimiento=e.idmovimiento
where m.idmovimiento=".$idmov;// <-- en esa variable se almacena el valor y con eso traemos todo los datos del movimietno

$resE = mysqli_query($link, $sqlE); // en esta linea tenemos el resultado de la consulta

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
                            <div class="form_description">
                                <h2>modificar Movimientos</h2>
<?php
while ($rowE = mysqli_fetch_array($resE)) { // y aqui asigno a un array la fila de respuesta de la consulta y luego la pinto en todo el formulario
    
?>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="movimiento">Id Movimiento </label>
                                        <input id="movimiento" name="movimiento" class="form-control" type="text" value="<?php echo $rowE[0]; ?>" readonly/> 
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fecha">Fecha </label>
                                        <input id="fecha" name="fecha" class="form-control" type="text" value="<?php echo $rowE[1]; ?>" readonly/> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="encargado">Encargado </label>
                                            <input id="encargado" name="encargado" class="form-control" type="text" value="<?php echo $rowE[7]; ?>" readonly/> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="hora">Hora </label>
                                        <input id="hora" name="hora" class="form-control" type="text" value="<?php echo $rowE[2]; ?>" readonly/> 
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
                                            <?php
                                                $sqlAl="Select idalmacen, nombreref from tbalmacen";
                                                $resAl = mysqli_query($link,$sqlAl) or die('ERROR!!');
                                                while($rowAl =  mysqli_fetch_row($resAl)){                                                
                                            ?>
                                            <option value="<?php echo $rowAl[0]; ?>" <?php if($rowAl[0]==$rowE[5]){ echo "selected"; } ?>><?php echo $rowAl[1]; ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="producto">Producto </label>
                                        <select name="producto" class="form-control">
                                            <option value="0">Seleccione</option>
                                            <?php
                                                $sqlPr="Select idproducto, nombre from tbproducto";
                                                $resPr = mysqli_query($link,$sqlPr) or die('ERROR!!');
                                                while($rowPr =  mysqli_fetch_row($resPr)){                                                
                                            ?>
                                            <option value="<?php echo $rowPr[0]; ?>" <?php if($rowPr[0]==$rowE[6]){ echo "selected"; } ?>><?php echo $rowPr[1]; ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6"> 
                                    <div class="form-group">
                                        <label for="tipomov">Tipo de movimiento </label>
                                        <input id="tipomov" name="tipomov" class="form-control" type="text" value="Entrada" readonly /> 
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label  for="cantidad">Cantidad de items que entran</label>
                                        <input id="cantidad" name="cantidad" class="form-control" type="text" value="<?php echo $rowE[3]; ?>" required/> 
                                    </div>
                                </div> 
                            </div>
                            <div class="divider">Datos del producto</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="costo">Costo unitario</label>
                                        <input id="costo" name="costo" class="form-control" type="text" value="<?php echo $rowE[8]; ?>" required/> 
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="estado">Estado </label>
                                        <select name="estado" class="form-control">
                                            <option value="0">Seleccione</option>
                                            <option value="1" <?php if($rowE[12]==1){ echo "selected"; } ?>>Nuevo</option>
                                            <option value="2" <?php if($rowE[12]==2){ echo "selected"; } ?>>Usado</option>
                                            <option value="3" <?php if($rowE[12]==3){ echo "selected"; } ?>>Reparado</option>
                                        </select>   
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6"> 
                                    <div class="form-group">
                                        <label for="nombreprov">Nombre provedor </label>
                                        <input id="nombreprov" name="nombreprov" class="form-control" type="text" value="<?php echo $rowE[9]; ?>" required /> 
                                    </div>
                                </div>
                                <div class="col-lg-6"> 
                                    <div class="form-group">
                                        <label for="ubicacion">Ubicacion</label>
                                        <input id="ubiacion" name="ubicacion" class="form-control" type="text" value="<?php echo $rowE[10]; ?>" required /> 
                                    </div>
                                </div>
<?php
}
?>
                            </div>
                            <input id="saveForm" class="btn btn-primary" type="submit" name="Guardar" value="Guardar" />
                            <br>
                            <a href="bienvenida.php" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> OK</a> 
                            </br>
                    </div>
                </div>
<?php
if ($_POST['Guardar']) {
    //$idmov = $_POST['idmovimiento'];
    $fecha = $_POST['fecha'];
    $encargado = $_POST['encargado'];
    $hora = $_POST['hora'];
    $almacen = $_POST['almacen'];
    $producto = $_POST['producto'];
    $tipomov = $_POST['tipomov'];
    $cantidad = $_POST['cantidad'];
    $costo = $_POST['costo'];
    $estado = $_POST['estado'];
    $nombreprov = $_POST['nombreprov'];
    $ubicacion = $_POST['ubicacion'];


    $sql = " update `tbmovimiento` SET fecha='" . $fecha . "',hora='" . $hora . "',cantidad='" . $cantidad . "',tipomovimiento='" . $tipomov . "',idalmacen='"
            . $almacen . "',idproducto='" . $producto . "',idencargado='" . $encargado . "' WHERE idmovimiento=".$idmov;

    echo $sql;
    $result = mysqli_query($link, $sql);
    if ($result) {
        header("Location: movimientose.php");
        echo "<div class=\"alert alert-success\">Actualizacion exitoso</div>";
    } else {
        echo "<div class=\"alert alert-danger\">" . mysqli_errno($link) . " - " . mysqli_error($link) . "</div>";
    }



    $sql2 = " update `tbentrada` SET costo='" . $costo . "',provedor='" . $nombreprov . "',ubicacionenalmacen='" . $ubicacion . "',idestadoproducto='" . $estado . "' WHERE idmovimiento=" . $idmov ;
    echo $sql2;
    $result2 = mysqli_query($link, $sql2);
    if ($result2) {
        header("Location: movimientose.php");
        echo "<div class=\"alert alert-success\">Registro exitoso</div>";
    } else {
        echo "<div class=\"alert alert-danger\">" . mysqli_errno($link) . " - " . mysqli_error($link) . "</div>";
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