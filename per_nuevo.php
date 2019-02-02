<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
                            <div class="form_description">
                                <h2>Resgistro de Personas</h2>
                               
                            </div>						
                            <div class="form-group">
                                <label for="nombre">Nombre </label>
                                <input id="nombre" name="nombre" class="form-control" type="text" value=""/> 
                            </div>
                            <div class="form-group">
                                <label for="appaterno">Apellido Paterno </label>
                                <input id="appaterno" name="appaterno" class="form-control" type="text" value=""/> 
                            </div>
                            <div class="form-group">
                                <label  for="apmaterno">Apellido Materno </label>
                                <input id="apmaterno" name="apmaterno" class="form-control" type="text" value=""/> 
                            </div>
                            <div class="form-group">
                                <label for="cargo">cargo </label>
                                <input id="cargo" name="cargo" class="form-control" type="text" value=""/> 
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono </label>
                                <input id="telefono" name="telefono" class="form-control" type="number" value=""/> 
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electronico </label>
                                <input id="email" name="email" class="form-control" type="email" value=""/> 
                            </div>
                            <div class="form-group">
                                <label for="usuario">Nombre de usuario </label>
                                <input id="usuario" name="usuario" class="form-control" type="text" value=""/> 
                            </div>
                            <div class="form-group">
                                <label for="email">Contraseña</label>
                                <input id="password" name="password" class="form-control" type="password" value=""/> 
                            </div>
                            <input id="saveForm" class="btn btn-primary" type="submit" name="Guardar" value="Guardar" />
                        </form>	
                        <br>
                        <a href="bienvenida.php" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> OK</a> 
                        </br>
                    </div>
                </div>
                <?php
            if($_POST['Guardar']){
                
                $nombre=$_POST['nombre'];
                $apellidoP=$_POST['appaterno'];
                $apellidoM=$_POST['apmaterno'];
                $cargo=$_POST['cargo'];
                $telefono=$_POST['telefono'];
                $email=$_POST['email'];
                $usuario=$_POST['usuario'];
                $password=sha1($_POST['password']);
                
                $sql=" INSERT INTO `tbpersona`(`nombres`, `apellidopaterno`, `apellidomaterno`, `cargo`, `telefono`, `email`, `usuario`, `password`) VALUES ("
                        ."'".$nombre."','".$apellidoP."','".$apellidoM."','".$cargo."',".$telefono.",'".$email."','".$usuario."','".$password."')";
                echo $sql;
                $result = mysqli_query($link,$sql);
                if($result){
                    header("Location: personas.php");
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
