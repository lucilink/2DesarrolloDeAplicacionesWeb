<!DOCTYPE html>

<html>
    <head>
        <title>LUCI</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../../webroot/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../../webroot/css/estilos.css">
    </head>
    
    <body >
		
    <header>

        <h1>DESARROLLO WEB EN ENTORNO SERVIDOR</h1>
        <nav class="navbar navbar-default" style="margin-bottom: 0%;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="../../../index.html"><img src="../../../webroot/imagenes/logo.PNG" class="img-responsive pull-left" alt="" width="100" height="100"></a>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="../../index.html" style="color:white;">DESARROLLO WEB EN ENTORNO SERVIDOR</a></li>
                        <li><a href="../../../DWEC/index.html" style="color:white;">DESARROLLO WEB EN ENTORNO CLIENTE</a></li>
                        <li><a href="../../../DIW/index.html" style="color:white;">DISEÑO DE INTERFACES WEB</a></li>
                        <li><a href="" style="color:white;">DESPLIEGUE DE APLICACIONES WEB</a></li>
                    </ul>
                </div>

            </div>
        </nav>

    </header>
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-2 coltemas mb-4" style="">
                    <div class="main-content-dwes2">	
                            <h3><a href="../../tema1/indexTema1.html">Tema 1</a></h3><br>
                            <h3><a href="#">Tema 2</a></h3><br>
                            <h3><a href="../indexTema3.html">Tema 3</a></h3><br>
                            <h3><a href="#">Tema 4</a></h3><br>
                            <h3><a href="#">Tema 5</a></h3><br>
                            <h3><a href="#">Tema 6</a></h3><br>
                            <h3><a href="#">Tema 7</a></h3>					
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-9"style="padding-top: 1%;" >
                    <h2>EJERCICIO 6</h2>
                    <div style="background-color:#f9f9f9">
                    <?php
                    //6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
                    /**
                     * autor Lucía Rodríguez Álvarez
                     * fecha creacion: 2018-03-09
                     * fecha ultima modificacion: 2018-03-12
                     */
                    date_default_timezone_set('Europe/Madrid'); //Establecemos la zona horaria
                    $fechaHoy=date('Y-m-d'); //Variable que almacena la fecha de hoy
                    echo "<h5>FECHA HOY</h5>Fecha de hoy: ".$fechaHoy."<br>"; //Mostramos la fecha de hoy
                    $fecha=strtotime($fechaHoy."+60 days"); //Variable que le suma 60 dias a la fecha actual
                    echo "<h2>CON STRTOTIME</h2>Fecha dentro de 60 dias: ".date("Y-m-d",$fecha); //Mostramos la fecha dentro de dias por pantalla

                    //con mktime
                    echo "<br><h2>CON MKTIME</h2>La fecha dentro de 60 dias sera ".date('Y-m-d', mktime(0, 0, 0, date("m"), date("d")+60, date("Y")));

                    $fecha2 = date_create($fechaHoy);
                    date_add($fecha2, date_interval_create_from_date_string('60 days'));
                    echo "<br><h2>CON DateTime::add()</h2>La fecha dentro de 60 dias sera ".date_format($fecha2, 'Y-m-d');
                    ?>
                    </div>
                </div>
            </div>
        </div>
			
        <footer>
            <div class="container">
				<div class="row">
                    <div class="col-lg-4">                        
                        <p><em>Lucía Rodríguez Álvarez</em></p>
                    </div>
                    <div class="col-lg-4">
                        <p><a href="https://github.com/lucilink/DWES-PHP"><img alt="" src="../../webroot/imagenes/logogithub.png" width="30" ></a></p>
                    </div>
                    <div class="col-lg-4">
                        <p><a href="http://daw-usgit.sauces.local/LRA_1718/DWES/tree/master"><img alt="" src="../../webroot/imagenes/logogitlab.png" width="30" ></a></p>
                    </div>
                </div>
			
            </div>
        </footer>
		
		<script src="../../webroot/js/jquery.js"></script>    
		<script src="../../webroot/js/bootstrap.min.js"></script>
        
    </body>
</html>