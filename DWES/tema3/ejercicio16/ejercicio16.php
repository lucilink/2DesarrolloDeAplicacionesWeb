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
                    <h2>EJERCICIO 16</h2>
                    <div style="background-color:#f9f9f9">
<?php
            /**
             *  autor: Lucía Rodríguez Álvarez  
             *  fecha creacion: 2018-03-12
             */
            $acumuladorSueldo=0; //acumulador para el total del sueldo
            //Array encargado de almacenar los dias de la semana y el sueldo de ese dia
            $aDias=array(
                'Lunes'=>64,
                'Martes'=>56,
                'Miercoles'=>64,
                'Jueves'=>56,
                'Viernes'=>48,
                'Sabado'=>0,
                'Domingo'=>0
            );
            
            /**
             * Usamos funciones para recorrer el array:
             * function reset(): resetea el puntero interno del array. Devuelve el valor del primer elemento de un array o FALSE si el array está vacío.
             * function key(): devuelve la clave del elemento del array que está apuntando actualmente el puntero interno, 
             *                si donde apunta el puntero no hay nada, la funcion devuelve null
             * function current(): devuelve el valor del elemento del array que está apuntando actualmente el puntero interno, 
             *                si donde apunta el puntero no hay nada, la funcion devuelve false
             * function next(): devuelve el valor del array en el siguiente lugar que está apuntado por el puntero interno o 
             *                  false si no hay más elementos.
             */
            reset ($aDias);
           do{ //Bucle que recorre el array hasta que no haya mas elementos
                echo "<br>Dia: ".key($aDias)." sueldo: ".current($aDias)."<br>"; 
                $acumuladorSueldo+=current($aDias); //acumulador que suma las cantidades de cada dia
            }while (next($aDias)); 
            
            /**
             * funcion que formatea un numero para que se muestre con lo decimales que tu quieras
             * el primer parametro es el numero que queremos formatear
             * el segundo parametro el numero de decimales que queremos
             * el tercero parametro es el separador que utilizaremos para los numero decimales
             * el cuarto parametro es el separador que utilizaremos para los millares
             * a esta funcion se le puden pasar uno dos o cuatro parametros pero no tres.
             */
            $sueldoConDecimales=number_format($acumuladorSueldo, 2, '.', '');
            echo "<br><p>El sueldo total de la semana es ".$sueldoConDecimales." € </p>"; 
            
            printf("<h3>Con printf</h3>El sueldo total de la semana es ".$sueldoConDecimales." € ");
            
            
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