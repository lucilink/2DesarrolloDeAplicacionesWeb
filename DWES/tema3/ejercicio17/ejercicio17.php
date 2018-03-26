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
                    <div class="main-content-dwes15">	
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
                    <h2>EJERCICIO 17</h2>
                    <div style="background-color:#f9f9f9">
<?php

        $asiento[4][2]="Pepe";
        $asiento[5][7]="Lucia";
        $asiento[2][8]="Juan";
        $asiento[9][1]="Alejandro";
        $asiento[7][9]="Maria";
        $asiento[1][5]="Pablo";

        echo "<h2>Usando for:</h2>";
        for ($fila = 0;$fila < 20;$fila++){
            for($columna = 0;$columna < 15;$columna++){
                if (!empty($asiento[$fila][$columna])){
                    echo "Fila: ".$fila." Columna: ".$columna." Nombre: ".$asiento[$fila][$columna]."<br>";
                }
            }
        }
        echo "<h2>Usando foreach:</h2>";
        foreach($asiento as $plaza => $fila){
            foreach($fila as $butaca => $asistente){
                print("En la fila ".$plaza. " y butaca ".$butaca. " se encuentra ".$asistente);
                print "</br>";
            }
        }

        echo '<h2>Ejercicio Examen</h2>';

        for($i = 0; $i< 365;$i++){
            $datos[$i]['Avila']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Burgos']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Leon']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Palencia']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Salamanca']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Segovia']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Soria']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Valladolid']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Zamora']= array('Temperatura'=>null,'Presion'=>null);
        }
        $datos[32]['Avila']['Temperatura']=14;
        $datos[32]['Avila']['Presion']=1013;
        $datos[32]['Burgos']['Temperatura']=15;
        $datos[32]['Burgos']['Presion']=1047;
        $datos[32]['Leon']['Temperatura']=15;
        $datos[32]['Leon']['Presion']=1024;
        $datos[32]['Palencia']['Temperatura']=12;
        $datos[32]['Palencia']['Presion']=1013;
        $datos[32]['Salamanca']['Temperatura']=18;
        $datos[32]['Salamanca']['Presion']=1020;
        $datos[32]['Segovia']['Temperatura']=16;
        $datos[32]['Segovia']['Presion']=1036;
        $datos[32]['Soria']['Temperatura']=12;
        $datos[32]['Soria']['Presion']=1013;
        $datos[32]['Valladolid']['Temperatura']=20;
        $datos[32]['Valladolid']['Presion']=1025;
        $datos[32]['Zamora']['Temperatura']=19;
        $datos[32]['Zamora']['Presion']=1050;

        for ($dia=0;$dia<365;$dia++){
            if(!empty($datos[$dia]['Avila']['Temperatura'])){print "La temperatura en Ávila el dia ".$dia." es ".$datos[$dia]['Avila']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Burgos']['Temperatura'])){print "<br> La temperatura en Burgos el dia ".$dia." es ".$datos[$dia]['Burgos']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Leon']['Temperatura'])){print "<br> La temperatura en Leon el dia ".$dia." es ".$datos[$dia]['Leon']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Palencia']['Temperatura'])){print "<br> La temperatura en Palencia el dia ".$dia." es ".$datos[$dia]['Palencia']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Salamanca']['Temperatura'])){print "<br> La temperatura en Salamanca el dia ".$dia." es ".$datos[$dia]['Salamanca']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Segovia']['Temperatura'])){print "<br> La temperatura en Segovia el dia ".$dia." es ".$datos[$dia]['Segovia']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Soria']['Temperatura'])){print "<br> La temperatura en Soria el dia ".$dia." es ".$datos[$dia]['Soria']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Valladolid']['Temperatura'])){print "<br> La temperatura en Valladolid el dia ".$dia." es ".$datos[$dia]['Valladolid']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Zamora']['Temperatura'])){print "<br> La temperatura en Zamora el dia ".$dia." es ".$datos[$dia]['Zamora']['Temperatura']."ºC";}
        }

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