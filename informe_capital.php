<?php

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
        <title>Infrome conteo</title>

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
                                <h2>CONTROL DE CAPITAL SEGUN SISTEMA</h2>
                               
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fecha">Fecha </label>
                                        <input id="fecha" name="fecha" class="form-control" type="text" value="<?php echo date('Y-m-d'); ?>" disabled/> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="encargado">Usuario </label>
                                            <input id="encargado" name="encargado" class="form-control" type="text" value="<?php echo $_SESSION['usuario']; ?>" disabled/> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="hora">Hora </label>
                                        <input id="hora" name="hora" class="form-control" type="text" value="<?php echo date('G:i:s'); ?>" disabled/> 
                                    </div>
                                </div>
                            </div>
                 </form>
          </div>
        </div>
       </div>
   </div>
        
        
        
        
        <div id="wrapper">
            <div class="container">
                <div class="row" id="listaPersonas">
                    <h3>DATOS</h3>
                   
                    <table class="table table-responsive table-striped">
                        <tr>
                            <th>Id producto</th>
                            <th>Nombre</th>
                            <th>Cant sistema</th>
                            <th>Costo Promedio</th>
                            <th>Capital sistema</th>
                            <th>cant fisica</th>
                            <th>faltantes</th>
                        </tr>
                       
                       <?php
                           $sqlCantSis = "coalesce("
                                            ."(select sum(m.cantidad)"
                                               ." from tbmovimiento as m"
                                               ." where m.idproducto=p.idproducto "
                                               ."and m.tipomovimiento='Entrada')"
                                          .",0) - coalesce("
                                            ."(select sum(m.cantidad)"
                                               ." from tbmovimiento as m"
                                               ." where m.idproducto=p.idproducto "
                                               ."and m.tipomovimiento='Salida')"
                                          .",0)";
                           $SqlCosto = "coalesce("
                                        ."(select avg(e.costo)"
                                           ." from tbmovimiento as m inner join tbentrada as e"
                                           ." on m.idmovimiento=e.idmovimiento"
                                           ." where m.idproducto=p.idproducto "
                                           ."and m.tipomovimiento='Entrada')"
                                       .",0)";
                           $sqlCantFis = "coalesce("
                                        ."(select sum(c.cantidadfisica)"
                                           ." from tbconteoproducto as c"
                                           ." where c.idproducto=p.idproducto)"
                                        .",0)";
                           $sql="SELECT p.idproducto, p.nombre,"
                           .$sqlCantSis.","
                           .$SqlCosto.","
                           .$sqlCantSis." * ".$SqlCosto.","
                           .$sqlCantFis.","
                           .$sqlCantFis." - ".$sqlCantSis.""
                           ." FROM tbproducto as p";
                          $result = mysqli_query($link,$sql) or die ("Error");
                            
                           while($row = mysqli_fetch_row($result)){
                       ?>
                      
 
                        <tr>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                            <td><?php echo $row[6]; ?></td>
                            

                        </tr>
                        <?php
                           }
                        ?>
                    </table>
                 <a href="bienvenida.php" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> OK</a> 
                </div>
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