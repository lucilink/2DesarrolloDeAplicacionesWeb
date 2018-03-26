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
                    <h2>EJERCICIO 4</h2>
                    <div style="background-color:#f9f9f9">
                    <?php
                    date_default_timezone_set('Europe/Lisbon'); //Establecemos la zona horaria de Lisboa, para la hora de Portugal.
                    $numero_mes = date("m");
                    $numero_dia_semana = date("N");
                    switch($numero_mes){
                        case 1: $mes = "janeiro";
                            break;
                        case 2: $mes = "fevereiro";
                            break;
                        case 3: $mes = "março";
                            break;
                        case 4: $mes = "abril";
                            break;
                        case 5: $mes = "maio";
                            break;
                        case 6: $mes = "junho";
                            break;
                        case 7: $mes = "julho";
                            break;
                        case 8: $mes = "agosto";
                            break;
                        case 9: $mes = "setembro";
                            break;
                        case 10: $mes = "outubro";
                            break;
                        case 11: $mes = "novembro";
                            break;
                        case 12: $mes = "dezembro";
                            break;
                    } //Según el número de mes devulve el nombre del mismo.
                    switch($numero_dia_semana){
                        case 1: $dia_semana = "Segunda-feira";
                            break;
                        case 2: $dia_semana = "Terça-Feira";
                            break;
                        case 3: $dia_semana = "Quarta-Feira";
                            break;
                        case 4: $dia_semana = "Quinta-Feira";
                            break;
                        case 5: $dia_semana = "Sexta-Feira";
                            break;
                        case 6: $dia_semana = "Sábado";
                            break;
                        case 7: $dia_semana = "Domingo";
                            break;
                    }//Según el número de día devulve el nombre del mismo.
                    print $dia_semana.", ".date("j")." de ".$mes." de ".date("Y")." ".date("g:i:s");
                    //Devuelve la fecha formateada como Dia de la semana, dia, mes y año.
                    echo "<br>";
                    $fecha = date("d-m-Y h:i:s");
                    echo $fecha; //Devuelve la fecha en tipo numérico
                    echo "<br>";
                    $fecha = date("D-M-Y g:i:s A");
                    echo $fecha; //Devuelve las iniciales del dia de la semana y mes,en inglés, y la hora de 1 a 12 indicando AM o PM
                    echo "<br>";
                    $fecha = date("l-F-Y g:i:s A");
                    echo $fecha; //Devuelve las iniciales del dia de la semana y mes,en inglés, y la hora de 1 a 12 indicando AM o PM
                    ?>
                    <h4>Las mismas fechas mostradas en español:</h4>
                    <?php
                    setlocale(LC_ALL, 'es_ES.UTF-8');//Establece un valor local al castellano.
                    echo strftime("%A %d de %B del %Y");
                    ?>
                    <h4>Las mismas fechas mostradas en portugues:</h4>
                    <?php
                    setlocale(LC_ALL, 'pt_BR.UTF-8');//Establece un valor local al castellano.
                    echo strftime("%A %d de %B del %Y");//No funciona
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