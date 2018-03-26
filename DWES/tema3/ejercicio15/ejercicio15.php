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
                    <h2>EJERCICIO 15</h2>
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
            foreach ($aDias as $dia=>$sueldo){ //recorremos el array con un bucle
                echo "<br><p>El dia ".$dia." ha cobrado ".$sueldo."</p>"; //mostramos el sueldo de cada dia de la semana
                $acumuladorSueldo+=$sueldo; //sumamos el sueldo de ese dia
            }
            
            echo "<br><p>El sueldo total de la semana es ".$acumuladorSueldo." € </p></br>"; 
           // printf("%.1f",$num); 
            printf("<h3>Con printf</h3>El sueldo total de la semana es "."%.2f",$acumuladorSueldo);echo " €";
            
            
            /**
             *  autor: Lucía Rodríguez Álvarez  
             *  fecha creacion: 2018-03-13
             */ 
           /* 
            * echo "<h3>Ejercicio Provincias - solucion 1</h3>";
            * for($i=0;$i<365;$i++){
                $aDatos[$i]['Leon']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Zamora']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Valladolid']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Salamanca']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Soria']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Segovia']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Palencia']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Burgos']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Avila']=array("temperatura"=>null,"presion"=>null);
            }
            $aDatos['20']['Leon']['temperatura']="10";
            $aDatos['30']['Leon']['presion']="1000";
            $aDatos['50']['Zamora']['temperatura']="15";
            $aDatos['120']['Burgos']['temperatura']="20";
           
            
            
             for($i=0;$i<365;$i++){
                 if (!empty($aDatos[$i]['Leon']['temperatura'])){
                      print "<br> La temperatura en Leon el dia ".$i." es ".$aDatos[$i]['Leon']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Leon']['presion'])){
                      print "<br> La presion en Leon el dia ".$i." es ".$aDatos[$i]['Leon']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Avila']['temperatura'])){
                      print "<br> La temperatura en Avila el dia ".$i." es ".$aDatos[$i]['Avila']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Avila']['presion'])){
                      print "<br> La presion en Avila el dia ".$i." es ".$aDatos[$i]['Avila']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Zamora']['temperatura'])){
                      print "<br> La temperatura en Zamora el dia ".$i." es ".$aDatos[$i]['Zamora']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Zamora']['presion'])){
                      print "<br> La presion en Zamora el dia ".$i." es ".$aDatos[$i]['Zamora']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Salamanca']['temperatura'])){
                      print "<br> La temperatura en Salamanca el dia ".$i." es ".$aDatos[$i]['Salamanca']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Salamanca']['presion'])){
                      print "<br> La presion en Salamanca el dia ".$i." es ".$aDatos[$i]['Salamanca']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Segovia']['temperatura'])){
                      print "<br> La temperatura en Segovia el dia ".$i." es ".$aDatos[$i]['Segovia']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Segovia']['presion'])){
                      print "<br> La presion en Segovia el dia ".$i." es ".$aDatos[$i]['Segovia']['presion'];
                 }

                if (!empty($aDatos[$i]['Soria']['temperatura'])){
                      print "<br> La temperatura en Soria el dia ".$i." es ".$aDatos[$i]['Soria']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Soria']['presion'])){
                      print "<br> La presion en Soria el dia ".$i." es ".$aDatos[$i]['Soria']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Palencia']['temperatura'])){
                      print "<br> La temperatura en Palencia el dia ".$i." es ".$aDatos[$i]['Palencia']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Palencia']['presion'])){
                      print "<br> La presion en Palencia el dia ".$i." es ".$aDatos[$i]['Palencia']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Burgos']['temperatura'])){
                      print "<br> La temperatura en Burgos el dia ".$i." es ".$aDatos[$i]['Burgos']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Burgos']['presion'])){
                      print "<br> La presion en Burgos el dia ".$i." es ".$aDatos[$i]['Burgos']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Valladolid']['temperatura'])){
                      print "<br> La temperatura en Valladolid el dia ".$i." es ".$aDatos[$i]['Valladolid']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Valladolid']['presion'])){
                      print "<br> La presion en Valladolid el dia ".$i." es ".$aDatos[$i]['Valladolid']['presion'];
                 }  
                 
             }*/
            echo "<h3>Ejercicio Provincias Temperaturas y Presiones- solucion 2</h3>";
            
            date_default_timezone_set('Europe/Madrid');
            $fechaTope=new DateTime('2018-12-31');
            // $fecha->add(new DateInterval('P10D'));
            for($i=new DateTime('2018-01-01');$i<=$fechaTope;$i->add(new DateInterval('P1D'))){
                
                $aDatos[$i->format('Y-m-d')]['Leon']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i->format('Y-m-d')]['Zamora']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i->format('Y-m-d')]['Valladolid']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i->format('Y-m-d')]['Salamanca']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i->format('Y-m-d')]['Soria']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i->format('Y-m-d')]['Segovia']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i->format('Y-m-d')]['Palencia']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i->format('Y-m-d')]['Burgos']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i->format('Y-m-d')]['Avila']=array("temperatura"=>null,"presion"=>null);
            //           echo "dia: ".$i->format('Y-m-d')."<br>";

            }
            $aDatos['2018-01-10']['Leon']['temperatura']="5";
            $aDatos['2018-02-25']['Leon']['temperatura']="10";
            
            for($i=new DateTime('2018-01-01');$i<=$fechaTope;$i->add(new DateInterval('P1D'))){
                 if (!empty($aDatos[$i->format('Y-m-d')]['Leon']['temperatura'])){
                      print "<br> La temperatura en Leon el dia ".$i->format('Y-m-d')." es ".$aDatos[$i->format('Y-m-d')]['Leon']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i->format('Y-m-d')]['Leon']['presion'])){
                      print "<br> La presion en Leon el dia ".$i->format('Y-m-d')." es ".$aDatos[$i->format('Y-m-d')]['Leon']['presion'];
                 }
                 
                /* if (!empty($aDatos[$i]['Avila']['temperatura'])){
                      print "<br> La temperatura en Avila el dia ".$i." es ".$aDatos[$i]['Avila']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Avila']['presion'])){
                      print "<br> La presion en Avila el dia ".$i." es ".$aDatos[$i]['Avila']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Zamora']['temperatura'])){
                      print "<br> La temperatura en Zamora el dia ".$i." es ".$aDatos[$i]['Zamora']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Zamora']['presion'])){
                      print "<br> La presion en Zamora el dia ".$i." es ".$aDatos[$i]['Zamora']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Salamanca']['temperatura'])){
                      print "<br> La temperatura en Salamanca el dia ".$i." es ".$aDatos[$i]['Salamanca']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Salamanca']['presion'])){
                      print "<br> La presion en Salamanca el dia ".$i." es ".$aDatos[$i]['Salamanca']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Segovia']['temperatura'])){
                      print "<br> La temperatura en Segovia el dia ".$i." es ".$aDatos[$i]['Segovia']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Segovia']['presion'])){
                      print "<br> La presion en Segovia el dia ".$i." es ".$aDatos[$i]['Segovia']['presion'];
                 }

                if (!empty($aDatos[$i]['Soria']['temperatura'])){
                      print "<br> La temperatura en Soria el dia ".$i." es ".$aDatos[$i]['Soria']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Soria']['presion'])){
                      print "<br> La presion en Soria el dia ".$i." es ".$aDatos[$i]['Soria']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Palencia']['temperatura'])){
                      print "<br> La temperatura en Palencia el dia ".$i." es ".$aDatos[$i]['Palencia']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Palencia']['presion'])){
                      print "<br> La presion en Palencia el dia ".$i." es ".$aDatos[$i]['Palencia']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Burgos']['temperatura'])){
                      print "<br> La temperatura en Burgos el dia ".$i." es ".$aDatos[$i]['Burgos']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Burgos']['presion'])){
                      print "<br> La presion en Burgos el dia ".$i." es ".$aDatos[$i]['Burgos']['presion'];
                 }
                 
                 if (!empty($aDatos[$i]['Valladolid']['temperatura'])){
                      print "<br> La temperatura en Valladolid el dia ".$i." es ".$aDatos[$i]['Valladolid']['temperatura']." grados";
                 }
                 if (!empty($aDatos[$i]['Valladolid']['presion'])){
                      print "<br> La presion en Valladolid el dia ".$i." es ".$aDatos[$i]['Valladolid']['presion'];
                 }  */
            }?>
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