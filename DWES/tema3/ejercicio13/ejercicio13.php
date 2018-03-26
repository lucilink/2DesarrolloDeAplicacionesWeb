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
                    <h2>EJERCICIO 13</h2>
                    <div style="background-color:#f9f9f9">
<?php
    //13. Crear una función que cuente el número de visitas a la página actual desde una fecha concreta.
   $fecha_actual= strtotime(date("d-m-Y H:i:00", time()));//guardamos la fecha de hoy en una variable
    //strtotime  Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix
   //time devuelve la fecha Unix actual
   $fecha_comienzo=strtotime(date("10-01-2018 00:00:00", time()));  //variable que contiene el momento desde el que se empieza a contar
   $archivo=fopen("visitas.txt","r");//fopen abre un fichero, recibe el nombre de este y como lo abre r es Apertura para sólo lectura; 
   $contador= fgets($archivo,26);//contador recibe la posicion del puntero fgets Obtiene una línea desde el puntero al fichero.
   
   fclose($archivo);//fclose cierra un fichero abierto
   //si la fecha actual cuando se visita es mayor que la del comienzo se suma uno al contador
   if($fecha_actual > $fecha_comienzo){
       ++$contador;//incrementamos el contador
       $archivo=fopen("visitas.txt","w+");//se vuelve a abrir el archivo en este caso en modo  escritura y lectura
       fwrite($archivo, $contador, 26); //fwrite escribe en el fichero
       //26 lenght Si se da el argumento length, la escritura se detendrá después de que el numero indicado en length bytes 
       //hayan sido escritos o se alcance el final de string, lo que suceda primero.
       fclose($archivo);//cerramos el archivo
   }
   //se muestra un mensaje con el numero de visitas
   echo "La pagina se ha visitado ".$contador." veces";
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