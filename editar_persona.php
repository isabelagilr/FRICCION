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

$idper=  $_GET['id']; // aqui se revibe el parametro que se pasa por utl para realizar la consulta

$sqlE="select * from tbpersona where idpersona=".$idper;// <-- en esa variable se almacena el valor y con eso traemos todo los datos del movimietno

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
                                <h2>modificar usuarios</h2>
<?php
while ($rowE = mysqli_fetch_array($resE)) { // y aqui asigno a un array la fila de respuesta de la consulta y luego la pinto en todo el formulario
    
?>
                            </div>
                            <div class="row">
                                
                                    <div class="form-group">
                                        <label for="nombre">Nombre </label>
                                        <input id="nombre" name="nombre" class="form-control" type="text" value="<?php echo $rowE[1]; ?>" required/> 
                                    </div>
                              
                               
                                    <div class="form-group">
                                        <label for="apellidop">Apellido paterno </label>
                                        <input id="apellidop" name="apellidop" class="form-control" type="text" value="<?php echo $rowE[2]; ?>" required/> 
                                    </div>
                              
                          
                            
                           
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="apellidom">Apellido materno </label>
                                            <input id="apellidom" name="apellidom" class="form-control" type="text" value="<?php echo $rowE[3]; ?>" required/> 
                                        </div>
                                    </div>
                               
                               
                                    <div class="form-group">
                                        <label for="cargo">Cargo </label>
                                        <input id="cargo" name="cargo" class="form-control" type="text" value="<?php echo $rowE[4]; ?>" required/> 
                                    </div>
                               
                                
                              
                                    <div class="form-group">
                                        <label  for="telefono">Telefono</label>
                                        <input id="cantidad" name="telefono" class="form-control" type="text" value="<?php echo $rowE[5]; ?>" required/> 
                                    </div>
                              
                               
                                
                                    <div class="form-group">
                                        <label  for="email">Correo electronico</label>
                                        <input id="email" name="email" class="form-control" type="text" value="<?php echo $rowE[6]; ?>" required/> 
                                    </div>
                             
                              
                                    <div class="form-group">
                                        <label  for="usuario">Nombre de ususario</label>
                                        <input id="usuario" name="usuario" class="form-control" type="text" value="<?php echo $rowE[7]; ?>" required/> 
                                    </div>
                               
                               
                                    <div class="form-group">
                                        <label  for="password">Contraseña</label>
                                        <input id="cantidad" name="password" class="form-control" type="text" value="<?php echo $rowE[8]; ?>" readonly/> 
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
    
    $nombre=$_POST['nombre'];
    $apellidop=$_POST['apellidop'];
    $apellidom=$_POST['apellidom'];
    $cargo=$_POST['cargo'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $usuario=$_POST['usuario'];
    $password=sha1($_POST['password']);


    $sql = " update `tbpersona` SET nombres='" . $nombre . "',apellidopaterno='" . $apellidop . "',apellidomaterno='" . $apellidom . "',cargo='" . $cargo . "',telefono='"
            . $telefono . "',email='" . $email . "',usuario='" . $usuario. "',password='" . $password. "' WHERE idpersona=".$idper;

    echo $sql;
    $result = mysqli_query($link, $sql);
    if ($result) {
        header("Location: personas.php");
        echo "<div class=\"alert alert-success\">Actualizacion exitoso</div>";
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